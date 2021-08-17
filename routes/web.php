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
    return view('home');
});


Route::get('cliente', 'App\Http\Controllers\ClienteController@index')->name('cliente.index');
Route::get('cliente/crear', 'App\Http\Controllers\ClienteController@create')->name('cliente.create');
Route::post('cliente', 'App\Http\Controllers\ClienteController@store')->name('cliente.store');
Route::get('cliente/{cliente}', 'App\Http\Controllers\ClienteController@show')->name('cliente.show');
Route::get('cliente/{cliente}/editar', 'App\Http\Controllers\ClienteController@edit')->name('cliente.edit');
Route::patch('cliente/{cliente}', 'App\Http\Controllers\ClienteController@update')->name('cliente.update');
Route::delete('cliente/{cliente}', 'App\Http\Controllers\ClienteController@destroy')->name('cliente.destroy');


Route::get('libro', 'App\Http\Controllers\LibroController@index')->name('libro.index');
Route::get('libro/crear', 'App\Http\Controllers\LibroController@create')->name('libro.create');
Route::post('libro', 'App\Http\Controllers\LibroController@store')->name('libro.store');
Route::get('libro/{libro}', 'App\Http\Controllers\LibroController@show')->name('libro.show');
Route::get('libro/{libro}/editar', 'App\Http\Controllers\LibroController@edit')->name('libro.edit');
Route::patch('libro/{libro}', 'App\Http\Controllers\LibroController@update')->name('libro.update');
Route::delete('libro/{libro}', 'App\Http\Controllers\LibroController@destroy')->name('libro.destroy');


Route::get('pedido', 'App\Http\Controllers\PedidoController@index')->name('pedido.index');
Route::get('pedido/crear', 'App\Http\Controllers\PedidoController@create')->name('pedido.create');
Route::post('pedido', 'App\Http\Controllers\PedidoController@store')->name('pedido.store');
Route::get('pedido/{pedido}', 'App\Http\Controllers\PedidoController@show')->name('pedido.show');
Route::get('pedido/{pedido}/editar', 'App\Http\Controllers\PedidoController@edit')->name('pedido.edit');
Route::patch('pedido/{pedido}', 'App\Http\Controllers\PedidoController@update')->name('pedido.update');
Route::delete('pedido/{pedido}', 'App\Http\Controllers\PedidoController@destroy')->name('pedido.destroy');



Route::get('home', function () {
    return view('home');
})->name('home');
