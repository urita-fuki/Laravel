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

Route::get('hello', 'HelloController@index')
    ->middleware('auth');
Route::post('hello','HelloController@post');


Route::get('hello/auth', 'HelloController@getAuth');
Route::post('hello/auth','HelloController@postAuth');

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


Route::resource('rest', 'RestappController');

Route::get('hello/rest', 'HelloController@rest');

Route::get('hello/session', 'HelloController@ses_get');
Route::post('hello/session','HelloController@ses_put');

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

//jissyu6_1
Route::get('jissyu13', 'Jissyu6_1Controller@index');
Route::post('jissyu13/find', 'Jissyu6_1Controller@find');

//jissyu6_3
Route::get('jissyu14', 'Jissyu6_3Controller@index');
Route::post('jissyu14/find', 'Jissyu6_3Controller@find');
Route::get('jissyu14/show', 'Jissyu6_3Controller@show');
Route::get('jissyu14/add', 'Jissyu6_3Controller@add');
Route::post('jissyu14/create', 'Jissyu6_3Controller@create');
Route::get('jissyu14/edit', 'Jissyu6_3Controller@edit');
Route::post('jissyu14/update', 'Jissyu6_3Controller@update');
Route::get('jissyu14/del', 'Jissyu6_3Controller@del');
Route::post('jissyu14/remove', 'Jissyu6_3Controller@remove');

//jissyu7_1
//Route::resource('___(1)___', '___(2)___');
//Route::post('___(3)___', '___(4)___');	
//Resourcefulにはfind()メソッドはないので追加
//Route::get('___(5)___', '___(6)___');

//kouka2_1
Route::get('kouka2_1', 'Kouka2_1Controller@index');
Route::post('kouka2_1/find', 'Kouka2_1Controller@find');

//kouka2_2
Route::get('kouka2_2', 'Kouka2_2Controller@index');
Route::post('kouka2_2/find', 'Kouka2_2Controller@find');
Route::get('kouka2_2/show', 'Kouka2_2Controller@show');
Route::get('kouka2_2/add', 'Kouka2_2Controller@add');
Route::post('kouka2_2/create', 'Kouka2_2Controller@create');
Route::get('kouka2_2/edit', 'Kouka2_2Controller@edit');
Route::post('kouka2_2/update', 'Kouka2_2Controller@update');
Route::get('kouka2_2/del', 'Kouka2_2Controller@del');
Route::post('kouka2_2/remove', 'Kouka2_2Controller@remove');

//kouka3_1
 


Route::get('hello/auth', 'HelloController@getAuth');
Route::post('hello/auth','HelloController@postAuth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
