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

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('Início');

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::prefix('admin')->group(function () {
  //  Route::get('/pages', function () {
  //      return view('pages');
  //  });

    Route::get('/cliques', function () {
        return view('cliques', [
            'cliques' => 'CiqueController@index'

         //   Route::get('/list', "UsuarioController@index");

        ]);
    });

 //   Route::get('/cliques', function () {
 //       return view('cliques', [
 //           'cliques' => \App\Models\Clique::all()
 //       ]);
 //   });

    Route::get('/settings', function () {
        // Matches The "/admin/pages" URL
    });
});
