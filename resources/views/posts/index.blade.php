@extends('layouts.app')


@section('content')
    <h1>Posts</h1>
    @if ($posts->count() > 0)

    @foreach ($posts as $post)
        
      
        <div class="well">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                <a href="/posts/{{$post->id}}"><img src="/storage/coverImages/{{$post->cover_image}}" alt="NO Image" style="width:100%" srcset=""></a>
                </div>
                <div class="col-md-8 col-sm-8">

                    <a href="posts/{{$post->id}}">
                        <h3>{{$post->title}}</h3>
                    </a>
                     <small>Created on {{$post->created_at}} by {{$post->user['name']}}</small>
                </div>

            </div>
        </div>
        @endforeach
        
    @else
        <p>No posts found</p>
    @endif
      
@endsection