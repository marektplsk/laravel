@extends('layout.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <h4>Post Details</h4>
                <p>{{ $post->content }}</p>
                <p><strong>Likes:</strong> {{ $post->likes }}</p>
                <a href="{{ route('dashboard') }}" class="btn btn-secondary">Back to Dashboard</a>
            </div>
        </div>
    </div>
</div>
@endsection
