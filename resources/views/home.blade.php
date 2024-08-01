@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 border">
           <div class="row">
{{--               Auth User: {{$user}}--}}
               <h1>Kitoblar</h1>
               @foreach($books as $book)
                   <a href="{{route('books.show',['book'=>$book->id])}}"  class="col m-1">
{{--                       efefef--}}
                       <div>
                           <div class="card " style="width: 18rem;">
                               <div class="card-body ">
                                   <h5 class="card-title">
                                       User: {{$book->user->name}}
{{--                                       <a href="#"></a>--}}

                                   </h5>
                                   <h5 class="card-title">Book title:{{$book->title}}</h5>
                                   <h6 class="card-subtitle mb-2 text-muted">Book name: {{$book->text}}</h6>

                               </div>
                           </div>
                       </div>
                   </a>
              @endforeach

           </div>

        </div>
        <div class="col-4 border">

        </div>
    </div>
</div>
@endsection
