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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('home');
})->name('home');


Route::group(['prefix' => '/fornecedores', 'middleware' => "auth"], function () {
      Route::get('/fornecedores}', 'FornecedorestController@index');
 //   Route::put('/store/{id}', 'GuiaMedicaController@store');
 //   Route::get('/download/{ficheiro}', "GuiaMedicaController@download");
//});


//Route::group(['prefix' => '/fornecedores', 'middleware' => "auth"], function () {
 //   Route::get('/fornecedores/index}', 'FornecedoresController@index');
 //   Route::put('/store/{id}', 'GuiaMedicaController@store');
 //   Route::get('/download/{ficheiro}', "GuiaMedicaController@download");
//});
