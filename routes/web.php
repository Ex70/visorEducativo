<?php

use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/profile',[UsuarioController::class, 'profile']);
    Route::get('/subirArchivos',[ArchivoController::class, 'createForm']);
    // Route::get('/archivos',[ArchivoController::class, 'index']);
    Route::resource('/archivos',ArchivoController::class)->names('archivo');
    Route::post('/upload-file',[ArchivoController::class, 'fileUpload'])->name('fileUpload');
    Route::resource('/permisos',PermisoController::class)->names('permisos');
    Route::resource('/roles',RoleController::class)->names('roles');
    Route::resource('/client',ClienteController::class)->names('cliente');
    Route::get('archivo/{id}', [ArchivoController::class, 'documentos'])->name('visualizar');
});

Route::get('/auth/redirect',[AuthController::class, 'redirect']);
Route::get('/auth/callback-url',[AuthController::class, 'callback']);