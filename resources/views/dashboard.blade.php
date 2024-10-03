@extends('layout.layout') <!-- Make sure this points to the correct layout file -->

@section('content')
<div class="container">
    <div class="row">
        @foreach ($posts as $post)
            <div class="card mb-4">
                <div class="card-body">
                    <p class="fs-6 fw-light text-muted">
                        {{ $post->content }}
                    </p>
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1"></span> {{ $post->likes }} </a>
                        </div>
                        <div>
                            <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span> {{ $post->created_at->format('d-m-Y') }} </span>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="mb-3">
                            <textarea class="fs-6 form-control" rows="1"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-primary btn-sm">Post Comment</button>
                        </div>
                        <hr>
                        <div class="d-flex align-items-start">
                            @foreach ($users as $user)
                                <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                                    src="https://api.dicebear.com/6.x/fun-emoji/svg?seed={{ urlencode($user['name']) }}" alt="{{ $user['name'] }} Avatar">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="">{{ $user['name'] }}</h6>
                                        <small class="fs-6 fw-light text-muted">3 hours ago</small>
                                    </div>
                                    <p class="fs-6 mt-3 fw-light">
                                        and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                                        Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of
                                        ethics, very popular during the Renaissance.
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
