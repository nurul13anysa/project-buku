// resources/views/petugas/create.blade.php

@extends('layouts.app')

@section('content')
<div class="container py-3">
  <div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h1 class="bg-teal-500 p-3 text-black font-bold">Form Tambah Petugas</h1>
      <a href="{{ route('petugas.index') }}" class="btn btn-outline-secondary">Back</a>
    </div>
    <div class="card-body">
      <form action="{{ route('petugas.store') }}" method="POST">
        @csrf
        <div class="mb-3 row">
          <label for="nama_petugas" class="col-sm-2 col-form-label">Nama Petugas <span class="text-danger">*</span></label>
          <div class="col-sm-10">
            <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" placeholder="Masukan Nama Petugas" value="{{ old('nama_petugas') }}">
            @error('nama_petugas')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="mb-3 row">
          <label for="username" class="col-sm-2 col-form-label">Username <span class="text-danger">*</span></label>
          <div class="col-sm-10">
            <input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username" value="{{ old('username') }}">
            @error('username')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="mb-3 row">
          <label for="email" class="col-sm-2 col-form-label">Email <span class="text-danger">*</span></label>
          <div class="col-sm-10">
            <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email" value="{{ old('email') }}">
            @error('email')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="mb-3 row">
          <label for="password" class="col-sm-2 col-form-label">Password <span class="text-danger">*</span></label>
          <div class="col-sm-10">
            <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password" value="{{ old('password') }}">
            @error('password')
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
@endsection
