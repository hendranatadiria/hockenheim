<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->group(function () {


});
Route::get('/post/{id}', [APIController::class, 'lihatPost'])->name('api.single'); // api.single ini nama bebas, assign saja sesuai kebutuhan.
Route::get('/search', [APIController::class, 'cariPost'])->name('api.search'); // api.single ini nama bebas, assign saja sesuai kebutuhan.
