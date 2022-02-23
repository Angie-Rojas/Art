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
/*------------- MENÚ   -------------*/

Route::get('/', function () {
    return view('servicios');
})->name('servicios');

Route::get('servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('agenda', function () {
    return view('agenda');
})->name('agenda');

Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');


/*------------- MENÚ DESPLEGABLE  -------------*/

Route::get('beneficiarios', function () {
    return view('menu/beneficiarios');
})->name('beneficiarios');

Route::get('direcciones', function () {
    return view('menu/direcciones');
})->name('direcciones');

/*------------- SERVICIOS   -------------*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('cuidadores', function () {
    return view('servicios/cuidadores');
})->name('servicios');

Route::get('clinica-de-heridas', function () {
    return view('servicios/clinica-de-heridas');
})->name('servicios');

Route::get('muestras-de-laboratorio', function () {
    return view('servicios/muestras-de-laboratorio');
})->name('servicios');

Route::get('vacunacion', function () {
    return view('servicios/vacunacion');
})->name('servicios');

Route::get('tamizaje-y-deteccion-de-diabetes', function () {
    return view('servicios/tamizaje-y-deteccion-de-diabetes');
})->name('servicios');

/*------------- AGENDA         -------------*/

Route::get('/evento', [App\Http\Controllers\EventoController::class, 'index']);

/*Route::get('calendar', function () {
    return view('evento/calendar');
})->name('calendar');

/*Route::get('test', function () {
    return view('layouts/calendar');
})->name('test');
Auth::routes();*/
//Recepciona la información para pasar a la base de datos, la envia a storage
Route::post('/evento/agregar', [App\Http\Controllers\EventoController::class, 'store']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
