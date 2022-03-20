@extends('layouts.user.app')
@section('user_content')

<section class="my-4">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-8">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <div class="">
                        <h1 style="color: #ff3f62!important;font-size: 2.5rem;">Lives Saved</h1>
                        <p class="save-heading">Find blood donors near your location and make a blood request in less than 5 minutes.</p>
                    </div>
                </div>
            </div>


            <!--review system -->
            <style>
                .save{
                    background: #34495E;
                    color: white;
                    margin: 42px;
                    width: 100%;
                }

            </style>
            <section class="row">
                @foreach ($reviews as $r)
                <div class="col-sm-12 col-md-3 col-lg-3 save card " >
                    <div class="row my-3 ">
                        <div class="col-md-3">
                            <img style=" border-radius: 38px;" height="65px" width="65px" src="https://www.save.life/site/themes/savelife/assets/images/testimonials/hamza.svg" alt="">
                        </div>
                        <div class="col-md-9 pl-4">
                            <span>
                                <span class="h7 fa fa-star checked"></span>
                                <span class="h7 fa fa-star checked"></span>
                                <span class="h7 fa fa-star checked"></span>
                                <span class="h7 fa fa-star"></span>
                                <span class="h7 fa fa-star"></span>
                            </span><br>
                            <span>{{ $r->user ? $r->user->name : 'asd' }}</span>
                            <p>{{ $r->user ? $r->user->location : 'asd' }}</p>
                        </div>
                    </div>
                    <div class="my-2">
                        <p class=""  style="font-style: italic;">"{{ $r->review }}."</p>
                    </div>
            </div>  <!--end here card -->
                @endforeach


            </section>
        </div>
    </div>
</section>

<!-- post start here -->
{{-- <section class="container">
    <p class="btn-bg-clr">
        <h2 class="text-center" style="background-color: red; color: white; padding: 10px;">Argent Need Blood</h2>
    </p>
    <div class="row">
        @foreach($posts as $post)
        <div class="col-sm-12 col-lg-6 col-md-6 my-4">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header form-inline">
                            <img src="u1.jpg" height="50px" alt="">
                            <h4 class="ml-3">{{$post->user ? $post->user->name : ''}}</h4>
                        </div>
                        <div class="card-body">
                            <p>{{$post->des}} </p>
                            <p class="font-weight-bold">
                                <span>Location : {{$post->location}}</span><br>
                                <span>Contact : {{$post->phone}}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</section> --}}
<!--post end here-->

{{-- <section class="container">
    <p class="btn-bg-clr">
        <h2 class="text-center" style="background-color: red; color: white; padding: 10px;"> Ambulance Facilites</h2>
    </p>
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
            <img src="{{asset('user')}}/card.jpg" height="200px" width="100%" alt="">
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8">
            <p class="lead ">
                An ambulance is a medically equipped vehicle which transports patients to treatment facilities, such as hospitals.[1] Typically, out-of-hospital medical care is provided to the patient. Ambulances are used to respond to medical emergencies by emergency
                medical services (EMS). For this purpose, they are generally equipped with flashing warning lights and sirens. They can rapidly transport paramedics and other first responders to the scene, carry equipment for administering emergency
                care and transport patients to hospital or other definitive care. Most ambulances use a design based on vans or pickup trucks. Others take the form of motorcycles, buses, limousines, aircraft and boats. Generally, vehicles count

            </p>
        </div>
    </div>
</section> --}}
<!--aboulance end-->

@endsection
