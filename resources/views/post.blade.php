@extends('layouts.main')

@section('container')
    <article>
        <h2 class="mb-5">{{ $post->title }}</h2>

        <p>By. Nur'hikmah in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }} </a></p>

        {!! $post->body !!}
    </article>

    <a href="/blog">Back to Posts</a>
@endsection