@extends('layout.layout')

@section('content')
<div class="container">
    <h1>Welcome, {{ auth()->user()->name }}!</h1>
    <p>Email: {{ auth()->user()->email }}</p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-dark">Logout</button>
    </form>
</div>
@endsection
