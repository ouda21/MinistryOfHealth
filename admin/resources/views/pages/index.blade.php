@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to MOH ADMIN!</h1>
        @if (Auth::guest())
        <p>MOH ADMIN</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        @endif
    </div>
@endsection
