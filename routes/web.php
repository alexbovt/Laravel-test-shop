<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    //return view('layouts.main');
    return view('layouts.main');
});
*/
Route::get('/',
    [
        'uses' => 'RecommendedGoodsController@recommendAction'
    ]);

Route::get('/registration',
    [
        'uses' => 'RegistrationController@registerAction'
    ]);


Route::get('/categories/{latin_url}/{manufacturer_name?}/{column?}/{type?}',
    [
        'uses' => 'CategoryController@categoryAction'
    ]);


Route::get('/goods/{latin_url}',
    ['uses' => 'GoodsController@showAction'
    ]);


Route::get('/order/{id}',
    ['uses' => 'OrdersController@buyAction'
    ]);
/*
Route::post('/order_final',
    ['uses' => 'OrdersController@finishAction'
    ]);
*/