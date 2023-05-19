<?php

namespace App\Http\Controllers;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:user.index')->only('index');
        $this->middleware('permission:user.create')->only(['create','store']);
        // $this->middleware('permission:user.edit')->only(['edit','update']);
        $this->middleware('permission:user.destroy')->only('destroy');

        // Este middleware reemplaza el uso del middleware de permissions 
        // Se usó de esta forma para no tener que agregar el permiso de 
        // user.edit al rol Psicologo y a su vez permitir que un 
        // usuario con rol Psicologo pueda editar su propia información
        $this->middleware(function(Request $request, Closure $next){
            $auth_user = User::find(Auth::user()->id);
            if ($auth_user->hasPermissionTo('user.edit')){
                return $next($request);
            }elseif($auth_user->hasRole('Psicologo') && $request->route()->parameter("user")->id == $auth_user->id){
                return $next($request);
            }
            else{
                abort(403);
            }
        })->only(['edit', 'update']);

        // La lógica de este middleware estaba antes dentro del metodo
        // update pero movió a middleware para que la lógica se valide
        // antes de entrar al método update
        $this->middleware(function(Request $request, Closure $next){
            $user = User::find(Auth::user()->id);
             // Verificar que el usuario actual no esté editando su propio rol
            if ($request->route()->parameter('user')->id == Auth::user()->id) {
                if (!$user->hasRole(Role::find($request->role)->name)) {
                    abort(403, 'No puede editar su propio rol mientras este conectado.');
                }
            }
            return $next($request);
        })->only('update');

    }
    
    public function index()
    {
        //
        $users = User::orderBy('id')->get();
        return view('psicologos.index',['users'=> $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $roles = Role::all();
        return view('psicologos.create',['roles'=>$roles]);
        // return view('psicologos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
        //     'name'=>'required|max:255',
             'email'=>'required|unique:users|email|max:255',
             'password'=>'required|between:8,255|confirmed',
             'password_confirmation'=>'required'
        ]);


        $user = new User;

        $user->name = $request->nombre;
        $user->surname = $request->apellido;
        $user->secondSurname = $request->apellido2;
        $user->phone = $request->telefono;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->assignRole($request->role);
        $user->save();

        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        $roles = Role::all();
        return view('psicologos.edit',['user'=> $user, 'roles'=>$roles]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $request->validate([
            //     'name'=>'required|max:255',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
            // Validar la contraseña
            'password' => 'nullable|string|min:8|required_with:password_confirmation|confirmed',
        ]);

        // Si se proporcionó una nueva contraseña, cifrarla y actualizarla
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->name = $request->nombre;
        $user->surname = $request->apellido;
        $user->secondSurname = $request->apellido2;
        $user->email = $request->email;
        $user->phone = $request->telefono;
        if(count($user->getRoleNames()) > 0){
            $user->removeRole('Psicologo');
            $user->removeRole('Admin');
            $user->removeRole('SuperAdmin');
        }
        $user->assignRole($request->role);
        $user->save();
        if (User::find(Auth::user()->id)->hasRole('Psicologo')){
            return redirect('/dashboard');
        }
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        // $url = str_replace('storage', 'public', $user->url);

        // Storage::delete($url);

        $user->delete();
        return redirect('/user')->with('eliminar', 'ok');

    }
}
