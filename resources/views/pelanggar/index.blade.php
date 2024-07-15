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
    <style>
        th {
            white-space: nowrap;
        }
        tr {
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Daftar Pelanggar</h1>
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <a href="{{ route('pelanggar.create') }}" class="btn btn-dark text-capitalize btn-sm">New</a>
            </div>
            <div class="card-body overflow-auto">
                <table class="table table-bordered table-striped table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Identitas Siswa</th>
                            <th>Tanggal</th>
                            <th>Kode Pelanggaran - Point - Penanganan</th>
                            <th>Nama Petugas</th>
                            <th>Keterangan</th>
                            <th width="12%">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($pelanggars as $index => $pelanggar)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ optional($pelanggar->siswa)->nama_siswa }} - {{ optional($pelanggar->siswa)->class_id }}</td>
                                <td>{{ $pelanggar->tanggal }}</td>
                                <td>{{ optional($pelanggar->kode)->kode }} - {{ optional($pelanggar->kode)->point }} - {{ optional($pelanggar->kode)->penanganan }}</td>
                                <td>{{ ($pelanggar->petugas_id) }}</td>
                                <td>{{ $pelanggar->keterangan }}</td>
                                <td>
                                    <button class="btn btn-dark btn-sm" data-toggle="modal" data-target="#editModal{{ $pelanggar->id }}">Edit</button>
                                    <form action="{{ route('pelanggar.destroy', $pelanggar->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-light btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>   
                        @endforeach --}}
                        @foreach($pelanggars as $index => $pelanggar)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ optional($pelanggar->siswa)->nama_siswa ?? '' }} - {{ optional($pelanggar->siswa->kelas)->nama_kelas ?? '' }} - {{ optional($pelanggar->siswa->jurusan)->nama_jurusan ?? '' }}</td>
                            <td>{{ $pelanggar->tanggal }}</td>
                            <td>{{ optional($pelanggar->kode)->kode }} - {{ optional($pelanggar->kode)->point }} - {{ optional($pelanggar->kode)->penanganan }}</td>
                            <td>{{ optional($pelanggar->petugas)->nama_petugas }}</td>
                            <td>{{ $pelanggar->keterangan }}</td>
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
                                <label for="class" class="text-capitalize">Identitas Siswa</label>
                                <select name="siswa_id" id="siswa_id" class="form-control">
                                    @foreach ($siswas as $siswa)
                                        <option value="{{ $siswa->id }}" {{ $siswa->id == $pelanggar->siswa_id ? 'selected' : '' }}>{{ $siswa->nama_siswa }} - {{ $siswa->class_id }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $pelanggar->tanggal }}" required>
                            </div>
                            <div class="form-group">
                                <label for="kode_id" class="text-capitalize">Kode Pelanggaran - Point - Penanganan</label>
                                <select name="kode_id" id="kode_id" class="form-control">
                                    @foreach ($peraturans as $peraturan)
                                        <option value="{{ $peraturan->id }}" {{ $peraturan->id == $pelanggar->kode_id ? 'selected' : '' }}>{{ $peraturan->kode }} - {{ $peraturan->point }} - {{ $peraturan->penanganan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="petugas_id" class="text-capitalize">Nama Petugas</label>
                                <select name="petugas_id" id="petugas_id" class="form-control">
                                    @foreach ($petugas as $petugasItem)
                                        <option value="{{ $petugasItem->id }}" {{ $petugasItem->id == $pelanggar->petugas_id ? 'selected' : '' }}>
                                            {{ $petugasItem->nama_petugas }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $pelanggar->keterangan }}" required>
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