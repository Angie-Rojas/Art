<?php

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\DireccionesController;
use App\Http\Controllers\UsuarioController;
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

/**
 * Puedes mirar este tuto ▶ https://www.youtube.com/watch?v=PDbOsGlCf7o&list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF&index=3 👀
 * Los "name" se dividen en servicios, agenda, contacto y otro... lo que hacen es catalogar el apartado para mostrar el resaltado en la parte inferior
*/

/*-------------   MENÚ   -------------*/

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


/*-------------   MENÚ DESPLEGABLE   -------------*/


Route::get('direcciones', [DireccionesController::class, 'index'])->name('otro');

Route::get('pacientes', [PacienteController::class, 'index'])->name('servicios');


/*-------------   SERVICIOS   -------------*/

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


/*-------------   AGENDA   -------------*/

/*Route::get('agendar-servicio', function () {
    return view('agendar-servicio');
})->name('agenda');*/

Route::get('agendar-servicio', [PacienteController::class, 'index2'])->name('servicios');

Route::get('/evento', [App\Http\Controllers\EventoController::class, 'index'], function() {
    return view('evento');
})->name('agenda');

//Recepciona la información para pasar a la base de datos, la envia a storage
Route::get('/evento/mostrar', [App\Http\Controllers\EventoController::class, 'show']);
//Lee la info de la Database
Route::post('/evento/agregar', [App\Http\Controllers\EventoController::class, 'store']);
//Accede a editar
Route::post('/evento/editar/{id}', [App\Http\Controllers\EventoController::class, 'edit']);
//Borra la fecha del calendario
Route::post('/evento/borrar/{id}', [App\Http\Controllers\EventoController::class, 'destroy']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*-------------   PACIENTES   -------------*/

Route::get('pacientes/nuevo', function () {
    return view('menu/usuario-nuevo');
})->name('otro');

/* Formulario */
Route::post('pacientes/nuevo', [PacienteController::class,'store'])->name('usuario.store');


/*-------------   DIRECCIONES   -------------*/

Route::get('direcciones/nueva', function () {
    return view('menu/direccion-nueva');
})->name('otro');

/* Formulario */
Route::post('direcciones/nueva', [DireccionesController::class,'store'])->name('direccion.store');
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
