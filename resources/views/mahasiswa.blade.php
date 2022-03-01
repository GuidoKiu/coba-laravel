@extends('layouts.main')
@section('container')
    @foreach ($mahasiswa as $mt)
        <h5>{{ $mt["nama"] }}</h5>
        <ul>
            <li>NIM : {{ $mt["nim"] }}</li>
            <li>Hobi :{{ $mt["hobi"] }}</li>
            <a href="/mahasiswa_detail/{{ $mt["nim"] }}">Detail</a>
        </ul>
    @endforeach
@endsection
