@extends('layout')

@section('content') 

<div class="container">
<h1> Write some article</h1>
    <form method="post" action="/blog/store">
    {{csrf_field()}}
        <div class="col form-group">
            <input type="name" class="form-control" id="judul_artikel" placeholder="Name">
        </div>
        <div class="col form-group">
            <textarea class="form-control" id="isi_artikel" rows="3"></textarea>
            <br/>
        <div class="form-group">
            <label for="exampleFormControlFile1">Upload Image</label>
            <input type="file" class="form-control-file" id="file">
        </div>
        <input class="btn btn-primary btn-lg" type="submit" value="Send">
        </div>
    </form>
</div>

@endsection