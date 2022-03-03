@extends('layouts.user.app')
@section('user_content')

    <section class="container my-5">
        <section class="row">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <img height="200px" width="100%" src="{{asset('user')}}/blooddonate.jpg" alt="">
            </div>

            <div class="col-sm-12 col-md-8 col-lg-8">
                <p class="lead">
                An ambulance is a medically equipped vehicle which transports patients to treatment facilities, such as hospitals.[1] Typically, out-of-hospital medical care is provided to the patient. Ambulances are used to respond to medical emergencies by emergency medical services (EMS). For this purpos
                </p>
                <a href="{{url('contact')}}" class="btn btn-outline-danger">Contact-Us</a>
            </div>
        </section>

        <section class="container my-5">
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3">
            <div class="card">
                <div class="card-header">
                    <p class="text-center "><img class="card-image" height="40px" width="40px" src="{{asset('user')}}/b1.png" alt="">
                        <br><span class="h5">Blood Donat Login</span>
                    </p>
                </div>
                <div class="card-body">
                    <p>Usa Donation information. 100% Privacy Protected! Find what you are looking for Here. 99% Match on Usa Donation</p>
                </div>
                <a href="" class="text-center btn btn-bg-clr">Login</a>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
            <div class="card">
                <div class="card-header">
                    <p class="text-center "><img class="card-image" height="40px" width="40px" src="{{asset('user')}}/b2.png" alt="">
                        <br><span class="h5">Eligibility Requirement</span>
                    </p>
                </div>
                <div class="card-body">
                    <p>Whole Blood Donation · Donation frequency: Every 56 days, up to 6 times a year* · You must be in good health and feeling well*</p>
                </div>
                <a href="" class="text-center btn btn-bg-clr">Learn More</a>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
            <div class="card">
                <div class="card-header">
                    <p class="text-center "><img class="card-image" height="40px" width="40px" src="{{asset('user')}}/b3.png" alt="">
                        <br><span class="h5">Donating Today</span>
                    </p>
                </div>
                <div class="card-body">
                    <p>Things To Do Before Blood Donation: Consider Taking Someone Along For Company:This will achieve two things for you, </p>
                </div>
                <a href="" class="text-center btn btn-bg-clr">Start Now</a>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
            <div class="card">
                <div class="card-header">
                    <p class="text-center "><img class="card-image" height="40px" width="40px" src="{{asset('user')}}/b4.png" alt="">
                        <br><span class="h5">Learn About Blood</span>
                    </p>
                </div>
                <div class="card-body">
                    <p>The solid part of your blood contains red blood cells, white blood cells, and platelets. Red blood cells (RBC) deliver oxygen </p>
                </div>
                <a href="" class="text-center btn btn-bg-clr">Learn More</a>
            </div>
        </div>
    </div>
</section>
    </section>

@endsection
