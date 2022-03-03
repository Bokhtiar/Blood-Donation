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
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Index</th>
                    <th scope="col">Title</th>
                    <th scope="col">Location</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach(App\Models\Post::where('user_id', Auth::id())->get() as $item)
                <tr>
                <th scope="row">{{$loop->index + 1}}</th>
                <td>{{$item->title}}</td>
                <td>{{$item->location}}</td>
                <td>{{$item->phone}}</td>
                <td>
                    @if($item->status == 0)
                    <a href="" class="btn btn-sm btn-danger">Pending</a>
                    @else
                    <a href="" class="btn btn-sm btn-success">Success</a>
                    @endif
                    <a class="btn btn-sm btn-success" href="">View</a>
                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </section>
    </section>

@endsection
