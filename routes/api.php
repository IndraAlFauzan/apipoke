<?php

use App\Http\Controllers\barangController;
use App\Http\Controllers\kategoriBarangController;
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


Route::get('barang/getAllKB/', [kategoriBarangController::class, 'getAllData']);
Route::post('barang/addKategoriBarang/', [kategoriBarangController::class, 'insertKategoriBarang']);
Route::post('barang/updateKB/{id}', [kategoriBarangController::class, 'updateKategoriBarang']);
Route::post('barang/deleteKB/{id}', [kategoriBarangController::class, 'deleteKategoriBarang']);
Route::Get('barang/getAllBarang/', [barangController::class, 'getAllData']);
Route::post('barang/addBarang/', [barangController::class, 'insertBarang']);

