<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForwardedOrder;

class EmailController extends Controller
{
    public function email()
    {
        Mail::to('aluno@cotiinformatica.com.br')->send(new ForwardedOrder());
    }
}
