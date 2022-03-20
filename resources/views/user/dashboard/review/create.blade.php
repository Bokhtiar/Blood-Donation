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
            <h2 class="text-center">Review Create Section</h2>
        <form action="{{ url('user/review/store') }}" method="POST">
            @csrf
            <label for="">Review</label>
            <textarea name="review" id="" cols="10" rows="4" class="form-control" placeholder="Review"></textarea>
            <input type="submit" class="btn btn-sm btn-success my-2" value="Create Review" name="" id="">
        </form>
        </div>
    </section>
    </section>

@endsection
