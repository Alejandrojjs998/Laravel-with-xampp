<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
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

Route::get('/auxi', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('paginas.index');
})->name('acceso');


Route::get('/', [UsuariosController::class, 'index'])->name('acceso');

Route::post('/', [UsuariosController::class, 'store'])->name('acceso');


Route::get('/{id}', [UsuariosController::class, 'show'])->name('acceso-edit');
Route::patch('/{id}', [UsuariosController::class, 'update'])->name('acceso-update');
Route::delete('/{id}', [UsuariosController::class, 'destroy'])->name('acceso-destroy');
