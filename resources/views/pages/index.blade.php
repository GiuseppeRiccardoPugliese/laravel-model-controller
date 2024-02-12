@extends('layouts.main-layout')
@section('head')
    <title>laravel-model-controller</title>
@endsection
@section('content')
    @foreach ($movies as $movie)
        <div class="card m-1" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Title: {{ $movie['title'] }}</h5>
                <h5 class="card-title">Original title: {{ $movie['original_title'] }}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nationality: {{ $movie['nationality'] }}</li>
                <li class="list-group-item">Date: {{ $movie['date'] }}</li>
                <li class="list-group-item">Vote:{{ $movie['vote'] }}</li>
            </ul>
        </div>
    @endforeach
@endsection
