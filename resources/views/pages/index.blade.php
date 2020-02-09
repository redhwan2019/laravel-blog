@extends('layouts.app')
@section('content')
    
<div class="jumbotron text-center">
    <h1>Welcome to My APP</h1>
<p>{{$title}}</p>
<p>This is Main page</p>
<p>
     <a class="btn btn-primary btn-lg " href="/login">Login</a>
     <a class="btn btn-successqi btn-lg " href="/login">Register</a>
</p>
</div>
@endsection
