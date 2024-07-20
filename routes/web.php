<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\InfraccionController;
use App\Http\Controllers\TitularController;
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

Route::get('/', HomeController::class);

//rutas del titular
// Route::resource('titular', TitularController::class);
Route::prefix('/titular')->group(function() {
    Route::get('/', [TitularController::class, 'index'])->name('titular.index');
    Route::get('/create', [TitularController::class, 'create'])->name('titular.create');
    Route::post('/', [TitularController::class, 'store'])->name('titular.store');
    Route::get('/{id}', [TitularController::class, 'show'])->name('titular.show');
    Route::get('/{id}/edit', [TitularController::class, 'edit'])->name('titular.edit');
    Route::put('/{id}', [TitularController::class, 'update'])->name('titular.update');
    Route::delete('/{id}', [TitularController::class, 'destroy'])->name('titular.destroy');
});

//rutas del auto
Route::prefix('/auto')->group(function() {
    Route::get('/', [AutoController::class, 'index'])->name('auto.index');
    Route::get('/create', [AutoController::class, 'create'])->name('auto.create');
    Route::post('/', [AutoController::class, 'store'])->name('auto.store');
});

//rutas de infraccion
Route::prefix('/infraccion')->group(function() {
    Route::get('/', [InfraccionController::class, 'index'])->name('infraccion.index');
    Route::get('/create', [InfraccionController::class, 'create'])->name('infraccion.create');
    Route::post('/', [InfraccionController::class, 'store'])->name('infraccion.store');
});
