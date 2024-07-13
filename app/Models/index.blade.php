@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Daftar Pelanggar</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-4">
            <h1 class="mb-4">Daftar Pelanggar</h1>
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <a href="{{ route('pelanggar.create') }}" class="btn btn-dark text-capitalize btn-sm">New</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-sm">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Tanggal</th>
                                <th>Kelas</th>
                                <th>Kode Pelanggaran</th>
                                <th>Point</th>
                                <th>Penanganan</th>
                                <th>Nama Petugas</th>
                                <th width="12%">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pelanggars as $index => $pelanggar)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $pelanggar->nama_siswa }}</td>
                                    <td>{{ $pelanggar->tanggal }}</td>
                                    <td>{{ $pelanggar->kelas }}</td>
                                    <td>{{ $pelanggar->kode_pelanggaran }}</td>
                                    <td>{{ $pelanggar->point }}</td>
                                    <td>{{ $pelanggar->penanganan }}</td>
                                    <td>{{ $pelanggar->nama_petugas }}</td>
                                    <td>
                                        <button class="btn btn-dark btn-sm" data-toggle="modal" data-target="#editModal{{ $pelanggar->id }}">Edit</button>
                                        <form action="{{ route('pelanggar.destroy', $pelanggar->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-light btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>   
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @foreach($pelanggars as $pelanggar)
            <!-- Edit Modal -->
            <div class="modal fade" id="editModal{{ $pelanggar->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $pelanggar->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel{{ $pelanggar->id }}">Edit Pelanggar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('pelanggar.update', $pelanggar->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nama_siswa">Nama Siswa</label>
                                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $pelanggar->nama_siswa }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $pelanggar->tanggal }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="kelas">Kelas</label>
                                    <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $pelanggar->kelas }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="kode_pelanggaran">Kode Pelanggaran</label>
                                    <input type="text" class="form-control" id="kode_pelanggaran" name="kode_pelanggaran" value="{{ $pelanggar->kode_pelanggaran }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="point">Point</label>
                                    <input type="number" class="form-control" id="point" name="point" value="{{ $pelanggar->point }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="penanganan">Penanganan</label>
                                    <input type="text" class="form-control" id="penanganan" name="penanganan" value="{{ $pelanggar->penanganan }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_petugas">Nama Petugas</label>
                                    <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" value="{{ $pelanggar->nama_petugas }}" required>
                                </div>
                                <button type="submit" class="btn btn-dark">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- Scripts for Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
    </html>
@endsection