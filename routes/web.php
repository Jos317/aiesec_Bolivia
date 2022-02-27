<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\role_controller;
use App\Http\Controllers\TalentoController;
use App\Http\Controllers\user_controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('roles', role_controller::class)->names('roles');
Route::resource('users',user_controller::class)->names('users');

//Empresa
Route::get('form_empresas', [EmpresaController::class, 'form']);
Route::post('empresa/store', [EmpresaController::class, 'store']);
Route::resource('empresa',Empresacontroller::class)->names('empresa');
Route::get('empresa/ver/{id}', [EmpresaController::class, 'ver']);

//Talento
Route::get('form_talentos', [TalentoController::class, 'form']);
Route::post('talento/store', [TalentoController::class, 'store']);
Route::resource('talento',TalentoController::class)->names('talento');
Route::get('talento/ver/{id}', [TalentoController::class, 'ver']);


