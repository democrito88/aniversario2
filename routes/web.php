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

Route::post('/loginComum', 'Auth\LoginController@loginComum')->name('loginComum');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'LinhaDoTempoController@montaLinhaDoTempo')->name('home');

Route::resource('cartao/cartao', 'CartaoController');
Route::get('/linhadotempo', 'LinhaDoTempoController@montaLinhaDoTempo');