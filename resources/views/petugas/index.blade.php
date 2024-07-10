@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Daftar Petugas</h1>
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <a href="{{ route('petugas.create') }}" class="btn btn-dark text-capitalize btn-sm">New</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Petugas</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th width="12%">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($petugas as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->nama_petugas }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->password }}</td>
                                <td>
                                    <button class="btn btn-dark btn-sm" data-toggle="modal" data-target="#editModal{{ $item->id }}">Edit</button>
                                    <form action="{{ route('petugas.destroy', $item->id) }}" method="POST" style="display:inline;">
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
    
    @foreach($petugas as $item)
        <!-- Edit Modal -->
        <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Petugas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('petugas.update', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama">Nama Petugas</label>
                                <input type="text" class="form-control" id="nama" name="nama_petugas" value="{{ $item->nama_petugas }}" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="{{ $petugas->username }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{ $petugas->email }}" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" id="password" name="password" value="{{ $petugas->password }}" required>
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
