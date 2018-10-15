@extends('layouts.app')
@section('content')
<div class = "jumbotron text-center">
<h1>{{$title}}</h1>
<p>To Blog = To Connect,To Share,To Inspire & To Breathe.</p>
<p><a class = "btn btn-primary btn-lg" href="/login" role="button">Login</a>     <a class = "btn btn-success btn-lg" href="/register" role="button">Register</a></p>
</div>
@endsection    
