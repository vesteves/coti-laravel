@extends('layout.app')

@section('conteudo')

@if($show_div)
<!-- terminar tudo que será respondida pela condicionante -->
<div>Esta é uma div condicional</div>
@endif

<div class="corazul">{{ $string_var }}</div>

@foreach($alunos as $aluno)
<div>aluno {{ $aluno["nome"] }}</div>
@endforeach

@foreach($users as $user)
<div>usuário {{ $user->name }}</div>
@endforeach

<div class="container">
    <div class="row">
        <div class="col" style="background-color: green; height: 300px;">Banner</div>
    </div>

    <div class="row">
        <div class="col-6" style="background-color: blue;">
            Conteúdo
        </div>
        <div class="col-4" style="background-color: red;">
            Imagem
        </div>
        <div class="col" style="background-color: yellow;">
            @include('components.table')
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col" style="background-color: blue; height: 100x;">Container Fluid</div>
    </div>
</div>

@endsection
