@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container py-3">
    <div class="card shadow-sm">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h1 class="bg-teal-500 p-3 text-black font-bold">Form Tambah Class Room</h1>
        <a href="{{ route('class_room.index') }}" class="btn btn-outline-secondary">Back</a>
      </div>
      <div class="card-body">
        <form action="{{ route('class_room.store') }}" method="POST">
          @csrf

          <div class="mb-3 row">
            <label for="nama_kelas" class="col-sm-2 col-form-label">Nama kelas <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" name="nama_kelas" id="nama_kelas" class="form-control" placeholder="Masukan Nama kelas" value="{{ old('nama_kelas') }}">
              @error('nama_kelas')
                
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="nama_jurusan" class="col-sm-2 col-form-label">Nama Jurusan <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" name="nama_jurusan" id="nama_jurusan" class="form-control" placeholder="Masukan Nama Jurusan" value="{{ old('nama_jurusan') }}">
              @error('nama_jurusan')

              @enderror
            </div>
          </div>

          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-dark">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>

@endsection
