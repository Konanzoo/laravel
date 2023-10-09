@extends('layouts.main')
@section('content')
    @foreach($posts as $post)
        <div>
                {{ $post->title }}
                {{ $post->content }}
                {{ $post->likes }}
        </div>
    @endforeach
@endsection
