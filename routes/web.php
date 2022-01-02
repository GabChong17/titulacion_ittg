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
use App\Mail\NotificacionEgresado;
use App\Mail\NotificacionDivision;
use App\Mail\NotificacionAcademia;
use App\Mail\NotificacionEscolares;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;





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
Route::get('/TablaUsers',[UsersController::class, 'users'])->name('TablaUsers');
Route::get('/SubidaProtocolo',[AdminController::class, 'protocolo']);
Route::POST('/SubProto',[AdminController::class, 'subproto']);
Route::get('/SubidaJuramento',[AdminController::class, 'juramento']);
Route::POST('/SubJura',[AdminController::class, 'subjura']);
Route::get('/agregaUsers',[AdminController::class, 'agrega']);
Route::get('/editarEmpleado/{empelado}',[AdminController::class, 'edit']);
Route::put('/actualizarEmpleado/{empelado}',[AdminController::class, 'update'])->name('actualizarEmpleado');
Route::delete('/eliminarEmpleado/{empelado}',[AdminController::class, 'destroy'])->name('eliminarEmpleado');
Route::POST('/agregaUsers2',[AdminController::class, 'agrega2']);

Route::get('/TablaPlanes',[UsersController::class, 'planes'])->name('TablaPlanes');
Route::get('/agregaPlan',[AdminController::class, 'agregaPlan']);
Route::get('/editarPlan/{plan}',[AdminController::class, 'editPlan']);
Route::put('/actualizarPlan/{plan}',[AdminController::class, 'update2'])->name('actualizarPlan');
Route::POST('/agregaPlan',[AdminController::class, 'agregaPlan2']);
Route::delete('/eliminarPlan/{plan}',[AdminController::class, 'destroy'])->name('eliminarPlan');

Route::get('/opcionesPlan',[UsersController::class, 'opciones'])->name('TablaOpciones');
Route::delete('/eliminarOpcion/{opcion}',[AdminController::class, 'destroy'])->name('eliminarOpcion');
Route::get('/editarOpcion/{opcion}',[AdminController::class, 'editarOpcion']);
Route::put('/editarOpcion/{opcion}',[AdminController::class, 'update3'])->name('editarOpcion');
Route::get('/agregaOpcion',[AdminController::class, 'agregaOpcion']);
Route::POST('/agregaOpcion',[AdminController::class, 'agregaOpcion2']);

Route::get('/TablaRequisitos',[UsersController::class, 'requisitos'])->name('TablaRequisitos');
Route::get('/agregaRequisitos',[AdminController::class, 'agregaRequisitos']);
Route::POST('/agregaRequisitos2',[AdminController::class, 'agregaRequisitos2']);
Route::delete('/eliminarRequisito/{requisito}',[AdminController::class, 'destroy'])->name('eliminarRequisito');


//Route::get('/admin', [AdminController::class, 'index']) ->middleware('auth');

//egresado

Route::get('/inicio', [EgresadoController::class, 'inicio'])->middleware('egresado');
Route::get('/inicioProceso', [EgresadoController::class, 'inicioProceso'])->middleware('egresado');
Route::get('/liberacion',[AcademiaController::class, 'liberacion'])->middleware('egresado');

Route::get('/tramite/{id}', [EgresadoController::class, 'tramite'])->middleware('egresado');

Route::get('/confirmarEgresado/{Egresado}',[EgresadoController::class, 'confirmar' ])->middleware('egresado');

Route::get('/crearCita/confirm',function () {
    return view('egresado.confirmar');
});
Route::get('/crearCita/{opcion}',[EgresadoController::class,'crearCita'])->middleware('egresado');
Route::get('/imprimir_solicitud_autorizacion/{Egresado}',[EgresadoController::class, 'imprimir_solicitud_autorizacion']) ->middleware('egresado');//PDF

// Route::get('/cita',[EgresadoController::class, 'citaEgresado'])->middleware('egresado');
// Route::get('/tema',[EgresadoController::class, 'tema'])->middleware('egrÑesado');
// Route::get('/documentos',[EgresadoController::class, 'documentos'])->middleware('egresado');



Route::POST('/titulo',[EgresadoController::class, 'titulo' ])->middleware('egresado');
Route::POST('/crearCita',[EgresadoController::class, 'agendada' ])->middleware('egresado');
Route::POST('/protocolo',[DocumentosController::class, 'protocolo' ])->middleware('egresado');
Route::POST('/documento',[EgresadoController::class, 'store' ])->middleware('egresado');
Route::POST('/documentoInicio/{Egresado}',[EgresadoController::class, 'documentoInicio' ])->middleware('egresado');


// //jefatura
// Route::get('/jefatura', [AdminController::class, 'jefatura']) ->middleware('jefatura');
// Route::get('/jefaturaAval',[JefaturaController::class, 'aval'])->middleware('jefatura');
// Route::get('/asesoriaJefatura',[JefaturaController::class, 'asesoria'])->middleware('jefatura');
// Route::get('/jefaturaIntegracion',[JefaturaController::class, 'integracion'])->middleware('jefatura');
// Route::get('/jefaturaFormato',[JefaturaController::class, 'formato'])->middleware('jefatura');

