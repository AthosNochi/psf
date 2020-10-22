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

//Route::get('/', 'Controller@index');
//Route::get('/login', ['uses' => 'Controller@login']);
//Route::post('/login', ['as' => 'user.login', 'uses' => 'DashboardController@auth']);

Route::get('/',['as'=>'login.index','uses'=>'LoginController@index']);


Auth::routes();

Route::get('/home', 'LoginController@index')->name('home');
Route::get('/admin', 'UsersController@dashboard')->name('admin');
Route::get('/admin/login', 'UsersController@login')->name('admin.login');

Auth::routes();

Route :: group ([ 'middleware' => 'auth' ], function () {
    Route :: get ( '/ login / logout' , [ 'as' => 'login.logout' , 'usa' => 'LoginController@logout' ]);
    Route :: get ( '/ changePassword' , [ 'as' => 'login.changePassword' , 'uses' => 'LoginController@changePassword' ]);
    Route :: post ( '/ changePassword / save' , [ 'as' => 'login.saveNewPassword' , 'uses' => 'LoginController@savePassword' ]);
});

Route::group(['middleware'=>'admin'],function(){

});

Route::resource('/user', 'UsersController');

Route::resource('/psf', 'PsfsController');

Route::resource('/doctor', 'DoctorsController');

Route::resource('/availability', 'AvailabilitiesController');

Route::resource('/patient', 'PatientsController');

Route::resource('/enfermeiro', 'EnfermeirosController');

Route::resource('/agendamentos', 'AgendamentosController');

Route::resource('/secretaria', 'SecretariasController');

Route::resource('/anamnese', 'AnamnesesController');

Route::get('/homepage-Secretaria', 'Controller@homepageSecretaria')->name('secretaria.homepage');
Route::get('/homepage-enfermeiro', 'Controller@homepageEnfermeiro')->name('enfermeiro.homepage');
Route::get('/homepage-medico', 'Controller@homepageMedico')->name('doctor.homepage');
Route::get('/homepage-paciente', 'AgendamentosController@homepagePaciente')->name('patient.homepage');
// Route::get('/availability/ajaxcall', 'AvailabilitiesController@ajaxcall');
// Route::get('/availability/ajaxcall', ['as' => 'availability.ajaxcall', 'uses' => 'AvailabilitiesController@ajaxcall']);

Route::resource('/Secretaria', 'SecretariasController');

//Rotas de parte funcional
Route::group(['middleware'=>'user'],function(){


});

