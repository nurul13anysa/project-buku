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
        <h1 class="bg-teal-500 p-3 text-black font-bold">Form Tambah Point</h1>
        <a href="{{ route('point.index') }}" class="btn btn-outline-secondary">Back</a>
      </div>
      <div class="card-body">
        <form action="{{ route('point.store') }}" method="POST">
          @csrf

          <div class="mb-3 row">
            <label for="nama_siswa" class="col-sm-2 col-form-label">Nama Siswa <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" placeholder="Masukan Nama Siswa" value="{{ old('nama_siswa') }}">
              @error('nama_siswa')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="Masukan Tanggal" value="{{ old('tanggal') }}">
              @error('tanggal')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="class" class="col-sm-2 col-form-label">Class <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" name="class" id="class" class="form-control" placeholder="Masukan Class" value="{{ old('class') }}">
              @error('class')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="tugas_penanganan" class="col-sm-2 col-form-label">Tugas Penanganan <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" name="tugas_penanganan" id="tugas_penanganan" class="form-control" placeholder="Tugas Penanganan" value="{{ old('tugas_penanganan') }}">
              @error('tugas_penanganan')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="pelanggaran" class="col-sm-2 col-form-label">Pelanggaran <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" name="pelanggaran" id="pelanggaran" class="form-control" placeholder="Pelanggaran" value="{{ old('pelanggaran') }}">
              @error('pelanggaran')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Masukan Keterangan" value="{{ old('keterangan') }}">
              @error('keterangan')
                <div class="text-danger">{{ $message }}</div>
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