//academia
Route::get('/academia', [AdminController::class, 'academia'])->middleware('academia');
Route::get('/academiaAsesor',[AcademiaController::class, 'asesor'])->middleware('academia');
Route::get('/asignarAsesor/{Egresado}',[AcademiaController::class, 'asignar_asesor'])->middleware('academia');
Route::get('/asesoriaLiberada/{Egresado}',[AcademiaController::class, 'asesoria_liberada'])->middleware('academia');
Route::get('/liberacionAsesoria',[AcademiaController::class, 'liberacionAsesoria'])->middleware('academia');
Route::get('/academiaJurado',[AcademiaController::class, 'academiaJurado'])->middleware('academia');
Route::post('/Asesor/{Egresado}',[AcademiaController::class, 'guardarAsesor'])->middleware('academia');
Route::post('/Jurado/{Egresado}',[AcademiaController::class, 'guardarJurado'])->middleware('academia');
Route::get('/asignarJurado/{Egresado}',[AcademiaController::class, 'asignar_jurado'])->middleware('academia');
Route::get('/imprimir_aval_academia/{Egresado}',[AcademiaController::class, 'imprimir_aval']);//PDF
Route::POST('/firmasEscaneadas/{Egresado}',[AcademiaController::class, 'firmas'])->middleware('academia');
Route::POST('/protocolo_egresado/{Egresado}',[AcademiaController::class, 'protocolo']);
Route::POST('/baucher_pago/{Egresado}',[AcademiaController::class, 'boucher']);

Route::get('/imprimir_liberacion_academica/{Egresado}',[AcademiaController::class, 'imprimir_liberacion']);//PDF
Route::get('/imprimir_respuesta_integracion_jurado/{Egresado}',[AcademiaController::class, 'imprimir_respuesta_integracion_jurado']);//PDF

//division
Route::get('/division', [AdminController::class, 'division']) ->middleware('division');
Route::get('/PaseLiberacion',[DivisionController::class, 'pase']) ->middleware('division');
Route::get('/divisionAval',[DivisionController::class, 'aval']) ->middleware('division');
Route::get('/divisionAsesores/{Egresado}',[DivisionController::class, 'asesores']) ->middleware('division');
Route::get('/paseLiberacion/{Egresado}',[DivisionController::class, 'pase_liberacion']) ->middleware('division');
Route::get('/agendarActo/{Egresado}',[DivisionController::class, 'recepcion_acto']) ->middleware('division');
Route::get('/actoRecepcional',[DivisionController::class, 'acto']) ->middleware('division');
Route::get('/divicsionNoincoveniencia',[DivisionController::class, 'noincoveniencia']) ->middleware('division');
Route::get('/integracionJurado',[DivisionController::class, 'jurado']) ->middleware('division');
Route::get('/integracionJurado2/{Egresado}',[DivisionController::class, 'jurado2']) ->middleware('division');
Route::get('/imprimir_aval_asesores/{Egresado}',[DivisionController::class, 'imprimir_aval_asesores']);//PDF
Route::get('/imprimir_liberacion_asesorias/{Egresado}',[DivisionController::class, 'imprimir_liberacion_asesorias']);//PDF
Route::get('/imprimir_solicitud_integracion/{Egresado}',[DivisionController::class, 'imprimir_solicitud_integracion']);//PDF
Route::get('/imprimir_aviso_de_acto/{Egresado}',[DivisionController::class, 'imprimir_aviso_de_acto']);//PDF
Route::get('/imprimir_aviso_de_hora_actoRecep/{Egresado}',[DivisionController::class, 'imprimir_aviso_de_hora_actoRecep']);//PDF
Route::get('/imprimir_DGP',[DivisionController::class, 'imprimir_DGP']);//PDF


Route::POST('/recepcion/{egresado_id}',[DivisionController::class, 'agregarIdestudianteaRecepcion' ]) ->middleware('division');
Route::POST('/actoRecepcion/{egresado_id}',[DivisionController::class, 'actoRecepcion' ]) ->middleware('division');
Route::POST('/solicitudAsesor/{egresado_id}',[DivisionController::class, 'solicitudAsesor'])->middleware('division');
Route::POST('/acto/{egresado_id}',[DivisionController::class, 'asignacionActo' ]) ->middleware('division');

//descargar requisitos
Route::get('requisito1/{id}/download', [DivisionController::class, 'requisito1Download'])->name('requisito1.download');
Route::get('requisito2/{id}/download', [DivisionController::class, 'requisito2Download'])->name('requisito2.download');
Route::get('requisito3/{id}/download', [DivisionController::class, 'requisito3Download'])->name('requisito3.download');
//descarga boucher
Route::get('boucher/{id}/download', [DivisionController::class, 'boucherDownload'])->name('boucher.download');
//descarga protocolo
Route::get('protocolo/{id}/download', [DivisionController::class, 'protocoloDownload'])->name('protocolo.download');


