@extends('layout.app')

@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-5" style="background-color: #bf0041; color: #fff; text-align: center;">
            <img src="{{ asset($product['img']) }}">
        </div>
        <div class="col-1" style="text-align: center;">
            VAZIO
        </div>
        <div class="col-6" style="color: #fff; text-align: center;">
            <div class="row mb-4" style="background-color: #bf0041;">
                <div class="col">{{ $product['title'] }}</div>
            </div>
            <div class="row mb-4">
                <div class="col"></div>
                <div class="col" style="background-color: #bf0041;">{{ $product["price"] }}</div>
                <div class="col"></div>
            </div>
            <div class="row" style="background-color: #bf0041; color: #fff;">
                <div class="col">{{ $product["description"] }}</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @auth
            <form action="/orders" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                <button type="submit" class="btn btn-outline-primary w-100">Enviar proposta</button>
            </form>
            @endauth

            @guest
            <div>É necessário fazer login para comprar. <a href="/login">Clique aqui</a></div>
            @endguest
        </div>
    </div>
</div>
@endsection
