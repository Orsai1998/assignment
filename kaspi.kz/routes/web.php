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
use App\questions;
Route::get('/', function () {
    return view('main');
});
Route::get('/show/index', 'ShowProd@index');
Route::get('/show/sort', ['uses' => 'ShowProd@sort', 'as' => 'sort']);
Route::get('index', ['uses' => 'ShowProd@showProducts', 'as' => 'name']);
Route::get('ajax/paganation', 'ShowProd@showPagination');
Route::get('/{id_prod}','ShowProd@show');
Route::patch('index',[
    'as' => 'index']);

Auth::routes();
Route::match(['get', 'post'], '/adminpanel/admin', 'AdminController@login');
Route::get('adminpanel/dashboard', 'AdminController@dashboard');
Route::get('/adminpanel/logout', 'AdminController@logout');
Route::get('/adminpanel/create', 'AdminController@create');
Route::post('/adminpanel/store', 'AdminController@store');
Route::get('/adminpanel/storepicture', 'AdminController@storePicture');
Route::post('/adminpanel/addpicture', 'AdminController@addpicture');
Route::post('/feedback', 'insertData@store');
Route::post('/{id_prod}', 'ShowProd@showing');
Route::get('/home', 'HomeController@index')->name('home');
