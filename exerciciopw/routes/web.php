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
    return view('templates.template');
});

Route::get('/cliente', function () {
    return view('cliente');
});

Route::get('/produto', function () {
    return view('produto');
});

Route::get('/categoria', function () {
    return view('categoria');
});

Route::get('/pedido', function () {
    return view('pedido');
});

Route::get('/produto','App\Http\Controllers\ProdutoController@exibirProdutos');
