@extends('layouts.main')
@section('container')
    

    
        <div class="jumbotron mt-4">
            <div class="container">
                <h1 class="display-3">Hello, world! Selamat Datang di Project Pembelajaran Laravel</h1>
                <br>
                <h3 class="">Nama Saya adalah {{ $nama }}</p>
                <br>
                <p><a class="btn btn-primary btn-lg" href="/about" role="button"> Detail mengenai saya</a></p>
            </div>
        </div>


    @endsection
