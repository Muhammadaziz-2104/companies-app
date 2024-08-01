@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 border">
                <div class="row">
                    <h1>Users</h1>
                    @foreach($users as $user)
                        <div class="col m-1">
                            <div class="card " style="width: 18rem;">
                                <div class="card-body ">
                                    <h5 class="card-title">
                                        <a href="#">{{$user->name}}</a>
                                    </h5>
                                    <h5 class="card-title">{{$user->email}}</h5>
{{--                                    <h6 class="card-subtitle mb-2 text-muted">{{$user->text}}</h6>--}}
                                </div>
                            </div>
                            {{--                   <h3>usr_id:{{$user->user_id}}</h3><br>--}}
                            {{--                   <h3>Title:{{$user->title}}</h3><br>--}}
                            {{--                   <h3>Text:{{$user->text}}</h3><br>--}}
                        </div>
                    @endforeach

                </div>

            </div>
            <div class="col-4 border">

            </div>
        </div>
    </div>
@endsection
