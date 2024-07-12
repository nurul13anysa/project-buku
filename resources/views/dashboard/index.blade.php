@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqk1w2/knoG80j58Qgp06080kWITnM+L5z10Q5XFzBC+plc5ta+d9tKsBkH0rPAjyoU+jHpQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container" style="margin-top: 2ch">
        <div class="row">

            <div class="col-md-15">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Dashboard</h2>
                        <small class="text-muted">Control panel</small>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <p class="card-text">Total Siswa</p>
                                        <a href="{{ route('siswa.index') }}" class="btn btn-light">More info <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card bg-success text-white">
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <p class="card-text">Total Petugas</p>
                                        <a href="{{ route('petugas.index') }}" class="btn btn-light">More info <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card bg-warning text-white">
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <p class="card-text">Total ClassRoom</p>
                                        <a href="{{ route('class_room.index') }}" class="btn btn-light">More info <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card bg-danger text-white">
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <p class="card-text">Total Peraturan</p>
                                        <a href="{{ route('peraturan.index') }}" class="btn btn-light">More info <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <div class="card bg-secondary text-white">
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <p class="card-text">Total Point</p>
                                        <a href="{{ route('point.index') }}" class="btn btn-light">More info <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card bg-info text-white">
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <p class="card-text">Total Pelanggar</p>
                                        <a href="{{ route('pelanggar.index') }}" class="btn btn-light">More info <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-pills card-header-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{ route('siswa.index') }}">Pensiun</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('siswa.index') }}">Pendidikan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('siswa.index') }}">Usia</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('siswa.index') }}">Donut</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('siswa.index') }}">Kehadiran Pegawai</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="card-title">Kehadiran & Pengelompokan Pegawai</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                        <button type="button" class="btn btn-primary">More info <i class="fas fa-arrow-right"></i></button>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title">Grafik Kehadiran Pegawai Tahun 2021</h5>
                                                <div class="dropdown float-right">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria

                                                   
@endsection