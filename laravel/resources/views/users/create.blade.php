@extends('layout.app')

@section('conteudo')
<div style="color: red; background-color: yellow; font-size: 40px; text-align: center;">
    <form action="">
        <input type="text" placeholder="nome">
        <input type="text" placeholder="email">
        <input type="text" placeholder="senha">
        <button type="submit">Enviar</button>
    </form>
</div>
@endsection
