<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>YouTip!</title>
    
    <link rel="stylesheet" href="{{ url('css/youtip.style.css') }}">   

    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>


     <!-- Custom styles for this template -->
      <link href="{{ url('css/creative.min.css') }}" rel="stylesheet">
      <link href="{{ url('css/modern-business.css') }}" rel="stylesheet">
      <link href="css/scrolling-nav.css" rel="stylesheet">
      <link rel="stylesheet" href="css/profile.css"/>
      <link rel="stylesheet" href="css/grid.css"/>
      <link rel="stylesheet" href="css/style.css">


     <!-- Plugin CSS -->
      <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  </head>
	<body id="page-top">
    <!-- Nav Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container">
             <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}"><img class="img-top" src="/image/logo/you.png" width="100px"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">   
                <ul class="navbar-nav ml-auto  ml-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#page-top">Home </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#seller">Seller</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact <br></a>
                    </li>
            @guest                  
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span>Log in  </a>
                    </li>
                    <li class="nav-item">
            @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-link btn-sm">
                          <img class="img-top" src="/image/logo/cart.png">
                              <span class="badge badge-light">3</span>
                        </button> 
                    </li>
                </ul>
                  
                @endif
            @else

            </div>                    
                        <a id="navbarDropdown"  href="{{ route('profil') }}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <br><span class="caret"></span>
                        </a>
                            <br>

                        <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                        </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
                    </form>
            @endguest
        </div>
    </nav>  

                            <!-- end nav -->

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{ asset('image/profile/'.$pengguna->image)  }}" alt=""/>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$pengguna->username}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$pengguna->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$pengguna->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$pengguna->no_hp}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Alamat</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$pengguna->alamat}}</p>
                                            </div>
                                        </div>
                                        
                                    
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Event</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('profile') }}" class="btn btn-primary">Edit Profile</a>
                        <a href="{{ route('show.event') }}" class="btn btn-primary my-2">Edit Event</a>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                       
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                            @foreach ($events as $event)
                              <div class="col-lg-4 col-sm-6 portfolio-item">
                                <div class="card h-100">
                                  <a href="#"><img class="card-img-top" src="{{ asset('image/event/'.$event->image) }}" alt=""></a>
                                  <div class="card-body">
                                    <h3 class="card-title">
                                      <a href="{{ route('event.product', $event->id)}}">{{$event->name}}</a>
                                    </h3>
                                  <p class="card-text">{{$event->deskripsi}} <br>{{$event->negara}}</p>
                                </div>
                              </div>
                            </div>
                            @endforeach
                           <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="public/js/grid.js"></script>

</body>
</html>