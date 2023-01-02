@extends('layouts.app')

@section('title', "Editar Produto {$product->name}")

@section('content')
    <h1>
        Produto: {{ $product->name }} |
        <a class="btn btn-warning" href="{{ route('products.index') }}">Voltar</a>
    </h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('products._partials.form');
    </form>
@endsection
