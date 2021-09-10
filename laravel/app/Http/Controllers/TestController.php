<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Option;

class TestController extends Controller
{
    public function test()
    {
        $alunos = [
            [
                "nome" => "Fernando"
            ],
            [
                "nome" => "Jonathan"
            ],
            [
                "nome" => "Renato"
            ]
        ];

        return view('test', [
            "show_div" => false,
            "string_var" => "esta é uma string",
            "alunos" => $alunos,
            "users" => User::all(),
            "html" => "<div style='color: red'>este é um html</div>",
            "options" => Option::all()
        ]);
    }
}
