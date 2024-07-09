@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">List Point </h1>
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <a href="{{ route('point.create') }}" class="btn btn-dark text-capitalize btn-sm">New</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th>Id</th>
                            <th>Nama Siswa</th>
                            <th>Tanggal</th>
                            <th>Class</th>
                            <th>Tugas Penanganan</th>
                            <th>Pelanggaran</th>
                            <th>Keterangan</th>
                            <th width="12%">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($points as $index => $point)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $point->nama_siswa }}</td>
                                <td>{{ $point->tanggal }}</td>
                                <td>{{ $point->class }}</td>
                                <td>{{ $point->tugas_penanganan }}</td>
                                <td>{{ $point->pelanggaran }}</td>
                                <td>{{ $point->keterangan }}</td>
                                <td>
                                    <button class="btn btn-dark btn-sm" data-toggle="modal" data-target="#editModal{{ $point->id }}">Edit</button>
                                    <form action="{{ route('point.destroy', $point->id) }}" method="POST" style="display:inline;">
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

    @foreach($points as $point)
        <!-- Edit Modal -->
        <div class="modal fade" id="editModal{{ $point->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $point->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel{{ $point->id }}">Edit Point</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('point.update', $point->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="id">Id</label>
                                <input type="text" class="form-control" id="id" name="id" value="{{ $point->id }}" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_siswa">Nama Siswa</label>
                                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $point->nama_siswa }}" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{ $point->tanggal }}" required>
                            </div>
                            <div class="form-group">
                                <label for="class">Class</label>
                                <input type="text" class="form-control" id="class" name="class" value="{{ $point->class }}" required>
                            </div>
                            <div class="form-group">
                                <label for="tugas_penanganan">Tugas Penanganan</label>
                                <input type="text" class="form-control" id="tugas_penanganan" name="tugas_penanganan" value="{{ $point->tugas_penanganan }}" required>
                            </div>
                            <div class="form-group">
                                <label for="pelanggaran">Pelanggaran</label>
                                <input type="text" class="form-control" id="pelanggaran" name="pelanggaran" value="{{ $point->pelanggaran }}" required>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $point->keterangan }}" required>
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
@endsection
