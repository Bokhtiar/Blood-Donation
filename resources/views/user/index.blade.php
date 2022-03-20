@extends('layouts.user.app')
@section('user_content')

<!--SLDIER SECTION START HERE -->

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('user/b1.jpg') }}" class="d-block w-100" style="height: 500px;" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('user/b1.png') }}" class="d-block w-100" style="height: 500px;" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('user/card.jpg') }}" class="d-block w-100" style="height: 500px;" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>
<!--SELIDER SECTION END HERE-->

<!--SAVE LIFE START HERE -->
  <section class="my-5">

      <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <div class="mt-2">
                        <h1 style="color: #ff3f62!important;font-size: 2.5rem;">We Save Lives</h1>
                        <br>
                        <p class="save-life-heading">Find blood donors near your location and make a blood request in less than 5 minutes.</p>
                    </div>
                </div>
            </div>

              <div class="row my-5">
                  <div class="col-sm-12 col-md-4 col-lg-4">
                      <div class="text-center">
                        <img height="64px" width="65px" class="mb-2" src="https://www.save.life/site/themes/savelife/assets/images/icons/features/blood.svg" alt="">
                        <br><span class="text-center save-life-text">Find Blood</span>
                    </div>
                      <div class="text-center">
                        <p class=" save-life-body">
                            You don't have to pay anything, Save Life Connect is forever Free !
                        </p>
                      </div>
                  </div>


                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="text-center">
                      <img height="64px" width="65px" class="mb-2" src="https://www.save.life/site/themes/savelife/assets/images/icons/features/notifications.svg" alt="">
                      <br><span class="text-center  save-life-text">Get Notified</span>
                  </div>
                    <div class="text-center">
                      <p class="save-life-body">
                          You don't have to pay anything, Save Life Connect is forever Free !
                      </p>
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="text-center">
                      <img height="64px" width="65px" class="mb-2" src="https://www.save.life/site/themes/savelife/assets/images/icons/features/free.svg" alt="">
                      <br><span class="text-center  save-life-text">Forever Free</span>
                  </div>
                    <div class="text-center">
                      <p class="save-life-body">
                          You don't have to pay anything, Save Life Connect is forever Free !
                      </p>
                    </div>
                </div>
              </div>
          </div>
      </div>
  </section>
<!--SAVE LIFE END HERE-->

<section class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card" style="width: 18rem; border-radius:14px; height:270px">
                        <div class="card-body">
                          <h5 class="card-title">Can I Blood Donate?</h5>
                          <p class="card-text my-4">Most people are eligible to donate life-saving blood..</p>
                          <a href="#" class="card-link text-danger text-uppercase font-weight-bold">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card" style="width: 18rem; border-radius:14px; height:270px">
                        <div class="card-body">
                          <h5 class="card-title">Prepare to Donate</h5>
                          <p class="card-text my-4">Donating is pretty easy…and we have some tips to make it even easier.</p>
                          <a href="#" class="card-link text-danger text-uppercase font-weight-bold ">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card" style="width: 18rem; border-radius:14px; height:270px">
                        <div class="card-body">
                          <h5 class="card-title">Know Your Blood Type</h5>
                          <p class="card-text my-4">If you’re blood type is O-Negative, you’re a “Universal Donor,” because your blood can be transfused into anyone in an emergency.</p>
                          <a href="#" class="card-link text-danger text-uppercase font-weight-bold">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- card section -->


<section>
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
                                <span>name</span>
                                <p>bangladesh</p>
                            </div>
                        </div>
                        <div class="my-2">
                            <p class=""  style="font-style: italic;">" We don't have to worry anymore for our emergencies. We simply request blood immediately get contacted by donors."</p>
                        </div>
                </div>  <!--end here card -->


                <div class="col-sm-12 col-md-3 col-lg-3 save card ">
                    <div class="row my-3">
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
                            <span>name</span>
                            <p>bangladesh</p>
                        </div>
                    </div>
                    <div class="my-2">
                        <p class=""  style="font-style: italic;" >" We don't have to worry anymore for our emergencies. We simply request blood immediately get contacted by donors."</p>
                    </div>
                </div> <!--end here card -->



                <div class="col-sm-12 col-md-3 col-lg-3 card save">
                    <div class="row my-3">
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
                            <span>name</span>
                            <p>bangladesh</p>
                        </div>
                    </div>
                    <div class="my-2">
                        <p class="" style="font-style: italic;">" We don't have to worry anymore for our emergencies. We simply request blood immediately get contacted by donors."</p>
                    </div>
                </div> <!--end here card -->


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
