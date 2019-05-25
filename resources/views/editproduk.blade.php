@extends('layouts.temp2')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Event</title>

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">


     <!-- Custom styles for this template -->
      <link href="{{ url('css/creative.min.css') }}" rel="stylesheet">
      <link href="{{ url('css/modern-business.css') }}" rel="stylesheet">
      <link href="css/scrolling-nav.css" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">

     <!-- Plugin CSS -->
      <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
      
</head>

<body>

<div class="container pad">
    <div class="jumbotron text-center">
      <h1>Edit Produk!</h1>
    </div>
</div>
    
    <div class="container col-5">
        <form method="POST" action="{{ route('update.product', $show->id) }}" enctype="multipart/form-data">
					@csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Product') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$show->name}}" required autocomplete="name" autofocus>
                    </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi Product') }}</label>
                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{$show->deskripsi}}" required autocomplete="deskripsi" autofocus>
                    </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Harga Product') }}</label>
                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$show->price}}" required autocomplete="deskripsi" autofocus>
                    </div>
            </div>

            <input name="_method" type="hidden" value="PATCH">                    
                <img src="{{ asset('image/product/'.$show->image)  }}" style="max-height:200px;max-width:200px;margin-top:10px;">
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="file" id="inputgambar" name="image" class="validate"/ >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <br>
                           	<button href="{{ url('/event') }}" class="btn btn-lg btn-success" type="submit" value="Save"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                        </div>
                    </div>
        </form>
    </div>


</div>
</body>
</html>
@endsection