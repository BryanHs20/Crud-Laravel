<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

/* Route::get('/', function () {
    return view('main');
}); */
/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/carros',[CrudController::class,'verCar'])->name('ver.carros');
Route::get('/upCar/{id}',[CrudController::class,'verAct'])->name('ver.actualizar');
Route::post('/upCar/editar',[CrudController::class,'actualizar'])->name('up.carros');
Route::get('/addCar',[CrudController::class,'agregar'])->name('add.carros');
Route::post('/addCar/agregar',[CrudController::class,'agregarNew'])->name('add.new');
Route::get('/carros/{id}',[CrudController::class,'eliminar'])->name('eliminar.carros');
// Route::get('/crud',[CrudController::class,'vCar'])->name('mostrar.carros');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
