@extends('layout.app')

@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col">
            @include('components.table', ["users" => $users])
        </div>
    </div>

</div>
@endsection
