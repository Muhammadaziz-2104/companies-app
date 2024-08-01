@extends('adminDashboart.amain')
@section('acontent')
<div class="row">
    <div class="col">
        <table class="table">
            <tr>
                <th>Nomi</th>
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
        </table>
    </div>
</div>

@endsection
