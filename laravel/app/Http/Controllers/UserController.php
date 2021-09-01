<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = User::all();

        return view('users.index', ["users" => $users]);
    }

    public function mostrarNomeDoUsuario($id){
        $user = User::find($id);
        return view('users.show', [
            "user" => $user
        ]);
    }

    public function store(Request $request){
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

