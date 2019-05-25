@extends('layouts.temp2')
@section('content')

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

  <body>

  <div class="container">
    <div class="jumbotron text-center">
      <h1>Titip Kuy!</h1>
    </div>
  </div>

  <section id="seller">
  <div class="container text-center">
  <div class="accordion" id="accordionExample">    
    <div class="row">
    @foreach($show as $sh)
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="{{ asset('image/product/'.$sh->image)  }}" style="max-height:200px;max-width:200px;margin-top:10px;" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a>{{$sh->name}}</a>
            </h4>
            <p class="card-text">Rp. {{$sh->price}}</p>       
          </div>
          <div class="card-footer">
                <a href="{{ route('single.product', $sh->id)}}" class="btn btn-primary">View Product</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</section>
    <!-- /.row -->
</body>
@endforeach

</html>
@endsection
