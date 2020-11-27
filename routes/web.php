<?php

use App\Http\Controllers\ProfilController;
use App\Http\Controllers\MembreController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::post('/profil',[ProfilController::class, 'store']);
Route::post('/membre',[MembreController::class, 'store']);
Route::get('/welcome',[MembreController::class, 'index']);
Route::post('/user-del/{id}', [ProfilController::class, 'destroy']);
