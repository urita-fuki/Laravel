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

use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', 'HelloController@index');
Route::post('hello','HelloController@post');


Route::get('person','PersonController@index');

Route::get('person/add', 'PersonController@add');
Route::post('person/add','PersonController@create');

Route::get('person/edit', 'PersonController@edit');
Route::post('person/update','PersonController@update');

Route::get('person/del', 'PersonController@delete');
Route::post('person/del','PersonController@remove');


Route::get('board','BoardController@index');

Route::get('board/add', 'BoardController@add');
Route::post('board/add','BoardController@create');


//実習問題
//2_1
Route::get('jissyu2', 'JissyuController@index');

//3_1
Route::get('jissyu3', 'Jissyu3_1Controller@index');
Route::post('jissyu3', 'Jissyu3_1Controller@post');

//3_2
Route::get('jissyu4', 'Jissyu3_2Controller@index');
Route::post('jissyu4', 'Jissyu3_2Controller@post');

//3_3
Route::get('jissyu5', 'Jissyu3_3Controller@index');

//4_1
Route::get('jissyu8', 'Jissyu4_1Controller@index');
Route::post('jissyu8', 'Jissyu4_1Controller@post');

//kouka1_1
Route::get('Kouka', 'Kouka1_1Controller@index');

//kouka1_2
Route::get('Kouka', 'Kouka1_2Controller@index');
Route::post('Kouka', 'Kouka1_2Controller@post');

//jissyu5_1
Route::get('jissyu10', 'Jissyu5_1Controller@index');
Route::get('jissyu10/show', 'Jissyu5_1Controller@show');

//jissyu5_2
Route::get('jissyu11', 'Jissyu5_2Controller@index');
Route::get('jissyu11/show', 'Jissyu5_2Controller@show');
Route::get('jissyu11/add', 'Jissyu5_2Controller@add');
Route::post('jissyu11/create', 'Jissyu5_2Controller@create');
Route::get('jissyu11/edit', 'Jissyu5_2Controller@edit');
Route::post('jissyu11/update', 'Jissyu5_2Controller@update');
Route::get('jissyu11/del', 'Jissyu5_2Controller@del');
Route::post('jissyu11/remove', 'Jissyu5_2Controller@remove');

//jissyu5_3
Route::get('jissyu12', 'Jissyu5_3Controller@index');
Route::get('jissyu12/show', 'Jissyu5_3Controller@show');
Route::get('jissyu12/add', 'Jissyu5_3Controller@add');
Route::post('jissyu12/create', 'Jissyu5_3Controller@create');
Route::get('jissyu12/edit', 'Jissyu5_3Controller@edit');
Route::post('jissyu12/update', 'Jissyu5_3Controller@update');
Route::get('jissyu12/del', 'Jissyu5_3Controller@del');
Route::post('jissyu12/remove', 'Jissyu5_3Controller@remove');
