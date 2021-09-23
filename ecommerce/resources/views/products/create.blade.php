@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">FORMULARIO DE CRIACAO</div>
    </div>

    <div class="row">
        <div class="col">
            <form action="/products" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Título</label>
                    <input type="text" class="form-control @error('title') border border-danger @enderror" name="title">
                    @error('title')
                    <div class="form-text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Descrição</label>
                    <input type="text" class="form-control @error('description') border border-danger @enderror" name="description">
                    @error('description')
                    <div class="form-text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Imagem</label>
                    <input type="file" class="form-control" name="img">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Preço</label>
                    <input type="text" class="form-control" name="price">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>


        </div>
    </div>
</div>
@endsection
