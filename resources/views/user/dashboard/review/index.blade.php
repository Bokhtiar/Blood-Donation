@extends('layouts.user.app')
@section('user_content')
    <section class="container">
    <section class="row ">
        <div class="col-sm-12 col-md-3 col-lg-3 my-3">
        <ul class="list-group">
        <li class="list-group-item">{{Auth::user()->name}} Dashboard</li>
            <li class="list-group-item"><a class="text-dark" href="{{url('user/post/list')}}">Post Lists</a></li>
            <li class="list-group-item"><a class="text-dark" href="{{url('user/post/create')}}">Create Post</a></li>
            <li class="list-group-item"><a class="text-dark" href="{{url('user/review')}}">Review</a></li>
            <li class="list-group-item"><a class="text-dark" href="{{url('user/review/create')}}">Review Create</a></li>
            <li class="list-group-item"><a class="text-dark" href="{{url('contact')}}">Contact</a></li>
            <li class="list-group-item"><a class="text-dark" href="{{url('user/logout')}}">Logout</a></li>
        </ul>
        </div>

        <div class="col-sm-12 col-md-9 col-lg-9">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Index</th>
                    <th scope="col">Review</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reviews as $item)
                <tr>
                    <th scope="row">{{$loop->index + 1}}</th>
                    <td>{{$item->review}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </section>
    </section>

@endsection
