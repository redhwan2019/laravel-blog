@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>
                        Your Blog Posts
                    </h3>

                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                       @if (count($posts) > 0)
                       @foreach ($posts as $post)
                        <tr>
                           <td>{{$post->title}}</td>
                        <td>
                            <a href="posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form  method="POST" action="{{route('posts.destroy',$post->id)}}">
                                @method('DELETE')
                                @csrf
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                            </td>
                        </tr>
                       @endforeach
                       @else
                       <p>You have no posts.</p>
                       @endif
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
