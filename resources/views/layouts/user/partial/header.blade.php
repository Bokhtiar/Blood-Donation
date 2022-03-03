<section class="header">
    <nav class="navbar navbar-expand-lg navbar-light" style="padding: 30px;">
        <section class="container">
            <a class="navbar-brand text-light" href=" {{url('/')}} "><img style="background-color: aliceblue; border-radius: 30px;" height="40px" width="40px" src="{{asset('user')}}/b4.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('give/blood')}}">Why Give Blood <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           The Donation Process
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">About-Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact-Us</a>
                    </li>

                    <li class="nav-item dropdown">
                        @if(Auth::check())
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}}
                         </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="@route('user.dashboard')">Dashboard</a>
                             <a class="dropdown-item" href="#">Logout</a>
                         </div>

                         @else
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            profile
                         </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="@route('login')">Login</a>
                             <a class="dropdown-item" href="@route('register')">Register</a>
                         </div>
                         @endif
                        </li>

                </ul>
            </div>
        </section>
    </nav>
</section>
