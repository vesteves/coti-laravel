<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = [
            "id" => 1,
            "title" => "Produto 1",
            "description" => "Este é um produto de número 1",
            "img" => "https://via.placeholder.com/400x400",
            "price" => "R$ 12,50"
        ];
        return view('products.show', ["product" => $product]);
    }
}
