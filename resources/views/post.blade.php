@extends('layouts.main')
@section('container')
<article class="mb-5 border-bottom pb-4">
    <h2>{{ $post->title }}</h2>
    <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
    <a href="/blog">back to blog</a>
</article>
@endsection
