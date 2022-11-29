@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-10 mx-auto bg-white">
            
            <form action="{{ route('posts.update', $post->id) }}" method="POST" class="p-4">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title )}}">
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="form-label">Description</label>
                    <div id="app">
                        <Editor
                            api-key = '0ug0na5lotmzb8hkj4c8d4t4uaoo87kgkeahwd1py7uot75r'
                            initial-value = "{{ $post->description }}"
                            name = 'description'
                            :init = "{
                                plugins: [
                                    'code table lists image',
                                ],
                                toolbar : 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | table | image',
                                menubar : false,
                                convert_urls: false,
                                images_upload_url: '/api/upload',
                            }"
                        />
                    </div>
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button class="btn btn-primary">update</button>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    

@endsection