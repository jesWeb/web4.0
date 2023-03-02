<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homesController;
use App\Http\Controllers\PracticadosController;
use App\Http\Controllers\UsuariosController;

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
//mis rutas
Route::get('home',[homesController::class,'index'])->name('homes.index');
//practica2
Route::get('practicas',[PracticadosController::class,'index'])->name('practicados.index');

//registro us
Route::name('registro')->get('registro',[UsuariosController::class, 'registro']);
//js municipiso
Route::name('js_municipios')->get('js_municipios',[UsuariosController::class,'js_municipios']);

//form 01 campos adicionales 
Route::name('form01')->get('form01',[UsuariosController::class,'form01']);
Route::name('js_estudio')->get('js_estudio',[UsuariosController::class,'js_estudio']);
//ruta de form de trabajo 
Route::name('js_work')->get('js_work',[UsuariosController::class,'js_work']);