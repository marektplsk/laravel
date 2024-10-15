@extends('layout.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <h4>Edit Post</h4>

                <form action="{{ route('post.update', $post->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="content" class="form-label">Post Content</label>
                        <textarea class="form-control" id="content" name="content" rows="3">{{ $post->content }}</textarea>

                        @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Update Post</button>
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection