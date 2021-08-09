<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EgresadoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AcademiaController;
use App\Http\Controllers\DocumentosController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\ServiciosEscolaresController;




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
    return view('auth/login');
});

Route::get('/inicio', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

Route::get('/entrada', function () {
    return view('egresado.entrada');
});
//admin
Route::resource('admin', UsersController::class);
//Route::resource('indexAdmin' ,[AdminController::class, 'administrador']);
Route::get('/SubidaProtocolo',[AdminController::class, 'protocolo']);
Route::POST('/SubProto',[AdminController::class, 'subproto']);
Route::get('/SubidaJuramento',[AdminController::class, 'juramento']);
Route::POST('/SubJura',[AdminController::class, 'subjura']);

//Route::get('/admin', [AdminController::class, 'index']) ->middleware('auth');

Route::get('/division', [AdminController::class, 'division']) ->middleware('auth');
Route::get('/jefatura', [AdminController::class, 'jefatura']) ->middleware('auth');
Route::get('/academia', [AdminController::class, 'academia']) ->middleware('auth');
Route::get('/escolares', [AdminController::class, 'escolares']) ->middleware('auth');

//egresado
Route::get('/tesis', [EgresadoController::class, 'tesis']);
Route::get('/proyecto', [EgresadoController::class, 'proyecto']);
Route::get('/prototipo', [EgresadoController::class, 'prototipo']);
Route::POST('/documento',[EgresadoController::class, 'store' ]);
Route::POST('/crearCita',[EgresadoController::class, 'cita' ]);

Route::get('/crearCita/confirm',function () {
    return view('egresado.confirmar');
});

Route::get('/crearCita/{opcion}',[EgresadoController::class,'crearCita']);
Route::get('/liberacion',[AcademiaController::class, 'liberacion']);
Route::POST('/protocolo',[DocumentosController::class, 'protocolo' ]);

//division
Route::get('/PaseLiberacion',[DivisionController::class, 'pase']);


//servicios escolares
Route::get('/ServiciosCita',[ServiciosEscolaresController::class, 'cita']);
Route::POST('/agendarCita',[ServiciosEscolaresController::class, 'citaAgenda' ]);
Route::get('/NoIncoveniencia',[ServiciosEscolaresController::class, 'noincoveniencia']);
Route::get('/NotificacionJurado',[ServiciosEscolaresController::class, 'notiJurado']);
Route::get('/ImprimirProtocolo',[ServiciosEscolaresController::class, 'imprimirProtocolo']);
Route::get('/ImprimirJuramento',[ServiciosEscolaresController::class, 'imprimirJuramento']);



