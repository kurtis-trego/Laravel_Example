@extends('layouts.app')

@section('content')
    <a href="/example/public/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>

    <div>
        {{$post->body}}
    </div>
@endsection

