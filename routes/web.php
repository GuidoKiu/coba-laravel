<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\MahasiswaController;
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

Route::get('/', function ()
{
    $data = ['title' => 'Home', 'nama' => 'Guido'];
    return view('welcome', $data);
});


Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('mahasiswa_detail/{mahasiswa:nim}', [MahasiswaController::class, 'find']); 
    
Route::get('/about', [AboutController::class, 'index']);