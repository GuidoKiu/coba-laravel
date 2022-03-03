<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = 
        [
            'title' => 'Data Mahasiswa',
        ];
        return view('about', $data);
    }
}
