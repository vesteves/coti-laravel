<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForwardedOrder;
use App\Models\Product;

class OrderController extends Controller
{
    public function index()
    {
        return view('users.orders', [
            "orders" => Auth::user()->orders
        ]);
    }

    public function store(Request $request)
    {
        // preciso receber o produto
        // dd($request->product_id);

        // preciso receber o usuário autenticado
        // dd(Auth::user()->id);

        // preciso criar uma Order com o product_id e user_id pegos anteriormente
        Order::create([
            "product_id" => $request->product_id,
            "user_id" => Auth::user()->id
        ]);

        // preciso enviar um e-mail para o dono do e-commerce
        Mail::to('pedidos@ecommerce.com.br')->send(new ForwardedOrder(Auth::user(), Product::find($request->product_id)));

        // enviar o usuário para uma listagem de pedidos
        return view('users.orders', [
            "orders" => Auth::user()->orders
        ]);
    }
}
