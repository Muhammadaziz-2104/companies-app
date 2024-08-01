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
            <form method="post" action="{{route('massage.store')}}">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" value="{{old('name')}}" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="company" class="form-label">Status</label>
                    <select name="company" id="company" class="form-select">
                        @foreach($companies as $key => $company )
                            <option value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Massage</label>
                    <textarea  cols="20" rows="10" class="form-control" id="text" name="text" type="text"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>
@endsection
