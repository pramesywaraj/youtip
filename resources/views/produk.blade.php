<!DOCTYPE html>
<html lang="en">
  <head>

    <title>{{$single->name}}</title>
  	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Google Fonts -->
       <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
       <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>



 <!-- Custom styles for this template -->
      <link rel="stylesheet" href="css/bootstrap-produk.css"/>
      <link href="{{ url('css/creative.min.css') }}" rel="stylesheet">
      <link href="{{ url('css/modern-business.css') }}" rel="stylesheet">
      <link href="css/scrolling-nav.css" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
      <link rel="icon" href="img/Fevicon.png" type="image/png">
      <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
	  <link rel="stylesheet" href="vendors/linericon/style.css">
      <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
      <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
      <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
      <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">

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

	<div class="container my-5">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active text-center my-4" id="pic-1"><img src="{{ asset('image/product/'.$single->image)  }}" /></div>
						</div>
						
					</div>
					<div class="details col-md-6 my-4">
						<h3 class="product-title">{{$single->name}}</h3>
						<p class="product-description">{{$single->deskripsi}}</p>
            <h4 class="price"><span>Rp. {{$single->price}}</span></h4>
              <div class="cart_area">
                <div class="cart_inner">
                  <div class="product_count">
                      <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                                class="input-text qty">
                  </div>
                  <div class="my-2">
                          <button class="btn btn-primary btn-sm" onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                                class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i>-</button>
                          <button class="btn btn-primary btn-sm" onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                                class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i>+</button>

                  </div>
                </div>
              </div>
              <form action="{{ route('tambah.cart', $single->id ) }}" method="POST">
    @csrf
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Checkout!') }}
                                </button>
                            </div>
                        </div>
              </form>

					</div>
        </div>
			</div>
		</div>
  </div>
  
  <!-- Javascript -->

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>


    <!-- Custom JavaScript for this theme -->
    
    <script src="vendors/skrollr.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="vendors/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/mail-script.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
