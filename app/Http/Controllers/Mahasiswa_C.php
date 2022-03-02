<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa_M;

class Mahasiswa_C extends Controller
{
    public function index()
    {
        $data = 
        [
            'title' => 'Data Mahasiswa',
            'mahasiswa' => Mahasiswa_M::all()
        ];
        return view('mahasiswa', $data);
    }

    public function mahasiswat($nim)
    {
        $data = 
        [ 
            'title' => 'Detail Data Mahasiswa', 
            'mahasiswa' => Mahasiswa_M::detail($nim)
        ];
        return view('mahasiswa_detail', $data);
    }
    
}
