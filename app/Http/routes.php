<?php
Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'ProductsController@index');
    Route::get('/products/search', 'ProductsController@search');
    Route::resource('products', 'ProductsController', ['only' => ['show', 'create']]);
    Route::resource('products.reviews', 'ReviewsController', ['only' => ['create', 'store']]);
    Route::auth();
    Route::resource('users', 'UsersController', ['only' => 'show']);
});
