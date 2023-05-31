@extends('layouts.base')
@section('title','welcome to Home of dhaka college')
@section('page')
<div class="card text-center my-5">
    <div class="card-header">
      Application Here
    </div>
    <div class="card-body">
      <h5 class="card-title font-weight-bolder">Dhaka College, Dhaka</h5>
      <p class="card-text px-5">Dhaka College one of the oldest educational institutions of Bangladesh starting as Dhaka Government School on 15 July 1835. which is affiliated with <b>University of Dhaka</b> It offers higher secondary education. It has Honours and Masters programs as well which are affiliated to the <b>University of Dhaka</b></p>
      <a href="{{route('form')}}" class="btn btn-primary">Apply Now</a>
    </div>
    <div class="card-footer text-muted">
        Power by <b><i>Dhaka College</i></b>
    </div>
  </div>
  <hr>
@endsection
