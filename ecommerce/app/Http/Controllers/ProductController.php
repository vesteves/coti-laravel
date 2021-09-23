<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProdutcStoreRequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $product->img = Storage::url($product->img);
        return view('products.show', ["product" => $product]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(ProdutcStoreRequest $request)
    {
        Product::create([
            "title" => $request->title,
            "description" => $request->description,
            "img" => $request->img->store('images', 'public'),
            "price" => $request->price
        ]);

        // criar o produto
        return back();
    }
}
