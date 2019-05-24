<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order List</title>

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
       <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>


     <!-- Custom styles for this template -->
      <link href="{{ url('css/creative.min.css') }}" rel="stylesheet">
      <link href="{{ url('css/modern-business.css') }}" rel="stylesheet">
      <link href="css/scrolling-nav.css" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">

     <!-- Plugin CSS -->
      <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
      
</head>

<body id="page-top">

    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container">
             <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}"><img class="img-top" src="/image/logo/you.png" width="100px"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">   
                <ul class="navbar-nav ml-auto  ml-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/') }}">Home </a>
                    </li>
                    
            @guest                  
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Log in  </a>
                    </li>
            @if (Route::has('register'))
                 
            @endif
            @else
                </ul>
            </div>                    
                        <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}<br> <span class="caret"></span>
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

    <section class="cart_area">
      <div class="container">
          <div class="cart_inner">
              <div class="table-responsive">
                  <table class="table">
                      <thead>
                          <tr>
                            <th scope="col">Nama Pembeli</th>
                            <th scope="col">Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                          </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $sh)
                          <tr>
                          <td>
                            <a href="{{ route('profile.id', $sh->pembeli_id) }}">{{$sh->nama_pembeli}}</a>
                        </td>
                              <td>
                                  <div class="media">
                                      <div class="d-flex">
                                          <img src="{{ asset('image/product/'.$sh->image)  }}" height="50" alt="">
                                      </div>
                                      <div class="media-body">
                                          <p>{{$sh->name}}</p>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <h5>{{$sh->jumlah}}</h5>
                              </td>
                              <td>
                                  <h5>{{$sh->price*$sh->jumlah}}</h5>
                              </td>
                          </tr>
                          @endforeach
                          
                          
                          <tr>
                              <td>

                              </td>
                              <td>

                              </td>
                          </tr>
                        
                          <tr class="out_button_area">
                              <td class="d-none-l">

                              </td>
                              <td class="">

                              </td>
                              <td>

                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </section>