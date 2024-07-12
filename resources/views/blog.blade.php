@extends('layouts/main')



@section('container')
    @foreach ($blog as $blog)
        <article class="mb-5">
            <h2>{{ $blog['title'] }}</h2>
            <h5>By : {{ $blog['author'] }}</h5>
            <p>{{ $blog['body'] }}</p>
        </article>
    @endforeach
@endsection
