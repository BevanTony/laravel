@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default"> Go back </a>
    <h1>{{$post->title}}</h1>
    
    <div>
        {{$post->body}}
    </div>
    <small>written on {{$post->created_at}}</small>
@endsection
