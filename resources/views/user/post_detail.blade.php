@extends('layouts.user.app')
@section('user_content')



        <section class="container">
            <div class="row ">
                <div class="col-sm-12 col-md-9 col-lg-9 card my-4">
                    <div class="row my-3">
                        <div class="col-md-1 col-lg-1">
                            <img style=" border-radius: 38px;" height="65px" width="65px" src="https://www.save.life/site/themes/savelife/assets/images/testimonials/hamza.svg" alt="">
                        </div>
                        <div class="col-md-9">
                            <span class="font-weight-bold" style="font-size: 19px">{{ $post->user? $post->user->name:'' }}</span>
                            <p>{{ $post->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    <div class="my-2">
                        <p class="" style="font-style: italic; font-size:25px">" {{ $post->title }}"</p>
                    </div>

                    <div class="my-2">
                        {{ $post->des }}
                    </div>



                    <!--commment section -->
                    <hr>
                    <section>
                        <form action="{{ url('user/post/comment/store', $post->id) }}" method="POST">
                            @csrf
                            <div class="form-gorup">
                                <label for="">Comment Section</label>
                                <input required type="text" name="comment" placeholder="comment" class="form-control" id="">
                            </div>
                            <div class="form-gorup my-2">
                                <input type="submit" class="btn btn-sm btn-success" value="Submit" name="" id="">
                            </div>
                        </form>

                        <section>

                           @forelse ($comments as $c)
                           <div class="card my-2">
                            <div class="card-header">
                               <div class="form-inline">
                                   <img data-toggle="modal" data-target="#exampleModal{{ $c->user_id }}" height="65px" width="65px" src="https://www.save.life/site/themes/savelife/assets/images/testimonials/hamza.svg" alt="">
                                  <span class="font-weight-blod h5 ml-3"> {{ $c->user? $c->user->name:'' }}</span>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $c->user_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">

                                            <div class="form-inline">
                                                <img data-toggle="modal" data-target="#exampleModal" height="65px" width="65px" src="https://www.save.life/site/themes/savelife/assets/images/testimonials/hamza.svg" alt="">
                                                {{ $c->user ? $c->user->name: '' }}
                                            </div><!--profile name -->
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <section>
                                                <p class="lead" style="font-style: italic">Location: {{ $c->user ? $c->user->location: '' }}</p>
                                                <P class="lead">Blood Group: {{ $c->user ? $c->user->blood: '' }}</P>
                                                <p class="lead">Medical Certified : All Ok.</p>
                                                <p class="lead">Blood Donation: 5 times
                                                    <br>Phone:  {{ $c->user ? $c->user->phone: '' }} 
                                                    <br>Email:  {{ $c->user ? $c->user->email: '' }}</p>
                                            </section>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <p>{{ $c->comment }}</p>
                            </div>
                            </div>
                        </div>
                           @empty
                            <h3 class="text-danger">No Response</h3>
                           @endforelse


                        </section>
                    </section>


                </div>




                <div class="col-sm-12 col-md-3 col-lg-3 my-4">

                    <div class="card mb-2">

                            @forelse ($posts as $item)
                            <a class="text-dark" href="{{ url('post/detail', $item->id) }}">
                            <div class="row" >
                                <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
                                    <img style=" border-radius: 38px;" height="65px" width="65px" src="https://www.save.life/site/themes/savelife/assets/images/testimonials/hamza.svg" alt="">

                                </div>
                                <div class="col-sm-12 col-md-8 col-lg-8 mt-2">
                                   <span class="font-weight-bold h6"> {{ $item->user ? $item->user->name : '' }}</span> <br>
                                    {{ $item->title }}
                                </div>
                            </div>
                        </a>
                            <hr>
                            @empty

                            @endforelse

                    </div>

                </div>
            </div>
        </section>


@endsection
