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
use App\Http\Controllers\InicioControler;
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
Route::get('/' ,[InicioControler::class, 'inicio'])->middleware('home');
// Route::get('/' ,[InicioControler::class, 'inicio']);

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
Route::POST('/agregaUsers2',[AdminController::class, 'agrega2']);

//Route::get('/admin', [AdminController::class, 'index']) ->middleware('auth');

//egresado
Route::get('/inicio', function () {
    return view('dashboard');
})->middleware('egresado');
Route::get('/liberacion',[AcademiaController::class, 'liberacion'])->middleware('egresado');
Route::get('/tesis', [EgresadoController::class, 'tesis'])->middleware('egresado');
Route::get('/proyecto', [EgresadoController::class, 'proyecto'])->middleware('egresado');
Route::get('/prototipo', [EgresadoController::class, 'prototipo'])->middleware('egresado');
Route::POST('/tramite-tesis',[EgresadoController::class, 'storeTesis' ])->middleware('egresado');
Route::POST('/tramite-proyecto',[EgresadoController::class, 'storeProyecto' ])->middleware('egresado');
Route::POST('/tramite-prototipo',[EgresadoController::class, 'storePrototipo' ])->middleware('egresado');

Route::get('/crearCita/confirm',function () {
    return view('egresado.confirmar');
});

Route::get('/crearCita/{opcion}',[EgresadoController::class,'crearCita'])->middleware('egresado');
Route::POST('/protocolo',[DocumentosController::class, 'protocolo' ]);

//jefatura
Route::get('/jefatura', [AdminController::class, 'jefatura']) ->middleware('jefatura');
Route::get('/jefaturaAval',[JefaturaController::class, 'aval'])->middleware('jefatura');
Route::get('/asesoriaJefatura',[JefaturaController::class, 'asesoria'])->middleware('jefatura');
Route::get('/jefaturaIntegracion',[JefaturaController::class, 'integracion'])->middleware('jefatura');
Route::get('/jefaturaFormato',[JefaturaController::class, 'formato'])->middleware('jefatura');

//academia
Route::get('/academia', [AdminController::class, 'academia'])->middleware('academia');
Route::get('/academiaAsesor',[AcademiaController::class, 'asesor'])->middleware('academia');
Route::get('/asignarAsesor/{Egresado}',[AcademiaController::class, 'asignar_asesor'])->middleware('academia');


Route::POST('/Asesor/{egresado_id}',[AcademiaController::class, 'guardarAsesor'])->middleware('academia');

Route::get('/asesoriaLiberada/{Egresado}',[AcademiaController::class, 'asesoria_liberada'])->middleware('academia');
Route::get('/liberacionAsesoria',[AcademiaController::class, 'liberacionAsesoria'])->middleware('academia');
Route::get('/academiaJurado',[AcademiaController::class, 'academiaJurado'])->middleware('academia');
Route::get('/asignarJurado/{Egresado}',[AcademiaController::class, 'asignar_jurado'])->middleware('academia');


Route::POST('/firmasEscaneadas',[AcademiaController::class, 'firmas' ])->middleware('academia');


//division
Route::get('/division', [AdminController::class, 'division']) ->middleware('division');
Route::get('/PaseLiberacion',[DivisionController::class, 'pase']) ->middleware('division');
Route::get('/divisionAval',[DivisionController::class, 'aval']) ->middleware('division');
Route::get('/divisionAsesores/{Egresado}',[DivisionController::class, 'asesores']) ->middleware('division');
Route::get('/paseLiberacion/{Egresado}',[DivisionController::class, 'pase_liberacion']) ->middleware('division');
Route::get('/agendarActo/{Egresado}',[DivisionController::class, 'recepcion_acto']) ->middleware('division');
Route::get('/actoRecepcional',[DivisionController::class, 'acto']) ->middleware('division');
// Route::get('/divisionFormato',[DivisionController::class, 'formato']);
Route::get('/divicsionNoincoveniencia',[DivisionController::class, 'noincoveniencia']) ->middleware('division');
Route::get('/integracionJurado',[DivisionController::class, 'jurado']) ->middleware('division');
Route::get('/integracionJurado2/{Egresado}',[DivisionController::class, 'jurado2']) ->middleware('division');

Route::POST('/recepcion',[DivisionController::class, 'recepcion' ]) ->middleware('division');
Route::POST('/actoRecepcion',[DivisionController::class, 'actoRecepcion' ]) ->middleware('division');


//servicios escolares
Route::get('/escolares', [AdminController::class, 'escolares']) ->middleware('escolares');
Route::get('/NoIncoveniencia',[ServiciosEscolaresController::class, 'noincoveniencia'])->middleware('escolares');
Route::get('/DocumentosRevisados/{Egresado}',[ServiciosEscolaresController::class, 'documento'])->middleware('escolares');//documento
Route::get('/LiberarNoInconveniencia/{Egresado}',[ServiciosEscolaresController::class, 'liberar'])->middleware('escolares');//liberar
Route::get('/Concluir/{Egresado}',[ServiciosEscolaresController::class, 'concluir']);//concluir

Route::get('/LiberarNoIncoveniencia',[ServiciosEscolaresController::class, 'liberarNoincoveniencia'])->middleware('escolares');
Route::get('/escolaresProtocolo',[ServiciosEscolaresController::class, 'escolaresProtocolo'])->middleware('escolares');





Route::POST('/agendarCita',[ServiciosEscolaresController::class, 'citaAgenda' ])->middleware('escolares');


