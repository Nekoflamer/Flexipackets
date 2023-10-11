<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //dd($request);
        //dd($request->get('username));

        //modificar el request
        $request->request->add(['username' => Str::slug($request->username)]);

        //validación
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|min:8|max:16|unique:users',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:8',

        ]);

        User::create([
            'name' => $request->name,
            'username' => Str::slug($request->username),
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //autenticar
        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);
        //redireccionar
        return redirect()->route('posts.index');
    }
}
