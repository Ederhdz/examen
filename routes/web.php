<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Empleados;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/empleados', 'Empleados@V_Empleados');
Route::get('/empleados', [App\Http\Controllers\EmpleadosController::class, 'V_Empleados'])->name('home');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
