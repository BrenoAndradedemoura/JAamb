<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('sistema.index');
});

Route::get('/favoritos', function () {
    return view('sistema.favoritos');
});

Route::get('/formulário', function () {
    return view('sistema.formulário');
});

Auth::routes();

Route::get('/cadastro', function () {
    return view('sistema.cadastro');
});

Route::get ('/cadastroanimal', [App\Http\Controllers\ControladorAnimal :: class, 'index' ]);
Route :: post ('/registroAnimal', [ App\Http\Controllers\ControladorAnimal :: class , 'store']) ;
Route :: delete ('/{ id }', [ App\Http\Controllers\ControladorAnimal :: class , 'destroy']) ;
