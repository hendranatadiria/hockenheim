<?php

use App\Http\Controllers\AdminController;
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

//Penulis
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'auth']);
Route::get('/signup', [LoginController::class, 'signup']);
Route::post('/signup', [LoginController::class, 'registerPenulis']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware('auth:web')->group(function () {
    Route::get('/post/tambah', [PenulisController::class, 'tambahPost']);
    Route::post('/post/tambah', [PenulisController::class, 'simpanPost']);
    Route::get('/post/edit/{id}', [PenulisController::class, 'editPost']);
    Route::post('/post/edit/{id}', [PenulisController::class, 'updatePost']);
    Route::get('/post/editAkun/{id}', [PenulisController::class, 'editAkunPenulis']);
    Route::post('/post/editAkun/{id}', [PenulisController::class, 'updateAkunPenulis']);
});

//Admin
Route::get('/admin/login', [LoginController::class, 'login']);
Route::post('/admin/login', [LoginController::class, 'authAdmin']);
Route::get('/admin/logout', [LoginController::class, 'logoutAdmin']);

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/kategori', [AdminController::class, 'listKategori']);
    Route::get('/admin/kategori/tambah', [AdminController::class, 'tambahKategori']);
    Route::post('/admin/kategori/tambah', [AdminController::class, 'simpanKategori']);
    Route::get('/admin/kategori/edit/{id}', [AdminController::class, 'editKategori']);
    Route::post('/admin/kategori/edit/{id}', [AdminController::class, 'updateKategori']);
});

//Frontpage
Route::get('/', [FrontendController::class, 'index']);
Route::get('/post/{id}', [FrontendController::class, 'lihatPost']);
Route::post('/post/{id}/komentar', [FrontendController::class, 'storeKomentar']);
Route::post('/post/deletecomment/{id}', [FrontendController::class, 'deleteKomentar']);
Route::get('/search', [FrontendController::class, 'cariPost']);

