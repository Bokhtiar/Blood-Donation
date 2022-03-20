@extends('layouts.user.app')
@section('user_content')

    <section class="container">
        <div class="row my-3">
            @foreach ($posts as $item)
            <div class="col-sm-12 col-md-4 col-lg-4 my-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <div class="form-inline">
                            <img  height="45px" width="45px" src="https://www.save.life/site/themes/savelife/assets/images/testimonials/hamza.svg" alt="">
                           &nbsp;&nbsp; {{ $item->user ? $item->user->name : '' }}
                     </div>
                    </div>
                    <div class="card-body">
                      <h6 class="card-subtitle mb-2 text-muted">{{ $item->title }}</h6>
                      <p class="lead">Location: {{ $item->location }}  <br> Contact: {{ $item->phone }} </P>
                      <a href="{{ url('post/detail',$item->id) }}" class="card-link">Read More...</a>
                    </div>
                  </div>
            </div>
            @endforeach


        </div>

        
    </section>

@endsection
