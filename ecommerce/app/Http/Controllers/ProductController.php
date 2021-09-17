<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        return view('products.show', ["product" => $product]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $qquernome)
    {
        $product = Product::create([
            "title" => $qquernome->title,
            "description" => $qquernome->description,
            "img" => $qquernome->img,
            "price" => $qquernome->price
        ]);

        dd($product);

        // criar o produto
        return back();
    }
}
