@extends('layouts.base')
@section('title','Welcome to Application form page of dhaka collge here')
@section('page')
    <div class="mt-5 text-center h2">
        Dhaka College, Dhaka
        <hr>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">

            <form action="{{route('inserted')}}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header text-center">Application Form</div>
                    @if (Session::has('inseted'))
                    <div class="alert alert-danger">
                        {{Session::get('inseted')}}
                    </div>
                    @endif
                  <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="name">Description</label>
                        <textarea name="body" class="form-control" id="body" cols="30" rows="5"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                  </div>
                </div>
            </form>
        </div>
    </div>
@endsection
