<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenulisController;
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
//Frontpage
Route::get('/', [FrontendController::class, 'index']);
Route::get('/post/{id}', [FrontendController::class, 'lihatPost']);
Route::post('/post/{id}/komentar', [FrontendController::class, 'storeKomentar']);
Route::post('/post/deletecomment/{id}', [FrontendController::class, 'deleteKomentar']);
Route::get('/search', [FrontendController::class, 'cariPost']);

//Penulis
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'auth']);
Route::get('/signup', [LoginController::class, 'signup']);
Route::post('/signup', [LoginController::class, 'registerPenulis']);
Route::get('/logout', [LoginController::class, 'logout']);

//Admin
Route::get('/admin/login', [LoginController::class, 'login']);
Route::post('/admin/login', [LoginController::class, 'authAdmin']);
Route::get('/admin/logout', [LoginController::class, 'logoutAdmin']);
