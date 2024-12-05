<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CvController;
use Illuminate\Support\Facades\Route;

// Ruta principal de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Ruta del dashboard, protegida con autenticación y verificación
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grupo de rutas protegidas con autenticación
Route::middleware('auth')->group(function () {
    // Rutas para el perfil del usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas para la gestión de CVs
    Route::resource('cvs', CvController::class);

    // Ruta para descargar un CV en PDF
    Route::get('cv/{id}/download', [CvController::class, 'download'])->name('cvs.download');
    // Ruta para eliminar un CV
    Route::delete('cv/{id}', [CvController::class, 'destroy'])->name('cvs.destroy');
});

// Incluye las rutas de autenticación generadas automáticamente
require __DIR__.'/auth.php';


