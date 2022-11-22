@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-10 mx-auto">
        <div class="me-4 mb-2">
            <a href="{{route('posts.create')}}" class="btn btn-primary text-white">Create Post</a>
        </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td>{{$post->title}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm text-white mx-1" href="{{route('posts.update', $post->id)}}">Edit</a>
                                <form action="{{route('posts.destroy',$post->id)}}" method="post" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm text-white mx-1" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>  
        </div>
    </div>
</div>

@endsection