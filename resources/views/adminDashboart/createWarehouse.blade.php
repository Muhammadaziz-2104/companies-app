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
                   <h1>Massage qoldirish</h1>
                   <form method="post" action="{{route('companies.store')}}">
                       @csrf
                       <div class="mb-3">
                           <label for="name" class="form-label">Name</label>
                           <input type="text" class="form-control" value="{{old('name')}}" id="name" name="name">
                       </div>
                       <div class="mb-3">
                           <label for="status" class="form-label">Status</label>
                           <select name="status" id="status" class="form-select">
                               @foreach($companies as $key => $company )
                                   <option value="{{$company}}">{{$company->name}}</option>
                               @endforeach
{{--                               <option value="active">active</option>--}}
{{--                               <option value="inactive">inactive</option>--}}
                           </select>

                       </div>
{{--                       <div class="mb-3">--}}
{{--                           <label for="adress" class="form-label">Company</label>--}}
{{--                           <input type="text" class="form-control" value="{{old('adress')}}" id="adress" name="adress">--}}
{{--                       </div>--}}
                       <div class="mb-3">
                           <label for="massage" class="form-label">Massage</label>
                           <textarea  cols="20" rows="10" class="form-control" id="massage" name="phone" type="text"></textarea>
{{--                            <textarea name="massage" id="massage" cols="120" rows="10"></textarea>--}}
                       </div>


                       <button type="submit" class="btn btn-primary">Submit</button>

                   </form>
           </div>
       </div>
@endsection
