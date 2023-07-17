<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsuariosRoleController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\EmpleadoCarreraController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
Route::resource('carreras', CarreraController::class);
Route::resource('empleados', EmpleadoController::class);
Route::resource('periodos', PeriodoController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
