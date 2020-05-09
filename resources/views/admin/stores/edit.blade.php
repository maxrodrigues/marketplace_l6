@extends('layouts.app')
@section('content')
<h1>Editar Loja</h1>
<form action="{{ route('admin.stores.update', ['store' => $store->id]) }}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="name">Loja</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $store->name }}">
    </div>
    <div class="form-group">
        <label for="description">Descrição</label>
        <input type="text" name="description" id="description" class="form-control" value="{{ $store->description }}">
    </div>
    <div class="form-group">
        <label for="phone">Telefone</label>
        <input type="text" name="phone" id="phone" class="form-control" value="{{ $store->phone }}">
    </div>
    <div class="form-group">
        <label for="mobile_phone">Celular / Whatsapp</label>
        <input type="text" name="mobile_phone" id="mobile_phone" class="form-control" value="{{ $store->mobile_phone }}">
    </div>
    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" class="form-control" value="{{ $store->slug }}">
    </div>
    
    <div class="form-group">
        <button class="btn btn-lg btn-success" type="submit">Editar</button>
    </div>
</form>    
@endsection