<?php
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function(){
    
    #START STORES ROUTE
    Route::prefix('stores')->name('stores.')->group(function(){
        Route::get('/', 'StoreController@index')->name('index');
        Route::get('/create', 'StoreController@create')->name('create');
        Route::post('/store', 'StoreController@store')->name('store');
        Route::get('/{store}/edit', 'StoreController@edit')->name('edit');
        Route::post('/update/{store}', 'StoreController@update')->name('update');
        Route::get('/destroy/{store}', 'StoreController@destroy')->name('destroy');
    });
    #END STORES ROUTE

});