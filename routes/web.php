<?php

//Route::get('/', function () {
//    return view('welcome');
//});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function(){

    $product = \App\Models\Product::find(4);
    return $product->productsCategories;
    
    
});
