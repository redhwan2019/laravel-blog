@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary btn-lg">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img src="/storage/coverImages/{{$post->cover_image}}" alt="NO Image" style="width:100%" srcset="">
    <br>
    <br>
    <div>
        {!!$post->body!!}
    </div>
    
    <hr>
    <small>Created on {{$post->created_at}} by {{$post->user['name']}}</small>
    <hr>

     
    @if (!Auth::guest())
         @if (Auth::user()->id == $post->userid)
            <table>
                <tr>
                    <td>
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-default ">Edit</a>
                    </td>
                
                <td><form  method="POST" action="{{route('posts.destroy',$post->id)}}">
                @method('DELETE')
                @csrf
                <input type="submit" class="btn btn-danger" value="Delete">
                </form></td>
            </tr>
        </table>
        @endif
    @endif
@endsection