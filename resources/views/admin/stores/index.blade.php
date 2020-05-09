@extends('layouts.app')
@section('content')
<a href="{{ route('admin.stores.create') }}" class="btn btn-success">Criar Loja</a>
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
                    <div class="btn-group">
                        <a class="btn btn-xm btn-success" href="{{ route('admin.stores.edit', ['store' => $store->id]) }}">Editar</a>
                        <form action="{{ route('admin.stores.destroy', ['store' => $store->id]) }}" method="post">
                            @csrf @method('delete')
                            <button type="submit" class="btn btn-danger">Remover</button>
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            Não há lojas disponiveis
        @endforelse
    </tbody>
</table>
{{ $stores->links() }}    
@endsection