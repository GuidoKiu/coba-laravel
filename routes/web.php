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
    $data = ['title' => 'Home', 'nama' => 'Guido'];
    return view('welcome', $data);
});


Route::get('/mahasiswa', function ()
{
    $mahasiswa = 
    [
        [
            "nama" => "Guido",
            "nim" => 13,
            "hobi" => "Coding"
        ],
        [
            "nama" => "Yeri",
            "nim" => 12,
            "hobi" => "Main Gitar"
        ],
        [
            "nama" => "Erwin",
            "nim" => 11,
            "hobi" => "Main Futsal"
        ]
    ];

    $data = ['title' => 'Data Mahasiswa', 'mahasiswa' => $mahasiswa];
    return view('mahasiswa', $data);
});

Route::get('/about', function ()
{
    $data =
        [
            'title' => 'About',
            'nama' => 'Guido',
            'hobi' => 'Coding',
            'bahasa' => 'C#, PHP, Dart'
        ];
    return view('about', $data);
});

Route::get('mahasiswa_detail/{slug}', function($nim)
{
    $mahasiswa = 
    [
        [
            "nama" => "Guido",
            "nim" => "13",
            "hobi" => "Coding"
        ],
        [
            "nama" => "Yeri",
            "nim" => "12",
            "hobi" => "Main Gitar"
        ],
        [
            "nama" => "Erwin",
            "nim" => "11",
            "hobi" => "Main Futsal"
        ]
    ];

    $detailmhs = [];
    foreach($mahasiswa as $mt)
    {
        if($mt["nim"] == $nim)
        {
            $detailmhs = $mt;
        }
    }

    $data = ['title' => 'Detail Data Mahasiswa', 'mahasiswa' => $detailmhs];
    return view('mahasiswa_detail', $data);
});
