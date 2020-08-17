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

Auth::routes();

Route::get('/', 'IndexController@index');
Route::get('/entrar', 'DashboardController@auth');
Route::get('/cadastrar', 'IndexController@register');

Route::get('/home', 'HomeController@principal');


Route::resource('/user', 'UsersController');

Route::resource('/psf', 'PsfsController');

Route::resource('/doctor', 'DoctorsController');

Route::resource('/patient', 'PatientsController');

Route::resource('/agendamento', 'AgendamentosController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


