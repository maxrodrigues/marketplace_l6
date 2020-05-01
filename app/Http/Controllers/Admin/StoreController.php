<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){

        $stores = \App\Models\Store::paginate(10);

        return view('admin.stores.index', compact('stores'));
    }   

    public function create(){
        #GET ID AND NAME ALL USERS
        $users = \App\User::all(['id', 'name']);

        return view('admin.stores.create', compact('users'));

    }

    public function store(Request $request){

        $data = $request->all();
        $user = \App\User::find($data['user']);
        $store = $user->userStore()->create($data);

        flash('A nova loja foi incluida com sucesso')->success();
        return redirect(route('admin.stores.index'));
    }

    public function edit($store){

        $store = \App\Models\Store::find($store);
        return view('admin.stores.edit', compact('store'));
    }

    public function update(Request $request, $store){

        $data = $request->all();
        $store = \App\Models\Store::find($store);
        $store->update($data);

        flash('Loja atualizada com sucesso')->success();
        return redirect(route('admin.stores.index'));
        #$store;
    }

    public function destroy($store){
        
        $store = \App\Models\Store::find($store);
        $store->delete();

        return redirect(route('admin.stores.index'));
    }
}
