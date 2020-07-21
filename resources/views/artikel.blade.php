@extends('layout')

@section('content') 

<div class="container">
<style>
        gambar {
        object-fit:cover;
        object-position: 30% 70%; 
        width: 100%;}
</style>

<img class="gambar" src="{{ $artikel->url }}" height=400px>
        <h1 class=text-danger>{{ $artikel->judul_artikel }}</h1>
        <p>{{ $artikel->isi_artikel }}</p>

        <br/>
        <br/>
        <p class=small-text>posted by :</p>
</div>
@endsection