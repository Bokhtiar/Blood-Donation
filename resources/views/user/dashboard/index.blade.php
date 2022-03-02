@extends('layouts.user.app')
@section('user_content')

    <section class="container">
        <div class="card my-5">
            <div class="card-header">
                <p class="card-title h3" style="background-color: red; color: white; padding: 10px;">{{Auth::user()->name}} Need Your Post Create</p>
            </div>
            <div class="card-body">
                <section class="form-group">
                    <form method="POST" action="">
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
                            <input placeholder="Number" type="number" name="number" class="form-control" id="">
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

@endsection
