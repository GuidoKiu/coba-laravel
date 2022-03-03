@extends('layouts.main')
@section('container')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Nama : {{ $mahasiswa->nama }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">NIM : {{ $mahasiswa->nim }}</h6>
            <p class="card-text">Hobi : {{ $mahasiswa->hobi }}</p>
        </div>
    </div>
    <div>
        <a href="/mahasiswa">Kembali</a>
    </div>
@endsection


