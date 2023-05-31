@extends('layouts.base')
@section('title', 'welcome to view of this univeristy')
@section('page')
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <div class="row text-center">
        <div class="col text-center h1 font-weight-bolder mt-4">
            Student List
            <hr>
        </div>
    </div>
        @if (Session::has('delete_item'))
            <div class="alert alert-danger">
                {{Session::get('delete_item')}}
            </div>
        @endif
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($post as $post)
                <tr>
                    <th>{{ $post->id }}</th>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->body }}</td>
                    <td>
                        <a class="btn btn-primary" href="/single/view/{{$post->id}}"> Details</a>
                        <a class="btn btn-danger" href="/delete-post/{{$post->id}}"> Delete</a>
                        <a class="btn btn-success" href="/edit/post/{{$post->id}}"> Edit</a>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection
