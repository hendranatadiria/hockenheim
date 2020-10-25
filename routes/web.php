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

//Penulis Auth
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'auth']);
Route::get('/signup', [LoginController::class, 'signup']);
Route::post('/signup', [LoginController::class, 'registerPenulis']);
Route::get('/logout', [LoginController::class, 'logout']);

//Admin Auth
Route::get('/admin/login', [LoginController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'authAdmin']);
Route::get('/admin/logout', [LoginController::class, 'logoutAdmin']);

Route::middleware('auth:web')->group(function () {
    Route::get('/mypost', [PenulisController::class, 'postSaya']);
    Route::get('/post/tambah', [PenulisController::class, 'tambahPost']);
    Route::post('/post/tambah', [PenulisController::class, 'simpanPost']);
    Route::get('/post/edit/{id}', [PenulisController::class, 'editPost']);
    Route::post('/post/edit/{id}', [PenulisController::class, 'updatePost']);
    Route::post('/post/hapus/{id}', [PenulisController::class, 'deletePost']);
    Route::get('/post/editAkun/{id}', [PenulisController::class, 'editAkunPenulis']);
    Route::post('/post/editAkun/{id}', [PenulisController::class, 'updateAkunPenulis']);
});

//Admin
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/penulis/daftar', [AdminController::class, 'listPenulis'])->name('admin.listpenulis');
    Route::get('/admin/penulis/resetpass/{id}', [AdminController::class, 'resetPassword'])->name('admin.listpenulis');
    Route::post('/admin/penulis/resetpass/{id}', [AdminController::class, 'storeResetPassword'])->name('admin.listpenulis');
    Route::get('/admin/kategori/daftar', [AdminController::class, 'listKategori'])->name('admin.listkategori');
    Route::get('/admin/kategori/tambah', [AdminController::class, 'tambahKategori'])->name('admin.addcategory');
    Route::post('/admin/kategori/tambah', [AdminController::class, 'simpanKategori'])->name('admin.storecategory');
    Route::post('/admin/kategori/hapus/{id}', [AdminController::class, 'hapusKategori'])->name('admin.deletecategory');
    Route::get('/admin/kategori/edit/{id}', [AdminController::class, 'editKategori'])->name('admin.editkategori');
    Route::post('/admin/kategori/edit/{id}', [AdminController::class, 'updateKategori'])->name('admin.updatekategori');
});

//Frontpage
Route::get('/', [FrontendController::class, 'index']);
Route::get('/home', [FrontendController::class, 'index']);
Route::get('/kategori/{id}', [FrontendController::class, 'kategoriPost']);
Route::get('/post/{id}', [FrontendController::class, 'lihatPost']);
Route::post('/post/{id}/komentar', [FrontendController::class, 'storeKomentar']);
Route::post('/post/deletecomment/{id}', [FrontendController::class, 'deleteKomentar']);
Route::get('/search', [FrontendController::class, 'cariPost']);

