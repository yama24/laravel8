@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Post Categories</h1>
    <ul>
        @foreach ($categories as $category)
            <li>
                <a href="/categories/{{ $category->slug }}">
                    <h2>{{ $category->name }}</h2>
                </a>
            </li>
        @endforeach
    </ul>
@endsection
