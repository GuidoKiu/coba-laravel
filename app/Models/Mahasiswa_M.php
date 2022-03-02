<?php

namespace App\Models;


class Mahasiswa_M
{
    private static $DataMahasiswa = 
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

    public static function all()
    {
        return collect(self::$DataMahasiswa);
    }

    public static function detail($nim)
    {
        $mahasiswa = static::all();
        return $mahasiswa -> firstWhere('nim', $nim);
    }
}
