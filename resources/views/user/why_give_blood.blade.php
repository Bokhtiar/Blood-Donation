@extends('layouts.user.app')
@section('user_content')

<!-- banner section start -->
<section class="banner">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 form-inline text-center">
            <img class="container ml-5" style="" height="300px" src="{{asset('user')}}/blood8.svg" alt="img-fluid">
        </div>

        <div class="col-sm-12 col-md-8 col-lg-8">
            <div class="banner-text">
                <h1 class="text-center" style="padding-top: 100px">Start Saving Lives</h1>
                <h6 class="text-center">Become a Donor or request for blood and help save lives</h6>
                <h6 class="text-center"><a class="text-center btn btn-outline-danger" href=""><span class="text-center">Get Registration</span></a></h6>
            </div>
            <img class="container" style="" height="100px" src="{{asset('user')}}/blood8.svg" alt="">
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ff0000" fill-opacity="1" d="M0,64L80,64C160,64,320,64,480,85.3C640,107,800,149,960,154.7C1120,160,1280,128,1360,112L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
</section>
<!-- banner section end -->
<!--why blood give secton start -->
<section class="container">
    <h2>Why give blood</h2>
    <p class="lead">
    Giving blood saves lives. The blood you give is a lifeline in an emergency and for people who need long-term treatments.
    </p>

    <div class="">
        <h2>Why do we need you to give blood?</h2>
        <p class="lead">
        We need new blood donors from all backgrounds to ensure there is the right blood available for patients who need it.
        </p>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3">
        <div class="card" style="width: 16rem;">
        <img class="card-img-top" src="https://nhsbtdbe.blob.core.windows.net/az766967/9/9/b/c/f/e/99bcfe748f3c4cda57bd48df93f0ae91e7a95112.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">How your blood is used</h5>
            <p class="card-text">Your red blood cells, platelets and plasma can save up to three lives.</p>
        </div>
        </div>
        </div>

        <div class="col-sm-12 col-md-3 col-lg-3">
        <div class="card" style="width: 16rem;">
        <img class="card-img-top" src="https://www.blood.co.uk/remote.axd/nhsbtdbe.blob.core.windows.net/umbraco-assets-corp/17598/roanna-transfusion.jpg?crop=0.0000000000000001263187085796,0.068504448340801355,0,0.55716767322553407&cropmode=percentage&width=600&height=255&rnd=132243344790000000&quality=70" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">How your blood is used</h5>
            <p class="card-text">Your red blood cells, platelets and plasma can save up to three lives.</p>
        </div>
        </div>
        </div>

        <div class="col-sm-12 col-md-3 col-lg-3">
        <div class="card" style="width: 16rem;">
        <img class="card-img-top" src="https://www.blood.co.uk/remote.axd/nhsbtdbe.blob.core.windows.net/umbraco-assets-corp/17111/ro-donor.jpg?crop=0,0.15481703441387451,0,0.20843548533551262&cropmode=percentage&width=600&height=255&rnd=132367814970000000&quality=70" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">How your blood is used</h5>
            <p class="card-text">Your red blood cells, platelets and plasma can save up to three lives.</p>
        </div>
        </div>
        </div>

        <div class="col-sm-12 col-md-3 col-lg-3">
        <div class="card" style="width: 16rem;">
        <img class="card-img-top" src="https://www.blood.co.uk/remote.axd/nhsbtdbe.blob.core.windows.net/umbraco-assets-corp/15116/wyt-pair-1-aplus-oplus-still-12.jpg?crop=0,0.14222222222222222,0,0.10222222222222223&cropmode=percentage&width=600&height=255&rnd=132367815870000000&quality=70" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">How your blood is used</h5>
            <p class="card-text">Your red blood cells, platelets and plasma can save up to three lives.</p>
        </div>
        </div>
        </div>
    </div>
</section>


<section class="container">
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
</section>
<!--aboulance end-->

@endsection
