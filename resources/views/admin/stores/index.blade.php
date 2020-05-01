@extends('layouts.app')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Loja</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($stores as $store)
            <tr>
                <td>{{ $store->id }}</td>
                <td>{{ $store->name }}</td>
                <td>
                    <a class="btn btn-xm btn-success" href="{{ route('admin.stores.edit', ['store' => $store->id]) }}">Editar</a>
                    <a class="btn btn-xm btn-danger" href="{{ route('admin.stores.destroy', ['store' => $store->id]) }}">Remover</a>
                </td>
            </tr>
        @empty
            Não há lojas disponiveis
        @endforelse
    </tbody>
</table>
{{ $stores->links() }}    
@endsection