<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;


Route::middleware(['auth'])->group(function () {
    Route::get('/formulario', [PostController::class, 'mostrarFormulario']);
    Route::post('/procesar_formulario', [PostController::class, 'procesarFormulario']);
});

Route::get('/', HomeController::class);

require __DIR__.'/auth.php';
