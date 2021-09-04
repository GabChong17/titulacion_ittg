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
use App\Http\Controllers\JefaturaController;





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

require __DIR__.'/auth.php';


//admin
Route::get('admin',[UsersController::class, 'index']); 
// Route::resource('admin', UsersController::class)
//     -middleware('AuthCheck')  
//     -name('admi.index');
Route::get('/TablaUsers',[UsersController::class, 'users']);
Route::get('/SubidaProtocolo',[AdminController::class, 'protocolo']);
Route::POST('/SubProto',[AdminController::class, 'subproto']);
Route::get('/SubidaJuramento',[AdminController::class, 'juramento']);
Route::POST('/SubJura',[AdminController::class, 'subjura']);
Route::get('/agregaUsers',[AdminController::class, 'agrega']);

//Route::get('/admin', [AdminController::class, 'index']) ->middleware('auth');


//egresado
Route::get('/inicio', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/liberacion',[AcademiaController::class, 'liberacion']);
Route::get('/tesis', [EgresadoController::class, 'tesis']);
Route::get('/proyecto', [EgresadoController::class, 'proyecto']);
Route::get('/prototipo', [EgresadoController::class, 'prototipo']);
Route::POST('/documento',[EgresadoController::class, 'store' ]);
Route::POST('/crearCita',[EgresadoController::class, 'cita' ]);

Route::get('/crearCita/confirm',function () {
    return view('egresado.confirmar');
});

Route::get('/crearCita/{opcion}',[EgresadoController::class,'crearCita']);
Route::POST('/protocolo',[DocumentosController::class, 'protocolo' ]);

//jefatura
Route::get('/jefatura', [AdminController::class, 'jefatura']) ->middleware('auth');
Route::get('/jefaturaAval',[JefaturaController::class, 'aval']);
Route::get('/asesoriaJefatura',[JefaturaController::class, 'asesoria']);
Route::get('/jefaturaIntegracion',[JefaturaController::class, 'integracion']);
Route::get('/jefaturaFormato',[JefaturaController::class, 'formato']);

//academia
Route::get('/academia', [AdminController::class, 'academia']) ->middleware('auth');
Route::get('/academiaAsesor',[AcademiaController::class, 'asesor']);
Route::get('/academiaRevisor',[AcademiaController::class, 'revisor']);


//division
Route::get('/division', [AdminController::class, 'division']) ->middleware('auth');
Route::get('/PaseLiberacion',[DivisionController::class, 'pase']);
Route::get('/divisionAval',[DivisionController::class, 'aval']);
Route::get('/actoRecepcional',[DivisionController::class, 'acto']);
Route::get('/divisionFormato',[DivisionController::class, 'formato']);
Route::get('/divicsionNoincoveniencia',[DivisionController::class, 'noincoveniencia']);
Route::get('/integracionJurado',[DivisionController::class, 'jurado']);
Route::POST('/recepcion',[DivisionController::class, 'recepcion' ]);


//servicios escolares
Route::get('/escolares', [AdminController::class, 'escolares']) ->middleware('auth');
Route::get('/ServiciosCita',[ServiciosEscolaresController::class, 'cita']);
Route::POST('/agendarCita',[ServiciosEscolaresController::class, 'citaAgenda' ]);
Route::get('/NoIncoveniencia',[ServiciosEscolaresController::class, 'noincoveniencia']);
Route::get('/NotificacionJurado',[ServiciosEscolaresController::class, 'notiJurado']);
Route::get('/ImprimirProtocolo',[ServiciosEscolaresController::class, 'imprimirProtocolo']);
Route::get('/ImprimirJuramento',[ServiciosEscolaresController::class, 'imprimirJuramento']);



