<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>YouTip!</title>
    
    <link rel="stylesheet" href="{{ url('css/youtip.style.css') }}">   

    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>


     <!-- Custom styles for this template -->
      <link href="{{ url('css/creative.min.css') }}" rel="stylesheet">
      <link href="{{ url('css/modern-business.css') }}" rel="stylesheet">
      <link href="css/scrolling-nav.css" rel="stylesheet">

     <!-- Plugin CSS -->
      <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

</head>
	<body id="page-top">
    <!-- Nav Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container">
             <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">Youtip</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">   
                <ul class="navbar-nav ml-auto  ml-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/') }}">Home <br></a>
                    </li>

    
            @guest                  
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Log in  </a>
                    </li>
                    <li class="nav-item">
            @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
            @endif
            @else
                    </li>
                </ul>
            </div>                    
                        <a id="navbarDropdown"  href="{{ route('profil') }}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
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
  <body>
  <section id="seller">
  <div class="container text-center">
  <div class="col-md-2">
    <a href="#" class="btn btn-primary">Tambah Product</a>
                        
  </div>
  <h2>Product</h2>
  <div class="accordion" id="accordionExample">    
    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project One</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>         
          </div>
          <div class="card-footer">
                <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Two</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>            
          </div>
          <div class="card-footer">
                <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Three</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
          </div>
          <div class="card-footer">
                <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Four</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
          <div class="card-footer">
                <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Five</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
          <div class="card-footer">
                <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Six</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
          </div>
          <div class="card-footer">
                <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
    </div>
    <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          View More
        </button>
    </h2>
    
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Six</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
          </div>
          <div class="card-footer">
                <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
    <!-- /.row -->
</body>