@extends('master')

@section('title')
HomePage

@endsection

@section('content')
    Post a message: <br>
    <form action="/create" method="post">
        {{csrf_field()}}
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="content" placeholder="Content">
        <button type="submit">Submit</button>
    </form>
    <br>
    Recent Messages:
    
    <ul>
        @foreach($messages as $message)            
            <li>
                <strong>{{$message->title}}</strong>
                <br>
                {{$message->content}}
                
                <br>
                {{$message->created_at->diffForHumans()}}
                <br>
                <a href="/message/{{$message->id}}">View</a>

          </lib>
            
            
        @endforeach
    </ul>

@endsection