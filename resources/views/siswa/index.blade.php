@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Daftar Siswa</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-4">
            <h1 class="mb-4">List Siswa</h1>
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <a href="{{ route('siswa.create') }}" class="btn btn-dark text-capitalize btn-sm">New</a>
                </div>
                <div class="card-body overflow-auto">
                    <table class="table table-bordered table-striped table-sm">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
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
                                    <td>{{ $siswa->gender }}</td>
                                    <td>{{ $siswa->class_id }}</td>
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
                                    <label for="" class="text-capitalize">nama siswa</label>
                                    <input type="text" name="nama_siswa" id="nama_siswa" value="{{$siswa->nama_siswa}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-capitalize">username</label>
                                    <input type="text" name="username" id="username" value="{{$siswa->username}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="class" class="text-capitalize">Kelas</label>
                                    <select name="class_id" id="class_id" class="form-control">
                                        @foreach ($classrooms as $item)
                                            <option value="{{$item->id}}">{{$item->nama_kelas }} - {{$item->nama_jurusan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="class" class="text-capitalize">gender</label>
                                    <select name="class_id" id="class_id" class="form-control">
                                        <option>Pilih Gender</option>t
                                        <option value="0"  {{$siswa->gender == '0' ? 'selected' : ''}} >Laki-laki</option>
                                        <option value="1" {{$siswa->gender == '1' ? 'selected' : ''}} >perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="alamat" class="text-capitalize">alamat</label>
                                    <textarea name="alamat" id="alamat" cols="30"  rows="10" class="form-control">{{$siswa->alamat}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="no_telpon" class="text-capitalize">Nomor Telepon</label>
                                    <input type="text" name="no_telpon" id="no_telpon" value="{{$siswa->no_telpon}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="no_kendaraan" class="text-capitalize">No Kendaraan</label>
                                    <input type="text" name="no_kendaraan" id="no_kendaraan"  value="{{$siswa->no_kendaraan}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nis" class="text-capitalize">nis</label>
                                    <input type="text" name="nis" id="nis" value="{{$siswa->nis}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nisn" class="text-capitalize">NISN</label>
                                    <input type="text" name="nisn" id="nisn" value="{{$siswa->nisn}}" class="form-control">
                                </div>

                                <button type="submit" >save</button>

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
