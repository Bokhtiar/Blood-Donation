<style>
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

li {
  display: inline;
}

</style>
<section class="container">
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3 my-2">
            <img src="{{ asset('user/b3.png') }}" height="45px" width="64px" alt="">
        </div>
        <div class="col-sm-12 col-md-9 col-lg-9">
            <ul class="float-right mt-3">
                <li> <a class="text-dark" style="letter-spacing: 0px; margin-left: 5px;" href=""><i class="h3 fa-brands fa-facebook-square"></i></a></li>
                <li> <a class="text-dark" style="letter-spacing: 0px; margin-left: 5px;" href=""><i class="h3 fa-brands fa-twitter-square"></i></a></li>
                <li> <a class="text-dark" style="letter-spacing: 0px; margin-left: 5px;" href=""><i class="h3 fa-brands fa-instagram-square"></i></a></li>
                <li> <a class="text-dark" style="letter-spacing: 0px; margin-left: 5px;" href=""><i class="h3 fa-brands fa-google-plus"></i></a></li>
                <li> <a class="text-dark" style="letter-spacing: 0px; margin-left: 5px;" href=""><i class="h3 fa-brands fa-youtube-square"></i></a></li>
            </ul>
        </div>
    </div>
</section>
<section class="header">
    <nav class="navbar navbar-expand-lg " >
        <section class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav text-center" >
                    <li class="nav-item active">
                        <a class="nav-link "  href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{url('give/blood')}}">Donation Eligiblity <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('blood/post')}}">Blood Post <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('review')}}">Reviews <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('about')}}">About-Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('contact')}}">Contact-Us</a>
                    </li>

                    <li class="nav-item dropdown">
                        @if(Auth::check())
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}}
                         </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item " href="@route('user.dashboard')">Dashboard</a>
                             <a class="dropdown-item " href="{{ url('user/logout') }}">Logout</a>
                         </div>

                         @else
                         <a class=" nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Register
                         </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item " href="@route('login')">Login</a>
                             <a class="dropdown-item " href="@route('register')">Register</a>
                         </div>
                         @endif
                        </li>

                </ul>
            </div>
        </section>
    </nav>
</section>
