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
    ['uses' => 'RecommendedGoodsController@recommendAction',
        'as' => 'Home'
    ]);


Route::get('/categories/{latin_url}/sort={sort}',
    [
        'uses' => 'CategoryController@categoryAction'
    ]);


/*
Route::get('/categories/{latin_url}/manufacturer/{manufacturer_name}',
    ['uses' => 'CategoryController@manufacturerAction'
    ]);
*/
Route::get('/categories/{latin_url}/manufacturer/{manufacturer_name}/sort={sort}',
    ['uses' => 'CategoryController@manufacturerAction'
    ]);


Route::get('/goods/{latin_url}',
    ['uses' => 'GoodsController@showAction'
    ]);

Route::get('/order/{id}',
    ['uses' => 'OrdersController@buyAction'
    ]);

Route::post('/order_final',
    ['uses' => 'OrdersController@finishAction'
    ]);