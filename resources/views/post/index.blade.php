@extends('layouts.app')
@section('title','All Posts titles')

@section('content')
    <p>Posts page</p>
    <ul>
        @foreach ($posts as $post)
            <li><a href="/tweets/{{$post->id}}"> {{$post->title}}</a></li>
        @endforeach
    </ul>
@endsection
