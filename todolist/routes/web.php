<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

//esta funcion muestra la vista
/*
Route::get('/', function () {
    return view('task.index');
});
*/

//recepciona los datos del metodo post
Route::get('/', [TaskController::class, 'index']);
Route::post('/', function () {
    print_r($_POST);
});