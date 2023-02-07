<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ExpedienteController;
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


Route::get('dashboard', function () {
    return view('admin.dashboard');
});
Route::resource('user', UserController::class);
Route::resource('alumno', AlumnoController::class);
Route::resource('expediente', ExpedienteController::class);
