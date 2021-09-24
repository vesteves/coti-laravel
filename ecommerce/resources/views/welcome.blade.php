@extends('layout.app')

@section('content')
<div class="text-center my-4">
    <img src="https://via.placeholder.com/950x342" alt="banner principal">
</div>
<div class="container">
    <div class="row">
        @foreach($products as $product)
        <div class="col-4 my-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset($product['img']) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $product["title"] }}</h5>
                    <p class="card-text">{{ $product["description"] }}</p>
                    <p class="card-text">{{ $product["price"] }}</p>
                    <a href="/products/{{ $product['id'] }}" class="btn btn-primary">Ver produto</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
