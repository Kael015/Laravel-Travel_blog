@extends('layout')

@section('content')
<div class="text-center">
	<h1 class=text>Let's Start Traveling together</h1>
    <p class=text-secondary>Send us a message</p>
</div>	
	<br/>
	<br/>

<div class="container">
    <form method="post" action="/contact/store">
    @csrf
        <div class="col form-group">
            <input type="name" class="form-control" id="nama" placeholder="Name">
        </div>
        <div class="col form-group">
            <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="col form-group">
            <select class="form-control" id="topic" >
            <option> </option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            </select>
        </div>
        <div class="col form-group">
            <textarea class="form-control" id="message" rows="3"></textarea>
        <input class="btn btn-primary btn-lg" type="submit" value="Send">
        </div>
    </form>
</div>
<div class="text-center">______________________________________________________________________</div>
@endsection