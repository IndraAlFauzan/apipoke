<?php

use App\Http\Controllers\barangController;
use App\Http\Controllers\kategoriBarangController;
use App\Http\Controllers\users_barangController;
use App\Http\Controllers\usersController;
use App\Models\kategoriBarang;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//katergori barang
Route::get('barang/getAllKB/', [kategoriBarangController::class, 'getAllData']);
Route::post('barang/addKB/', [kategoriBarangController::class, 'insertKategoriBarang']);
Route::post('barang/updateKB/{id}', [kategoriBarangController::class, 'updateKategoriBarang']);
Route::post('barang/deleteKB/{id}', [kategoriBarangController::class, 'deleteKategoriBarang']);
//barang
Route::Get('barang/getAllBarang/', [barangController::class, 'getAllData']);
Route::post('barang/addBarang/', [barangController::class, 'insertBarang']);
Route::post('barang/updateBarang/{id}', [barangController::class, 'updateBarang']);
Route::post('barang/deleteBarang/{id}', [barangController::class, 'deleteBarang']);
Route::get('barang/getBarang/{id}', [barangController::class, 'getBarang']);
Route::get('barang/getBarangByKategori/{id_kategori_barang}', [barangController::class, 'getBarangByKategori']);
//users barang
Route::get('barang/getAllUsersBarang/', [users_barangController::class, 'getAllData']);
Route::post('barang/addUsersBarang/', [users_barangController::class, 'insertusers_barang']);
Route::post('barang/updateUsersBarang/{id}', [users_barangController::class, 'updateusers_barang']);
Route::post('barang/deleteUsersBarang/{id}', [users_barangController::class, 'deleteusers_barang']);
Route::get('barang/getBarangByUsers/{uid}', [users_barangController::class, 'getBarangByUsers']);
Route::get('barang/getUsersByBarang/{id}', [users_barangController::class, 'getUsersByBarang']);
//users
Route::get('barang/getAllUsers/', [usersController::class, 'getAllData']);
Route::post('barang/addUsers/', [usersController::class, 'insertUsers']);
Route::post('barang/updateUsers/{uid}', [usersController::class, 'updateUsers']);
Route::post('barang/deleteUsers/{uid}', [usersController::class, 'deleteUsers']);


