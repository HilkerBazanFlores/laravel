<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

//esta funcion muestra la vista
/*
Route::get('/', function () {
    return view('task.index');
});
*/
//muestra la vista del controlador de tareas
Route::get('/', [TaskController::class, 'index']);

//recepciona los datos del metodo post
Route::post('/', [TaskController::class, 'store']);

//metodo para eliminar los agregados
Route::delete('/{id}}', [TaskController::class, 'destroy'])->name('task.destroy');