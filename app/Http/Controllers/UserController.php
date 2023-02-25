<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:user.index')->only('index');
        $this->middleware('permission:user.create')->only(['create','store']);
        $this->middleware('permission:user.edit')->only(['edit','update']);
        $this->middleware('permission:user.destroy')->only('destroy');
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
        // $request->validate([
        //     'name'=>'required|max:255',
        //     'email'=>'required|unique:user|email|max:255',
        //     'password'=>'required|between:8,255|confirmed',
        //     'password_confirmation'=>'required',
        // ]);


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
