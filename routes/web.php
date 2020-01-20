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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro/profissionais', 'ProviderController@show')->name('provider.show');
Route::get('cadastro/profissionais/editar/{provider}', 'ProviderController@showEdit')->name('provider.showEdit');
Route::post('/cadastro/profissionais/new-provider', 'ProviderController@store')->name('provider.store');\
Route::put('/cadastro/profissionais/edit-provider/{provider}', 'ProviderController@edit')->name('provider.edit');

Route::get('cadastro/servicos', 'ServiceController@index')->name('service.index');
Route::get('cadastro/servicos/editar/{service}', 'ServiceController@edit')->name('service.edit');
Route::post('cadastro/servicos/new-service', 'ServiceController@store')->name('service.store');
Route::put('cadastro/servicos/edit-service/{service}', 'ServiceController@update')->name('service.update');
Route::delete('cadastro/servicos/destroy/{service}', 'ServiceController@destroy')->name('service.destroy');


Route::get('cadastro/usuarios', 'UserController@index')->name('user.index');
Route::get('cadastro/usuarios/editar/{user}', 'UserController@edit')->name('user.edit');
Route::post('cadastro/usuarios/new-user', 'UserController@store')->name('user.store');



