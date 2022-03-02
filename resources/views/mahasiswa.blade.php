@extends('layouts.main')
@section('container')
<div class="row">
    <div class="col-lg">
        {{-- <?php Flasher::flash(); ?> --}}
    </div>
</div>

<div class="row">
    <div class="col-lg">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
            Tambah Data Mahasiswa
        </button>
        <a href="/mahasiswa/cetak" class="badge badge-warning" target="_blank">Cetak</a>
    </div>
</div>

<div class="row" id="containerGuido">
    <div class="col-lg">
        <h1> Data Mahasiswa </h1>
        <table id="table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th> NIM </th>
                    <th> Nama </th>
                    <th> Hobi </th>
                    <th> Aksi </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mt)
                <tr>
                    <td>{{ $mt['nim'] }}</td>
                    <td>{{ $mt['nama'] }}</td>
                    <td>{{ $mt['hobi'] }}</td>
                    <td>
                        <a href="/mahasiswa/hapus/{{ $mt['nim'] }}"
                            class="badge badge-danger float-right ml-1"
                            onclick="return confirm('yakin?');">Hapus</a>
                        <a href="/mahasiswa/ubah/{{ $mt['nim'] }}"
                            class="badge badge-warning float-right ml-1 tampilModalUbah" data-toggle="modal"
                            data-target="#formModal" data-id="{{ $mt['nim'] }}">Ubah</a>
                        <a href="/mahasiswa_detail/{{ $mt['nim'] }}"
                            class="badge badge-primary float-right ml-1">Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="number" class="form-control" name="nim" id="nim">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="number" class="form-control" name="umur" id="umur">
                    </div>
                    <div class="form-group">
                        <label for="prodi">Program Studi</label>
                        <select class="form-control" name="prodi" id="prodi">
                            <option value="Ilmu Komputer">Ilmu Komputer</option>
                            <option value="Matematika">Matematika</option>
                            <option value="Kimia">Kimia</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


    
