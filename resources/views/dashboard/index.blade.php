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
    <img class="school-image" src="image/dashboard.jpg" alt="SMKN 1 Katapang" style="width: 100%; max-width: 1366px; margin-top: 3ch;">
    <div class="container" style="margin-top: 2ch">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Dashboard</h2>
                        <small class="text-muted">Control panel</small>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card bg-primary text-white">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="text-center">
                                            <h3>{{ $totalSiswa }}</h3>
                                            <h5 class="card-title">Total Siswa</h5>
                                            <p class="card-text"></p>
                                            <a href="{{ route('siswa.index') }}" class="btn btn-light">More info <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                        <img class="school-image mr-3" src="image/robot.png" alt="SMKN 1 Katapang" style="max-width: 90px;">
                                    </div>
                                </div>  
                            </div>
                            <div class="col-md-3">
                                <div class="card bg-success text-white">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="text-center">
                                        <h3>{{ $totalPetugas }}</h3>
                                        <h5 class="card-title">Total Petugas</h5>
                                        <p class="card-text"></p>
                                        <a href="{{ route('petugas.index') }}" class="btn btn-light">More info <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                        <img class="school-image mr-3" src="image/robot.png" alt="SMKN 1 Katapang" style="max-width: 90px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card bg-warning text-white">
                                    <div class="card-body">
                                        <h3>{{ $totalClassRoom }}</h3>
                                        <h5 class="card-title">Total ClassRoom</h5>
                                        <p class="card-text"></p>
                                        <a href="{{ route('class_room.index') }}" class="btn btn-light">More info <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card bg-danger text-white">
                                    <div class="card-body">
                                        <h3>{{ $totalPeraturan }}</h3>
                                        <h5 class="card-title">Total Peraturan</h5>
                                        <p class="card-text"></p>
                                        <a href="{{ route('peraturan.index') }}" class="btn btn-light">More info <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="margin-top: 2ch">
                                <div class="card bg-info text-white">
                                    <div class="card-body">
                                        <h3>{{ $totalPelanggar }}</h3>
                                        <h5 class="card-title">Total Pelanggar</h5>
                                        <p class="card-text"></p>
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
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="card-title">Deskripsi Aplikasi Discipline Book</h5>
                                        <p class="card-text">
                                            Discipline Book adalah sebuah aplikasi yang dikembangkan untuk memudahkan SMKN 1 Katapang dalam mencatat dan mengelola data ketertiban siswa. Aplikasi ini memungkinkan pengguna untuk melakukan pencatatan disiplin siswa secara efisien dan terstruktur..............
                                        </p>
                                        <a href="{{ route('kami.index') }}" class="btn btn-primary">More info <i class="fas fa-arrow-right"></i></a>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card">
                                                <img class="school-image" src="image/smkn1katapang2.jpg" alt="SMKN 1 Katapang">
                                                <div class="dropdown float-right">
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
