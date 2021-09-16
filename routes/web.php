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
    return view('dashboard');
})->name('dashboard');

Route::get('cuidadores', function () {
    return view('servicios/cuidadores');
});

Route::get('clinica-de-heridas', function () {
    return view('servicios/clinica-de-heridas');
});

Route::get('muestras-de-laboratorio', function () {
    return view('servicios/muestras-de-laboratorio');
});

Route::get('vacunacion', function () {
    return view('servicios/vacunacion');
});

Route::get('tamizaje-y-deteccion-de-diabetes', function () {
    return view('servicios/tamizaje-y-deteccion-de-diabetes');
});