@extends('layout.app')

@section('conteudo')
<div style="color: red; background-color: yellow; font-size: 40px; text-align: center;">
    {{ $user->name }}
</div>
@endsection
