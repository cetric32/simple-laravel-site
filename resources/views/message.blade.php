@extends('master')

@section('title')
    Message {{$message->id}}
@endsection

@section('content')
    <h1>{{$message->title}}</h1>
    <p>
        {{$message->content}}
        <br>
        {{$message->created_at->diffForHumans()}}
    </p>

@endsection
