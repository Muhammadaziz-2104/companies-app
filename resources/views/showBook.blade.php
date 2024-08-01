@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 border">
                <div class="row">
{{--                    <h1>{{$book}}</h1>--}}
{{--                    @foreach($books as $book)--}}
{{--                        <a href="#"  class="col m-1">--}}
{{--                            --}}{{--                       efefef--}}
                    <div class="card mb-3">
{{--                        <img src="..." class="card-img-top" alt="...">--}}
                        <div class="card-body">
                            <h5 class="card-title">Book title: {{$book->title}}</h5>
                            <p class="card-text">Book name: {{$book->text}}</p>
                                @foreach($book->comments as $comment)
                                    <p class="card-text">
                                        <small class="text-muted">
                                            {{$comment->text}}
                                        </small>
                                    </p>
                                @endforeach

                                <div class="col-auto">
                                    <label for="staticEmail2" class="visually-hidden">{{$book->user->email}}</label>
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="{{$book->user->email}}">
                                </div>
                            <form class="row g-3" method="post" action="{{route('comments.store')}}">
                                @csrf
                                @method('POST')
                                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                                <div class="mb-3 d-none">
                                    <label for="name" class="form-label">book</label>
                                    <input type="text" class="form-control" id="name" name="book_id" value="{{$book->id}}">
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="text">
                                </div>

                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-3" >Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
{{--                            <div>--}}
{{--                                <div class="card " style="width: 18rem;">--}}
{{--                                    <div class="card-body ">--}}
{{--                                        <h5 class="card-title">--}}
{{--                                            User: {{$book->user->name}}--}}
{{--                                            <a href="#"></a>--}}
{{--                                        </h5>--}}
{{--                                        <h5 class="card-title">Book title:{{$book->title}}</h5>--}}
{{--                                        <h6 class="card-subtitle mb-2 text-muted">Book name: {{$book->text}}</h6>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    @endforeach--}}

                </div>

            </div>
            <div class="col-4 border">

            </div>
        </div>
    </div>
@endsection
