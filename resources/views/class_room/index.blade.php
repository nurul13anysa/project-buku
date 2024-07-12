@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Daftar Classroom</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-4">
            <h1 class="mb-4">Daftar Classroom</h1>
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <a href="{{ route('class_room.create') }}" class="btn btn-dark text-capitalize btn-sm">New</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-sm">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Kelas</th>
                                <th>Nama Jurusan</th>
                                <th width="12%">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($class_rooms as $index => $class_room)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $class_room->nama_kelas }}</td>
                                    <td>{{ $class_room->nama_jurusan }}</td>
                                    <td>
                                        <button class="btn btn-dark btn-sm" data-toggle="modal" data-target="#editModal{{ $class_room->id }}">Edit</button>
                                        <form action="{{ route('class_room.destroy', $class_room->id) }}" method="POST" style="display:inline;">
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
        
        @foreach($class_rooms as $class_room)
            <!-- Edit Modal -->
            <div class="modal fade" id="editModal{{ $class_room->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $class_room->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel{{ $class_room->id }}">Edit Classroom</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('class_room.update', $class_room->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nama_kelas">Nama Kelas</label>
                                    <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="{{ $class_room->nama_kelas }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_jurusan">Nama Jurusan</label>
                                    <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" value="{{ $class_room->nama_jurusan }}" required>
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
