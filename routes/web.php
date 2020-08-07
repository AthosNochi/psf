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
Route::get('/', ['uses' => 'Controller@homepage']);
Route::get('/cadastro', ['uses' => 'Controller@cadastrar']);

/*
------------------------------
Rotas de parte administrativa
------------------------------
*/
Route::group(['middleware'=>'admin'],function(){
Route::get('/admin',['as'=>'user.index','uses'=>'Controller@index']);
  
});

/**
----------------------------------------------------------------------------
routes to user auth
----------------------------------------------------------------------------
**/

Route::get('/login', ['uses' => 'LoginController@fazerLogin']);
Route::post('/login', ['as' => 'user.login', 'uses' => 'DashboardController@auth']);
Route::get('/dashboard', ['as' => 'user.dashboard', 'uses' => 'DashboardController@index']);



Route::resource('user', 'UsersController');
Route::resource('psf', 'PsfsController');
Route::resource('doctor', 'DoctorsController');
Route::resource('patient', 'PatientsController');
Route::resource('/agendamento', 'AgendamentosController');
