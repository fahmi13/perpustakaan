<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('depan');
});

Route::get('blog','BlogController@home');
Route::get('blog/tentang','BlogController@tentang');
Route::get('blog/kontak','BlogController@kontak');
Route::get('blog/afiliasi','BlogController@afiliasi');

Route::get('home','HomeController@home');
Route::get('home/buku','HomeController@buku');
Route::get('home/penulis','HomeController@penulis');
Route::get('home/user','HomeController@user');

Route::get('/buku','BukuController@index')->middleware('auth');;
Route::get('/buku/add','BukuController@add');
Route::post('/buku/insert','BukuController@insert');
Route::get('/buku/edit/{id}','BukuController@edit');
Route::post('/buku/update','BukuController@update');
Route::get('/buku/delete/{id}','BukuController@delete');

Route::get('penulis','PenulisController@index');
Route::get('penulis/add','PenulisController@add');
Route::post('penulis/insert','PenulisController@insert');
Route::get('penulis/edit/{id}','PenulisController@edit');
Route::post('penulis/update','PenulisController@update');
Route::get('penulis/delete/{id}','PenulisController@delete');

Route::get('user','UserController@index');
Route::get('user/add','UserController@add');
Route::post('user/insert','UserController@insert');
Route::get('user/edit/{id}','UserController@edit');
Route::post('user/update','UserController@update');
Route::get('user/delete/{id}','UserController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth');;
