<?php

use App\Http\Controllers\Mahasiswa_C;
use App\Models\Mahasiswa_M;
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


Route::get('/mahasiswa', [Mahasiswa_C::class, 'index']);
Route::get('mahasiswa_detail/{slug}', [Mahasiswa_C::class, 'mahasiswat']); 
    
Route::get('/about', function ()
{
    $data =
        [
            'title' => 'About',
            'profil' => Mahasiswa_M::detail(13) 
        ];
    return view('about', $data);
});