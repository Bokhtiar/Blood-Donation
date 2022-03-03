@extends('layouts.user.app')
@section('user_content')
    <section class="container">
    <section class="row ">
        <div class="col-sm-12 col-md-3 col-lg-3 my-3">
        <ul class="list-group">
            <li class="list-group-item">{{Auth::user()->name}} Dashboard</li>
            <li class="list-group-item"><a class="text-dark" href="{{url('user/post/list')}}">Post Lists</a></li>
            <li class="list-group-item"><a class="text-dark" href="{{url('user/post/create')}}">Create Post</a></li>
            <li class="list-group-item"><a class="text-dark" href="{{url('contact')}}">Contact</a></li>
            <li class="list-group-item"><a class="text-dark" href="{{url('user/logout')}}">Logout</a></li>
        </ul>
        </div>

        <div class="col-sm-12 col-md-9 col-lg-9">
        <section class="">
            <div class="card my-5">
                <div class="card-header">
                    <p class="card-title h3" style="background-color: red; color: white; padding: 10px;">{{Auth::user()->name}} Need Your Post Create</p>
                </div>
                <div class="card-body">
                    <section class="form-group">
                        <form method="POST" action="{{url('user/post/store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="">Title</label>
                                <input class="form-control" type="text" name="title" placeholder="Enter Your Title" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea placeholder="Description" class="form-control" name="des" id="" cols="10" rows="3"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label for=""> Location</label>
                                    <input placeholder="Locations" class="form-control" type="text" name="location" id="">
                                </div>
                            <div class="col-sm-6">
                                <label for="">Phone Number</label>
                                <input placeholder="Phone Number" type="number" name="phone" class="form-control" id="">
                            </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label for=""> Date</label>
                                    <input class="form-control" type="date" name="date" id="">
                                </div>
                            <div class="col-sm-6">
                                <label for="">Time</label>
                                <input type="time" name="time" class="form-control" id="">
                            </div>

                            </div>
                            <div class="form-group mt-3 ">
                                <input type="submit" class="btn btn-primary" value="Create Post" name="" id="">
                            </div>

                        </form>
                    </section>
                </div>
            </div>
        </section>
        </div>
    </section>
    </section>

@endsection
