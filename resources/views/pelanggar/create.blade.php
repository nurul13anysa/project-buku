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
            <label for="class" class="col-sm-2 col-form-label">Indentitas Siswa <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <select name="siswa_id" id="class" class="form-control">
                <option value="">Pilih Siswa</option>
                @foreach($siswas as $item)
                  <option value="{{ $item->id }}">{{ $item->nama_siswa . " - " . $item->class_id }}</option>
                @endforeach
              </select>
              @error('siswa_id')
                <span class="text-danger">{{ $message }}</span>
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
            <label for="class" class="col-sm-2 col-form-label">Kode pelanggaran-Point-Penanganan<span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <select name="kode_id" id="class" class="form-control">
                <option value="">Pilih Pelanggaran</option>
                @foreach($peraturans as $item)
                  <option value="{{ $item->id }}">{{ $item->kode . " - " . $item->point. " - " . $item->penanganan }}</option>
                @endforeach
              </select>
              @error('kode_id')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="class" class="col-sm-2 col-form-label">Nama Petugas<span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <select name="petugas_id" id="class" class="form-control">
                <option value="">Pilih Petugas</option>
                @foreach($petugas as $item)
                  <option value="{{ $item->id }}">{{ $item->nama_petugas }}</option>
                @endforeach
              </select>
              @error('petugas_id')
                <span class="text-danger">{{ $message }}</span>
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