@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-10 mx-auto bg-white">
            
            <form action="{{ route('posts.create') }}" method="POST" class="p-4">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                        
                </div>
                <div class="mb-5">
                    <label class="form-label">Description</label>
                    <div id="app">
                        <Editor
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
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')




@endsection