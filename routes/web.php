<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puede registrar rutas web para su aplicación. este
| RouteServiceProvider carga las rutas dentro de un grupo que
| Contiene el grupo de middleware "web". Crea algo bueno ahora!
|
*/

Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}', 'ProductController@show')->name('home');

Route::post('/cart', 'CartDetailController@store')->name('home');
Route::delete('/cart', 'CartDetailController@destroy')->name('home');
Route::post('/order', 'CartController@update')->name('home');




Route::middleware(['auth','admin'])->prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/products', 'ProductController@index'); //listado productos
    Route::get('/products/create', 'ProductController@create'); // registrar
    Route::post('/products', 'ProductController@store'); // crear
    Route::get('/products/{id}/edit', 'ProductController@edit'); // traer datos para actualizar
    Route::post('/products/{id}/edit', 'ProductController@update'); // actualizar
    Route::delete('/products/{id}', 'ProductController@destroy'); // eliminar
    Route::get('/products/{id}/images', 'ImageController@index'); // traer datos de la imagen
    Route::post('/products/{id}/images', 'ImageController@store'); // crear nueva imagen
    Route::delete('/products/{id}/images', 'ImageController@destroy'); // eliminar
    Route::get('/products/{id}/images/select/{image}', 'ImageController@select'); // Destacar una imagen

});







