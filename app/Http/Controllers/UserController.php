<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::orderBy('id','desc')->get();
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
        return view('psicologos.create');
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
        return view('psicologos.edit',['user'=> $user]);

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
