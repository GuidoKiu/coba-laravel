<?php

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
    $data = ['Judul' => 'Home', 'Nama' => 'Guido'];
    return view('welcome', $data);
});
Route::get('/mahasiswa', function ()
{
    $data = ['Judul' => 'Data Mahasiswa'];
    return view('mahasiswa', $data);
});
Route::get('/about', function ()
{
    $data =
        [
            'Judul' => 'About',
            'Nama' => 'Guido',
            'Hobi' => 'Coding',
            'BahasaPemograman' => 'C#, PHP, Dart'
        ];
    return view('about', $data);
});
