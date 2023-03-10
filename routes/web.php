<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BursaController;
use App\Http\Controllers\GrupaController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\SalariuController;
use App\Http\Controllers\StudentController;

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
Route::resources([
    'Bursa' => BursaController::class,
    'Profesor' => ProfesorController::class,
    'Student' => StudentController::class,
    'Salariu' => SalariuController::class,
    'Grupa' => GrupaController::class
]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('AddProfesor', [ProfesorController::class, 'insert'])->name('w');
Route::post('create', [ProfesorController::class,'create'])->name('w');

Route::get('AddStudent', [StudentController::class, 'insert'])->name('2');
Route::post('create', [StudentController::class,'create'])->name('2');
Route::get('AddSalariu', [SalariuController::class, 'insert'])->name('3');
Route::post('create', [SalariuController::class, 'create'])->name('3');