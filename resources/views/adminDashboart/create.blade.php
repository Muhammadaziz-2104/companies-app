@extends('layouts.app')

@section('content')
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
            <h1>Company qo'shish</h1>
            <form method="post" action="{{route('companies.store')}}">
                @csrf
                @include('adminDashboart.formCompany')
                <div class="mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" name="photo" id="photo" class="form-control"><br>
                </div>
                    <button type="submit" class="btn btn-primary" >Submit</button>
            </form>
        </div>
    </div>
@endsection
