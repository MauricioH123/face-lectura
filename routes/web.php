<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EliminarRecursosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::get('/', [HomeController::class, 'home']);

Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['Middleware'=>'auth'], function(){
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])
    ->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin-libros', [DashboardController::class, 'getLibros']);
    Route::get('/admin-articulos', [DashboardController::class, 'getArticulos']);
    Route::get('/admin-obras', [DashboardController::class, 'todasLasObras']);
    Route::delete('/eliminar-libro', [EliminarRecursosController::class, 'eliminarLibros']);
    Route::get('/admin-libros-eliminados', [DashboardController::class, 'librosEliminados']);
    Route::post('/restaurar-libros', [EliminarRecursosController::class, 'restaurarLibros']);
    Route::post('/nuevoLibro',[DashboardController::class, 'nuevoLibro']);
});

require __DIR__.'/auth.php';
