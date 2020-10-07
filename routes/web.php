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

Route::get('/', 'Controller@index');
Route::get('/login', ['uses' => 'Controller@login']);
Route::post('/login', ['as' => 'user.login', 'uses' => 'DashboardController@auth']);
Route::get('/dashboard', ['as' => 'user.dashboard', 'uses' => 'DashboardController@index']);

Route::resource('/user', 'UsersController');

Route::resource('/psf', 'PsfsController');

Route::resource('/doctor', 'DoctorsController');

Route::resource('/patient', 'PatientsController');

Route::resource('/enfermeiro', 'EnfermeirosController');

Route::resource('/agendamentos', 'AgendamentosController');

Route::resource('/secretaria', 'SecretariasController');

Route::resource('/anamnese', 'AnamnesesController');

Route::get('/homepage-Secretaria', 'Controller@homepageSecretaria');
Route::get('/homepage-enfermeiro', 'Controller@homepageEnfermeiro');
Route::get('/homepage-medico', 'Controller@homepageMedico');
Route::get('/homepage-paciente', 'AgendamentosController@homepagePaciente');

Route::resource('/Secretaria', 'SecretariasController');




