<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EgresadoController;
use App\Http\Controllers\DocumentosController;
use App\Models\Opcion;
use App\Models\Egresado;

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
    return view('auth.login');
});

Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
Route::get('/auth/register',[MainController::class, 'register'])->name('auth.register');
Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');



Route::group(['middleware'=>['AuthCheck']], function(){

    //Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
    //Route::get('/auth/register',[MainController::class, 'register'])->name('auth.register');

    Route::get('/admin/dashboard',[MainController::class, 'dashboard']); 
    Route::get('/admin/settings',[MainController::class,'settings']);
    Route::get('/admin/profile',[MainController::class,'profile']);
    Route::get('/admin/staff',[MainController::class,'staff']);

    Route::get('/egresado',[EgresadoController::class,'index']);


    Route::POST('documento',[DocumentosController::class, 'store' ]);
    Route::POST('/crearCita',[DocumentosController::class, 'cita' ]);

    Route::get('/crearCita/confirm',function () {
        return view('egresados.confirmar');
    });

    Route::get('/crearCita/{opcion}',function ($opcion){
        return view('egresados.create')->with('opcion',$opcion);;
    });
    

    Route::resource('empleado', EmpleadoController::class); //->middleware('auth');
    Route::resource('tramite', TramiteController::class);
    
    Route::get('/home', [EmpleadoController::class, 'index'])->name('home');
    Route::get('/empleado', [EmpleadoController::class, 'index'])->name('home');

    Route::get('/avances',function () {

        $datos2['egresados']=Egresado::paginate();
        return view('empleado.aval', $datos2);
    
    });
    Route::resource('egresado', EgresadoController::class);
         
  
});




