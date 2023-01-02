@extends('layouts.app')

@section('title', 'Meu App')

@section('content')

    <h1>Exibindo Produtos</h1>

    <a class="btn btn-primary mb-3" href="{{ route('products.create') }}">Novo Produto</a>

    <form class="form-inline mb-3" action="{{ route('products.search') }}" method="POST">
        @csrf
        <input type="text" class="form-control" name="filter" placeholder="Filtrar:" value="{{ $filters['filter'] ?? '' }}">
        <button type="submit" class="btn btn-info ml-2">Buscar</button>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th style="width: 100px">Imagem</th>
                <th>Nome</th>
                <th>Preço</th>
                <th style="width: 100px">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>
                        @if ($product->image)
                            <img style="max-width: 100px" src="{{ url("storage/{$product->image}") }}"
                                alt="{{ $product->name }}">
                        @endif
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}">Editar</a>
                        <a href="{{ route('products.show', $product->id) }}">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if (isset($filters))
        {!! $products->appends($filters)->links() !!}
    @else
        {!! $products->links() !!}
    @endif
@endsection