//servicios escolares
Route::get('/escolares', [AdminController::class, 'escolares']) ->middleware('escolares');
Route::get('/NoIncoveniencia',[ServiciosEscolaresController::class, 'noincoveniencia'])->middleware('escolares');
Route::get('/DocumentosRevisados/{Egresado}',[ServiciosEscolaresController::class, 'documento'])->middleware('escolares');//documento
Route::get('/LiberarNoInconveniencia/{Egresado}',[ServiciosEscolaresController::class, 'liberar'])->middleware('escolares');//liberar
Route::get('/Concluir/{Egresado}',[ServiciosEscolaresController::class, 'concluir']);//concluir
Route::get('/LiberarNoIncoveniencia',[ServiciosEscolaresController::class, 'liberarNoincoveniencia'])->middleware('escolares');
Route::get('/escolaresProtocolo',[ServiciosEscolaresController::class, 'escolaresProtocolo'])->middleware('escolares');
Route::get('/imprimir_no_adeudo/{Egresado}',[ServiciosEscolaresController::class, 'imprimir_no_adeudo']);//PDF
Route::get('/imprimir_protocolo/{Egresado}',[ServiciosEscolaresController::class, 'imprimir_protocolo']);//PDF
Route::get('/imprimir_juramento/{Egresado}',[ServiciosEscolaresController::class, 'imprimir_juramento']);//PDF
Route::get('/imprimir_solicitud_acto/{Egresado}',[ServiciosEscolaresController::class, 'imprimir_solicitud_acto']);//PDF
Route::get('/imprimir_certificado/{Egresado}',[ServiciosEscolaresController::class, 'imprimir_certificado']);//PDF


Route::POST('/agendarCita',[ServiciosEscolaresController::class, 'citaAgenda' ])->middleware('escolares');
Route::POST('/finalizar/{egresado_id}',[ServiciosEscolaresController::class, 'finalizar' ])->middleware('escolares');
Route::POST('/documentos/{egresado_id}',[ServiciosEscolaresController::class, 'documentosRevisados' ])->middleware('escolares');
Route::POST('/liberarNo/{egresado_id}',[ServiciosEscolaresController::class, 'liberarNo' ])->middleware('escolares');


//notificacion
Route::get('notificacionEgresado/{egresado_id}', function ($id) {

    $correo = new NotificacionEgresado;
    $egresado = User::find($id);
    Mail::to($egresado)->send($correo);
    // return "mensaje enviado";
    return redirect()->back()->with('message', 'Mensaje Enviado');  
});

// Route::get('notificacionEgresado/{egresado_id}', function (Request $request, c) {

//     $correo = new NotificacionEgresado;
//     $egresado = User::find($id);
//     $egresado = User::where('egresado_id',Auth::id())->get();
//     Mail::to($egresado)->send($correo);

//     // return "mensaje enviado";
//     return redirect()->back()->with('message', 'Mensaje Enviado');  
// });

Route::get('notificacionDivision', function () {

    $correo = new NotificacionDivision;
    $empleado = User::find('all');
    $empleado = User::where('rol', '=', 'division')->get();
    Mail::to($empleado)->send($correo);
    return redirect()->back()->with('message', 'Mensaje Enviado');  
});

Route::get('notificacionAcademia', function () {

    $correo = new NotificacionAcademia;
    $empleado = User::find('all');
    $empleado = User::where('rol', '=', 'academia')->get();
    Mail::to($empleado)->send($correo);
    return redirect()->back()->with('message', 'Mensaje Enviado');  
});

Route::get('notificacionEscolares', function () {

    $correo = new NotificacionEscolares;
    $empleado = User::find('all');
    $empleado = User::where('rol', '=', 'escolares')->get();
    Mail::to($empleado)->send($correo);
    return redirect()->back()->with('message', 'Mensaje Enviado');  
});


//PDF
// Route::get('/imprimir_aceptacion_tesis',[PDFController::class, 'imprimir_aceptacion_tesis']);
// Route::get('/imprimir_constancia_no_inconveniencia',[PDFController::class, 'imprimir_constancia_no_inconveniencia']);
// Route::get('/imprimir_liberacion_academica',[PDFController::class, 'imprimir_liberacion_academica']);
// Route::get('/imprimir_respuesta_de_integracion_jurado',[PDFController::class, 'imprimir_respuesta_de_integracion_jurado']);
// Route::get('/imprimir_solicitud_de_integracion_jurado',[PDFController::class, 'imprimir_solicitud_de_integracion_jurado']);
// Route::get('/imprimir_solicitud_recepcion',[PDFController::class, 'imprimir_solicitud_recepcion']);

// Route::get('hora',function(){

//     $Object = new DateTime();
    
//     $DateAndTime = $Object->format("d-m-Y h:i:s a");
    
//     echo "The current date and time are $DateAndTime.";
    
//     $Object2 = new DateTime();
    
//     $Object2->setTimezone(new DateTimeZone('America/Mexico_city'));
    
//     $DateAndTime2 = $Object2->format("d-m-Y h:i:s a");
    
//     echo "The current date and time are $DateAndTime2.";
    
    
    
    
//     });