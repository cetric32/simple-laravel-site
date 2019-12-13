@extends('master')

@section('title')
HomePage

@endsection

@section('content')
    Post a message: <br>
    <form class="form-group" action="/create" method="post">
        {{csrf_field()}}
        <input type="text" class="form-control" name="title" placeholder="Title" required>
        <input type="text" class="form-control" name="content" placeholder="Content" required>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    <br>
    Recent Messages:
    <div>
            {{$messages->links()}}
    </div>

            <ul class="list-group">
                    @foreach($messages as $message)
                        <li class="list-group-item">
                            <strong>{{$message->title}}</strong>
                            <br>
                            {{$message->content}}

                            <br>
                            {{$message->created_at->diffForHumans()}}
                            <br>
                            <a class="" href="/message/{{$message->id}}">View</a>
                            <a href="/message/delete/{{$message->id}}">Delete</a>
                        </li>

                    @endforeach
                </ul>
                <div>
                        {{$messages->links()}}
                </div>

@endsection
