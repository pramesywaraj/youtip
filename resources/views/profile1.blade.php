<link rel="stylesheet" href="css/profile.css"/>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/grid.css"/>
<script src="public/js/grid.js"></script>
<!--<script src="{{asset('js/grid.js')}}"></script>-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

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
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Your account</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('profile') }}" class="btn btn-primary">Edit Profile</a>
                        
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
                                  <a href="#"><img class="card-img-top" src="{{ asset('image/event/'.$event->image)  }}" alt=""></a>
                                  <div class="card-body">
                                    <h3 class="card-title">
                                      <a href="#">{{$event->name}}</a>
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