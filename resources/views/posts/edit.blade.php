@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
<form method="POST" action="{{route('posts.update',$post->id)}}" enctype="multipart/form-data">
        <div class="form-group">
            @csrf            
            @method('PUT')
            <label for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Title" value="{{$post->title}}"/>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea id="editor" class="form-control" name="body" cols="30" rows="10" placeholder="Body Text">{{$post->body}}</textarea>
        </div>

        <div class="form-group">
            <input type="file" name="cover_image"  id="">
         </div>
        <div class="form-group">
            <img src="/storage/coverImages/{{$post->cover_image}}" alt="No image!!" style="width:20%" srcset="" >
         </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
 </form>
@endsection