@extends('layouts.app')

@section('title', 'Cadastrar Novo Produto')

@section('content')
    <h1>
        Cadastrar Novo Produto
        <a class="btn btn-warning" href="{{ route('products.index') }}">Voltar</a>
    </h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @include('products._partials.form');
    </form>
@endsection
