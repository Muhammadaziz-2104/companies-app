@extends('adminDashboart.amain')

@section('acontent')
    <div class="body-wrapper">

               <div class="col mt-5">
                   @if ($errors->any())
                       <div class="alert alert-danger">
                           <ul>
                               @foreach ($errors->all() as $error)
                                   <li>{{ $error }}</li>
                               @endforeach
                           </ul>
                       </div>
                   @endif
                   <h1>Company o'zgartirish</h1>
                   <form method="post" action="{{route('companies.update', ['company' => $company->id])}}">
                       @method('PUT')
                       @csrf
                       @include('adminDashboart.formCompany')
{{--                       <div class="mb-3">--}}
{{--                           <label for="name" class="form-label">Name</label>--}}
{{--                           <input type="text" class="form-control" value="{{$company->name}}" id="name" name="name">--}}
{{--                       </div>--}}
{{--                       <div class="mb-3">--}}
{{--                           <label for="adress" class="form-label">Adress</label>--}}
{{--                           <input type="text" class="form-control" value="{{$company->adress}}" id="adress" name="adress">--}}
{{--                       </div>--}}
{{--                       <div class="mb-3">--}}
{{--                           <label for="phone" class="form-label">Phone</label>--}}
{{--                           <input type="text" class="form-control" value="{{$company->phone}}" id="phone" name="phone">--}}
{{--                       </div>--}}
{{--                       <div class="mb-3">--}}
{{--                           <label for="resident" class="form-label">Resident</label>--}}
{{--                           <input type="number" min="0" max="1" class="form-control" value="{{$company->resident}}" id="resident" name="resident">--}}
{{--                       </div>--}}
{{--                       <div class="mb-3">--}}
{{--                           <label for="birthday" class="form-label">Birthday</label>--}}
{{--                           <input type="date" class="form-control" value="{{$company->birthday}}" id="birthday" name="birthday">--}}
{{--                       </div>--}}
{{--                       <div class="mb-3">--}}
{{--                           <label for="status" class="form-label">Status</label> n--}}
{{--                           <select name="status" id="status" class="form-select">--}}
{{--                               <option value="active" @if($company->satus=='active') selected @endif>active</option>--}}
{{--                               <option value="inactive" @if($company->satus=='inactive') selected @endif>inactive</option>--}}
{{--                           </select>--}}

{{--                       </div>--}}
                       <button type="submit" class="btn btn-primary">Submit</button>

                   </form>
           </div>
       </div>
@endsection
