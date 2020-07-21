
@extends('layout')

@section('content')   

    <!-- slider 3 post terakhir -->
    <style>
    .slide {
    object-fit:cover;
    object-position: 30% 70%; 
    width: 100%;}
    </style>
    <nav class="nav justify-content-center bg-light">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach($artikel->take(3) as $slider)
        <div class="carousel-item @if($loop->first) active @endif ">
            <a href='/artikel/{{$slider->judul_artikel}}'><img class="slide" src="{{ $slider->url }}" class="d-block w-100" alt="{{ $slider->judul_artikel }}"  height=400px></a>
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    </nav>
    
    <!-- search form -->
    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand"></a>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </nav>
    

    <style>
    gambar {
    object-fit:cover;
    object-position: 50% 50%; 
    width: 30%;
    height:30%}
    </style>            
    <div class="container">      
        <div class="row row-cols-1 row-cols-md-3">
        @foreach ($artikel as $artikel)
        <a href='/artikel/{{ $artikel->judul_artikel }}'>
            <div class="col mb-4">
                <div class="card text-center">
                <img src="{{ $artikel->url }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $artikel->judul_artikel }}</h5>
                </div>
                </div>
            </div>
        </a>
        @endforeach
        </div>
    </div>

    @endsection