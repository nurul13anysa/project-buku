@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Daftar Peraturan</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-4">
            <h1 class="mb-4">Daftar Peraturan</h1>
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <a href="{{ route('peraturan.create') }}" class="btn btn-dark text-capitalize btn-sm">New</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-sm">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Jenis Pelanggaran</th>
                                <th>Point</th>
                                <th>Point ID</th>
                                <th width="12%">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($peraturans as $index => $peraturan)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $peraturan->kode }}</td>
                                    <td>{{ $peraturan->jenis_pelanggaran }}</td>
                                    <td>{{ $peraturan->point }}</td>
                                    <td>{{ $peraturan->point_id}}</td>
                                    <td>
                                        <button class="btn btn-dark btn-sm" data-toggle="modal" data-target="#editModal{{ $peraturan->id }}">Edit</button>
                                        <form action="{{ route('peraturan.destroy', $peraturan->id) }}" method="POST" style="display:inline;">
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
        
        @foreach($peraturans as $peraturan)
            <!-- Edit Modal -->
            <div class="modal fade" id="editModal{{ $peraturan->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $peraturan->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel{{ $peraturan->id }}">Edit Peraturan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('peraturan.update', $peraturan->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="kode">Kode</label>
                                    <input type="text" class="form-control" id="kode" name="kode" value="{{ $peraturan->kode }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_pelanggaran">Jenis Pelanggaran</label>
                                    <input type="text" class="form-control" id="jenis_pelanggaran" name="jenis_pelanggaran" value="{{ $peraturan->jenis_pelanggaran }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="point">Point</label>
                                    <input type="number" class="form-control" id="point" name="point" value="{{ $peraturan->point }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="point_id">Point ID</label>
                                    <input type="number" class="form-control" id="point_id" name="point_id" value="{{ $peraturan->point_id }}" required>
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
