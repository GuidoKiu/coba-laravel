<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = 
        [
            'title' => 'Data Mahasiswa',
            'mahasiswa' => Mahasiswa::all()
        ];
        return view('mahasiswa', $data);
    }

    public function mahasiswat(Mahasiswa $mahasiswa)
    {
        $data = 
        [ 
            'title' => 'Detail Data Mahasiswa', 
            'mahasiswa' => $mahasiswa
        ];
        return view('mahasiswa_detail', $data);
    }
    
}
