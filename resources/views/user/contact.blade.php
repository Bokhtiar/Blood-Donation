@extends('layouts.user.app')
@section('user_content')

<div class="mapouter container my-5"><div class="gmap_canvas"><iframe width="1080" height="378" id="gmap_canvas" src="https://maps.google.com/maps?q=daffodil%20internation%20university&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:378px;width:1080px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:378px;width:1080px;}</style></div></div>

    <section class="container">
        <div class="form-gorup">
            <form action="{{url('contact/store')}}" method="Post">
                @csrf
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <label for="">Enter Your Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name" id="">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <label for="">Enter Your E-mail</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Your email" id="">
                    </div>

                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <label for="">Description</label>
                        <textarea name="des" id="" cols="10" rows="4" placeholder="Description" class="form-control"></textarea>

                        <div class="my-2">
                        <input class="btn btn-sm btn-primary" type="submit" name="" id="">
                        </div>
                    </div>
                    
                </div>
            </form>
        </div>
    </section>

@endsection