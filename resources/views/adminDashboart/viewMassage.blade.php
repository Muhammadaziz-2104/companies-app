@extends('adminDashboart.amain')
@section('acontent')
    <div class="body-wrapper">
        <div class="row">
            <div class="col">
                <table class="table table-striped border border-dark mt-2 mb-2">
                    <tr>
                        <th>Nomi</th>
                        <td>{{$massage->name}}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{$massage->text}}</td>
                    </tr>
                    <tr>
                        <th>Resident</th>
{{--                        {{$company}}--}}
                        @foreach($company as $item)
                                <td >
                                    <a href="{{route('companies.show',['company'=>$item->id])}}">
                                    {{$item->name}}</td>
                                </a>
                        @endforeach
                    </tr>
                </table>
            </div>
        </div>
    </div>

@endsection
