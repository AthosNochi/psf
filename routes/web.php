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

Route::get('/', 'Controller@homepage');
Route::get('/cadastro', 'Controller@cadastrar');

Route::get('/login', ['uses' => 'Controller@fazerLogin']);
Route::post('/login', ['as' => 'user.login', 'uses' => 'DashboardController@auth']);
Route::post('/dashboard', ['as' => 'user.dashboard', 'uses' => 'DashboardController@index']);

Route::resource('/user', 'UsersController');

Route::resource('/psf', 'PsfsController');

Route::resource('/doctor', 'DoctorsController');

Route::resource('/patient', 'PatientsController');
Route::resource('/agendamento', 'AgendamentosController');

//Route::resource('/agendamentos/agenda', 'AgendaController');--teste


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
