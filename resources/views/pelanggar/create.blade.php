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
        <h1 class="bg-teal-500 p-3 text-black font-bold">Form Tambah Pelanggar</h1>
        <a href="{{ route('pelanggar.index') }}" class="btn btn-outline-secondary">Back</a>
      </div>
      <div class="card-body">
        <form action="{{ route('pelanggar.store') }}" method="POST">
          @csrf


          <div class="mb-3 row">
            <label for="nama_siswa" class="col-sm-2 col-form-label">Nama Siswa <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" placeholder="Masukan Nama Siswa" value="{{ old('nama_siswa') }}">
              @error('nama_siswa')

              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="Masukan Tanggal" value="{{ old('tanggal') }}">
              @error('tanggal')

              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="class" class="col-sm-2 col-form-label">Class <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" name="class" id="class" class="form-control" placeholder="Masukan Class" value="{{ old('class') }}">
              @error('class')

              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="kode_pelanggaran" class="col-sm-2 col-form-label">Kode Pelanggaran <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" name="kode_pelanggaran" id="kode_pelanggaran" class="form-control" placeholder="Masukan Kode Pelanggaran" value="{{ old('kode_pelanggaran') }}">
              @error('kode_pelanggaran')

              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="point" class="col-sm-2 col-form-label">Point <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" name="point" id="point" class="form-control" placeholder="Masukan Point" value="{{ old('point') }}">
              @error('point')

              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="penanganan" class="col-sm-2 col-form-label">Penanganan <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" name="penanganan" id="penanganan" class="form-control" placeholder="Masukan Penanganan" value="{{ old('penanganan') }}">
              @error('penanganan')

              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="nama_petugas" class="col-sm-2 col-form-label">Nama Petugas <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" placeholder="Masukan Nama Petugas" value="{{ old('nama_petugas') }}">
              @error('nama_petugas')

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
