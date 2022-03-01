@extends('layouts.main')
@section('container')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Nama : {{ $nama }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Hobi : {{ $hobi }}</h6>
            <p class="card-text">Bahasa Pemograman : {{ $bahasa }}</p>
        </div>
    </div>
    <div>
        <h1>ayam</h1>
    </div>
@endsection
