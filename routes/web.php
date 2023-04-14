<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ExpedienteController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\StateController;
use Laravel\Jetstream\Rules\Role;

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


// Route::get('/', function () {
//     return view('adminpanel');
// });
Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->get('dashboard', function () {
    return view('admin.dashboard');
});
Route::resource('user', UserController::class);
Route::resource('alumno', AlumnoController::class);

Route::get('expediente/print/{expediente}', [ ExpedienteController::class, 'print'] )->name('expediente.print');
Route::resource('expediente', ExpedienteController::class);
Route::resource('reporte', ReporteController::class);
Route::get('reporte/print/{reporte}', [ ReporteController::class, 'print'] )->name('reporte.print');
Route::get('alumno/json/{alumno}', [AlumnoController::class, 'get_alumn_json'])->name('alumno.json');
Route::get('expediente/create/{alumno}',  [ExpedienteController::class, 'create_with_student'])->name('expediente.crear.alumno');
Route::get('estado/{estado}/get_all_ciudades', [StateController::class,'cities'])->name('estado.ciudades');