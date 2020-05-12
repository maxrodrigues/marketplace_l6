@extends('layouts.app')
@section('content')
<a href="{{ route('admin.products.create') }}" class="btn btn-success" style="margin:10px;">Criar Produto</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Loja</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ number_format($product->price, '2', ',', '.') }}</td>
                <td>{{ $product->productsStore->name }}</td>
                <td>
                    <div class="btn-group">
                        <a class="btn btn-xm btn-success" href="{{ route('admin.products.edit', ['product' => $product->id]) }}">Editar</a>
                        <form action="{{ route('admin.products.destroy', ['product' => $product->id]) }}" method="post">
                            @csrf @method('delete')
                            <button class="btn btn-danger">Remover</button>
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            Não há lojas disponiveis
        @endforelse
    </tbody>
</table>
{{ $products->links() }}    
@endsection
