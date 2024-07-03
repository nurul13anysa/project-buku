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
    <div class="container mt-4">
        <h1 class="mb-4">{{ $title }}</h1>
        <div class="row">
            <!-- Announcements Section -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Recent Announcements</h5>
                    </div>
                    {{-- <div class="card-body">
                        <ul class="list-group">
                            <!-- Loop through announcements -->
                            @foreach($announcements as $announcement)
                                <li class="list-group-item">
                                    <strong>{{ $announcement->title }}</strong>
                                    <p>{{ $announcement->body }}</p>
                                    <small class="text-muted">{{ $announcement->created_at->diffForHumans() }}</small>
                                </li>
                            @endforeach
                        </ul> --}}
                    </div>
                </div>
            </div>

            <!-- Events Section -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">Upcoming Events</h5>
                    </div>
                    {{-- <div class="card-body">
                        <ul class="list-group">
                            <!-- Loop through events -->
                            @foreach($events as $event)
                                <li class="list-group-item">
                                    <strong>{{ $event->title }}</strong>
                                    <p>{{ $event->description }}</p>
                                    <small class="text-muted">{{ $event->date->format('d M Y') }}</small>
                                </li>
                            @endforeach
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Student Performance Section -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">Student Performance</h5>
                    </div>
                    {{-- <div class="card-body">
                        <!-- Example Performance Data -->
                        <ul class="list-group">
                            @foreach($performances as $performance)
                                <li class="list-group-item">
                                    <strong>{{ $performance->student_name }}</strong>
                                    <p>{{ $performance->subject }}: {{ $performance->grade }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div> --}}
                </div>
            </div>

            <!-- Quick Links Section -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-warning text-white">
                        <h5 class="mb-0">Quick Links</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="/students" class="list-group-item list-group-item-action">Manage Students</a>
                            <a href="/teachers" class="list-group-item list-group-item-action">Manage Teachers</a>
                            <a href="/classes" class="list-group-item list-group-item-action">Manage Classes</a>
                            <a href="/subjects" class="list-group-item list-group-item-action">Manage Subjects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>

@endsection
