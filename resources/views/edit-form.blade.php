@extends('layouts.base')
@section('title','Welcome to Application form page of dhaka collge here')
@section('page')
    <div class="mt-5 text-center h2">
        Dhaka College, Dhaka
        <hr>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            @if (Session::has('updated_successfully'))
            <span class="alert alert-danger">
                {{Session::get('updated_successfully')}}
            </span>
            @endif
            <form action="{{route('Update.item')}}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header text-center">Application Form Edit</div>
                  <div class="card-body">
                    <input type="hidden" name="id" value="{{$post->id}}">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{$post->name}}" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="name">Description</label>
                        <textarea name="body" class="form-control" id="body" cols="30" rows="5">{{$post->body}}</textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                  </div>
                </div>
            </form>
        </div>
    </div>
@endsection
