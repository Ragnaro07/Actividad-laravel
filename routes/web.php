<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\SaludoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', [SaludoController::class, 'saludito']);
Route::resource('/cursos', CursoController::class);
Route::resource('/estudiantes', EstudianteController::class);
