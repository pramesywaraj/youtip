@extends('layouts.temp2')
@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>YouTip!</title>
    
    <link rel="stylesheet" href="{{ url('css/youtip.style.css') }}">   

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    
     <!-- Custom styles for this template -->
     <link href="{{ url('css/creative.min.css') }}" rel="stylesheet">
      <link href="{{ url('css/modern-business.css') }}" rel="stylesheet">
      <link href="css/scrolling-nav.css" rel="stylesheet">
      <link rel="stylesheet" href="css/profile.css"/>
      <link rel="stylesheet" href="css/grid.css"/>
      <link rel="stylesheet" href="css/style.css">
      <link href="{{ url('css/fontawesome.min.css') }}" rel="stylesheet">


     <!-- Plugin CSS -->
      <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  </head>

<body>
<div class="container emp-profile text-center">
                <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="home" aria-selected="true">Profile</a>
                                </li>          
                                <li class="nav-item">
                                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#event" role="tab" aria-controls="home" aria-selected="false">Event</a>
                                </li>
                </ul>                

            <div class="tab-content profile-tab" id="nav-tabContent">
               
            
                <div class="tab-pane fade show active py-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">      
                    <form method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-img">
                                    <img src="{{ asset('image/profile/'.$pengguna->image)  }}" alt=""/>

                                </div>
                            </div>
                            <div class="container col-md-6 py-4">
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
                                </div>
                            </div>

                            
                <div class="tab-pane fade py-4" id="event" role="tabpanel" aria-labelledby="event-tab">
                            <div class="row">
                            @foreach ($events as $event)
                              <div class="col-lg-4 col-sm-6 portfolio-item">
                                <div class="card h-100">
                                  <a href="#"><img class="img-responsive img-resize" src="{{ asset('image/event/'.$event->image) }}" alt=""></a>
                                  <div class="card-body">
                                    <h3 class="card-title">
                                      <a href="{{ route('event.product', $event->id)}}">{{$event->name}}</a>
                                    </h3>
                                        <p class="card-text">{{$event->deskripsi}} <br>{{$event->negara}}</p>
                                  </div>
                                </div>
                              </div>
                            @endforeach
                            </div>
                 </div>
         </div>
        </div>

 </div>


        <!-- Javascript -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="public/js/grid.js"></script>

</body>
</html>
@endsection  