<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfittController;

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

Route::get('/',[App\Http\Controllers\ProfilController::class,'acceuil']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::resource('/profitt', ProfittController::class);
//Route::get('profitt', [ProfittController::class,'index']);
//Route::get('profitt/create', [ProfittController::class,'create']);

Route::resource('/skills', SkillsController::class);
Route::resource('/profil', ProfilController::class);
