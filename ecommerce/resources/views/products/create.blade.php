@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">FORMULARIO DE CRIACAO</div>
    </div>

    <div class="row">
        <div class="col">
            <form action="/products" method="post">
                @csrf
                <label>Título</label>
                <input type="text" name="title" />
                <label>Descrição</label>
                <input type="text" name="description" />
                <label>Imagem</label>
                <input type="text" name="img" />
                <label>Preço</label>
                <input type="text" name="price" />
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</div>
@endsection
