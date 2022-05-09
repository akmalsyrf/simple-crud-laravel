<?php

use App\Http\Controllers\EmployeeController;
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


Route::get('/', [EmployeeController::class, 'index'])->name('pegawai');
Route::get('/tambahpegawai', [EmployeeController::class, 'tambahpegawai'])->name('tambahpegawai');
Route::post('/insertpegawai', [EmployeeController::class, 'insertpegawai'])->name('insertpegawai');
Route::get('/tampilkanpegawai/{id}', [EmployeeController::class, 'tampilkanpegawai'])->name('tampilkanpegawai');
Route::post('/updatepegawai/{id}', [EmployeeController::class, 'updatepegawai'])->name('updatepegawai');
Route::get('/deletepegawai/{id}', [EmployeeController::class, 'deletepegawai'])->name('deletepegawai');
