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
    return view('inicio');
})->name('inicio');

Route::get('/contactame', function () {
    return view('contactame');
})->name('contactame');

Route::get('/mapa', function () {
    return view('mapa');
})->name('mapa');

Route::get('/productos', function () {
    return view('productos');
})->name('productos');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');
