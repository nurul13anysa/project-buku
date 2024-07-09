@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">List Siswa</h1>
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <a href="{{ route('siswa.create') }}" class="btn btn-dark text-capitalize btn-sm">New Siswa</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th>Id</th>
                            <th>Nama Siswa</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Class</th>
                            <th>Gender</th>
                            <th>Alamat</th>
                            <th>No Telpon</th>
                            <th>No Kendaraan</th>
                            <th>NIS</th>
                            <th>NISN</th>
                            <th width="12%">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($siswas as $index => $siswa)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $siswa->nama_siswa }}</td>
                                <td>{{ $siswa->username }}</td>
                                <td>{{ $siswa->email }}</td>
                                <td>{{ $siswa->password }}</td>
                                <td>{{ $siswa->class }}</td>
                                <td>{{ $siswa->gender }}</td>
                                <td>{{ $siswa->alamat }}</td>
                                <td>{{ $siswa->no_telpon }}</td>
                                <td>{{ $siswa->no_kendaraan }}</td>
                                <td>{{ $siswa->nis }}</td>
                                <td>{{ $siswa->nisn }}</td>
                                <td>
                                <button class="btn btn-dark btn-sm" data-toggle="modal" data-target="#editModal{{ $siswa->id }}">Edit</button>
                                    <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" style="display:inline;">
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

    @foreach($siswas as $siswa)
        <!-- Edit Modal -->
        <div class="modal fade" id="editModal{{ $siswa->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $siswa->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel{{ $siswa->id }}">Edit Siswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="id">Id Siswa</label>
                                <input type="text" class="form-control" id="id" name="id" value="{{ $siswa->id }}" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_siswa">Nama Siswa</label>
                                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $siswa->nama_siswa }}" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="{{ $siswa->username }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{ $siswa->email }}" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" id="password" name="password" value="{{ $siswa->password }}" required>
                            </div>
                            <div class="form-group">
                                <label for="class">Class</label>
                                <input type="text" class="form-control" id="class" name="class" value="{{ $siswa->class }}" required>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <input type="text" class="form-control" id="gender" name="gender" value="{{ $siswa->gender }}" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $siswa->alamat }}" required>
                            </div>
                            <div class="form-group">
                                <label for="no_telpon">No Telpon</label>
                                <input type="text" class="form-control" id="no_telpon" name="no_telpon" value="{{ $siswa->no_telpon }}" required>
                            </div>
                            <div class="form-group">
                                <label for="no_kendaraan">No Kendaraan</label>
                                <input type="text" class="form-control" id="no_kendaraan" name="no_kendaraan" value="{{ $siswa->no_kendaraan }}" required>
                            </div>
                            <div class="form-group">
                                <label for="nis">NIS</label>
                                <input type="text" class="form-control" id="nis" name="nis" value="{{ $siswa->nis }}" required>
                            </div>
                            <div class="form-group">
                                <label for="nisn">NISN</label>
                                <input type="text" class="form-control" id="nisn" name="nisn" value="{{ $siswa->nisn }}" required>
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