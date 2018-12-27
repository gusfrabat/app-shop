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

Route::get('/prueba', function () {
    return 'welcome prueba';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
