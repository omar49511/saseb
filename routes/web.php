<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
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
    return view('expedientes.create');
});

Route::get('alumno', function (){
    return view('alumnos.index');
});

Route::get('dashboard', function () {
    return view('admin.dashboard');
});

Route::resource('user', UserController::class);


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('admin.dashboard');
//     })->name('dashboard');
// });
