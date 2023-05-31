@extends('layouts.base')
@section('title','Single page item show with this one here')
@section('page')
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 mt-5">
            <div class="card" style="width: 18rem;">
                <div class="card-body ">
                  <h5 class="card-title text-center">Profile</h5>
                  <hr>
                  <h6 class="card-subtitle mb-2 text-muted">{{$post->name}}</h6>
                  <hr>
                  <p class="card-text text-justify">{{$post->body}}</p>
                  <div class="row">
                    <a href="{{route('home')}}" class="card-link btn btn-success">Home</a>
                  <a href="{{route('view')}}" class="card-link btn btn-primary ml-auto">View</a>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
