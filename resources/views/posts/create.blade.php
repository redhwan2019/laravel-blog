@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <form method="post" enctype="multipart/form-data" action="{{ route('posts.store') }}">
        <div class="form-group">
            @csrf            
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title"/>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea id="editor" class="form-control" name="body" cols="30" rows="10" placeholder="Body Text"></textarea>
        </div>
        <div class="form-group">
           <input type="file" name="cover_image"  id="">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
 </form>
@endsection