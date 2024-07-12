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
        <h1 class="bg-teal-500 p-3 text-black font-bold">Form Tambah Siswa </h1>
        <a href="{{ route('siswa.index') }}" class="btn btn-outline-secondary">Back</a>
      </div>
      <div class="card-body">
        <form action="{{ route('siswa.store') }}" method="POST">
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
            <label for="username" class="col-sm-2 col-form-label">Username <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username" value="{{ old('username') }}">
              @error('username')
                
              @enderror
            </div>
          </div>
          <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" name="email" id="email" class="form-control" placeholder="Masukan Email" value="{{ old('email') }}">
              @error('email')
                
              @enderror
            </div>
          </div>
          <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">Password <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password" value="{{ old('password') }}">
              @error('password')
                
              @enderror
            </div>
          </div>
           <div class="mb-3 row">
            <label for="class" class="col-sm-2 col-form-label">Class <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <select name="class_id" id="class" class="form-control">
                <option value="">Pilih Kelas</option>
                @foreach($classrooms as $classroom)
                  <option value="{{ $classroom->id }}">{{ $classroom->nama_kelas . " - " . $classroom->nama_jurusan }}</option>
                @endforeach
              </select>
              @error('class_id')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="mb-3 row">
            <label for="gender" class="col-sm-2 col-form-label">Gender <span class="text-danger">*</span></label>
            <div class="col-sm-10">
                <select name="gender" id="gender" class="form-control" required>
                    <option value="" disabled selected>Pilih Gender</option>
                    <option value="l" {{ old('gender') == '1' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="0" {{ old('gender') == '0' ? 'selected' : '' }}>Perempuan</option>
                </select>
                @error('gender')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
          <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" value="{{ old('alamat') }}">
              @error('alamat')
                
              @enderror
            </div>
          </div>
          <div class="mb-3 row">
            <label for="no_telpon" class="col-sm-2 col-form-label">No Telpon <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" name="no_telpon" id="no_telpon" class="form-control" placeholder="Masukan No Telpon" value="{{ old('no_telpon') }}">
              @error('no_telpon')
                
              @enderror
            </div>
          </div>
          <div class="mb-3 row">
            <label for="no_kendaraan" class="col-sm-2 col-form-label">No Kendaraan <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" name="no_kendaraan" id="no_kendaraan" class="form-control" placeholder="Masukan No Kendaraan" value="{{ old('no_kendaraan') }}">
              @error('no_kendaraan')
                
              @enderror
            </div>
          </div>
          <div class="mb-3 row">
            <label for="nis" class="col-sm-2 col-form-label">NIS <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" name="nis" id="nis" class="form-control" placeholder="Masukan NIS" value="{{ old('nis') }}">
              @error('nis')
                
              @enderror
            </div>
          </div>
          <div class="mb-3 row">
            <label for="nisn" class="col-sm-2 col-form-label">NISN <span class="text-danger">*</span></label>
            <div class="col-sm-10">
              <input type="text" name="nisn" id="nisn" class="form-control" placeholder="Masukan NISN" value="{{ old('nisn') }}">
              @error('nisn')
                
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
