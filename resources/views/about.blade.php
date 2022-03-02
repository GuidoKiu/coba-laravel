@extends('layouts.main')
@section('container')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Nama : {{ $profil['nama'] }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Hobi : {{ $profil['nim'] }}</h6>
            <p class="card-text">Hobi : {{ $profil['hobi'] }}</p>
        </div>
    </div>
@endsection
