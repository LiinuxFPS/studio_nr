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

Route::get('/app/cadastro', 'cadastroController@cadastro')->name('app.cadastro');
Route::post('/app/cadastro', 'cadastroController@salvar')->name('app.cadastro');

Route::get('/', function () { return view('home');
})->name('home');

Route::fallback(function(){
    echo 'Rota não existe. <a href="'.route('home').'">Clique aqui</a>';
});