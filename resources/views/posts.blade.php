@extends('layouts.main')

@section('container')
<h1>Halaman Blog Posts</h1>
    @foreach ($posts as $post)
     
        <article class="mb-3">
            <h2>
                <a href="/posts/{{ $post->slug }}/{{$post->id}}">{{ $post->title }}</a>
            </h2>
            <h4>{{ \Illuminate\Support\Str::limit($post->body, 100, $end='...')  }}</h4>
        </article>
    @endforeach

@endsection