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
        <h1 class="bg-teal-500 p-3 text-black font-bold">Form Tambah Peraturan</h1>
        <a href="{{ route('peraturan.index') }}" class="btn btn-outline-secondary">Back</a>
      </div>
      <div class="card-body">
        <form action="{{ route('peraturan.store') }}" method="POST">
          @csrf

          <div class="mb-3 row">
            <label for="kode" class="col-sm-2 col-form-label">Kode <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" name="kode" id="kode" class="form-control" placeholder="Masukan kode" value="{{ old('kode') }}">
              @error('kode')
                
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="jenis_pelanggaran" class="col-sm-2 col-form-label">Jenis Pelanggaran <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" name="jenis_pelanggaran" id="jenis_pelanggaran" class="form-control" placeholder="Masukan Jenis Pelanggaran" value="{{ old('jenis_pelanggaran') }}">
              @error('jenis_pelanggan')

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
