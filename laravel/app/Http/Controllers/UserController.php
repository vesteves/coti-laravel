<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use \App\Models\Option;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $options = Option::all();

        return view('users.index', [
            "users" => $users,
            "options" => $options
        ]);
    }

    public function mostrarNomeDoUsuario($id)
    {
        $user = User::find($id);
        return view('users.show', [
            "user" => $user
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        User::create([
            "name" => $request->nome,
            "password" => bcrypt($request->senha),
            "email" => $request->email
        ]);

        $users = User::all();
        return view('users.index', [
            "users" => $users
        ]);
    }
}
