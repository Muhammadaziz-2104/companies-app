@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 border">
                <div class="row">
                    <h1>Kommentlar</h1>
                    @foreach($comments as $comment)
                        <div class="col m-1">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Book name: <a href="#">{{$comment->book->title}}</a>
                                    </h5>
                                    <h5 class="card-title">
                                        User name: <a href="#">{{$comment->user->name}}</a>
                                    </h5>
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        Text: <a href="#">{{$comment->text}}</a>
                                    </h6>
                                </div>
                            </div>
                            {{--                   <h3>usr_id:{{$comment->user_id}}</h3><br>--}}
                            {{--                   <h3>Title:{{$comment->title}}</h3><br>--}}
                            {{--                   <h3>Text:{{$comment->text}}</h3><br>--}}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-4 border">

            </div>
        </div>
    </div>
@endsection
