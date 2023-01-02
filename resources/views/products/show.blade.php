@extends('layouts.app')

@section('title', 'App')

@section('content')
    <h1>
        Produto: {{ $product->name }} |
        <a class="btn btn-warning" href="{{ route('products.index') }}">Voltar</a>
    </h1>

    <ul>
        <li>Nome: {{ $product->name }}</li>
        <li>Valor: {{ $product->price }}</li>
        <li>Descrição: {{ $product->description }}</li>
    </ul>

    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger" value="Deletar o produto: {{ $product->name }}">
    </form>
@endsection
