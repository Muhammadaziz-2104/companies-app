@extends('adminDashboart.amain')
@section('title','Buttons')

@section('acontent')
    <div class="body-wrapper">
    <div class="row">
        <div class="col">
            <table class="table table-striped border border-dark mt-2 mb-2">
                <tr>
                    <th>Name</th>
                    <td>{{$company->name}}</td>
                </tr>
                <tr>
                    <th>Adress</th>
                    <td>{{$company->adress}}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{$company->phone}}</td>
                </tr>
                <tr>
                    <th>Resident</th>
                    <td>{{$company->resident}}</td>
                </tr>
                <tr>
                    <th>Resident</th>
                    <td>{{$company->satus}}</td>
                </tr>
                <tr>
                    <th>Massage</th>
{{--                    {{\App\Models\Massage::find()}}--}}
                    @foreach($massages as $massage)
                     @if($massage->company == $company->id)
                         <td>
                            <a href="{{route('massage.show',['massage' => $massage->id])}}">
                                {{$massage->text}}
                            </a>
                         </td>
                     @endif
                    @endforeach

                </tr>
            </table>
        </div>
    </div>

    </div>
@endsection
