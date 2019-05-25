@extends('layouts.temp2')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Product!</title>

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

     <!-- Custom styles for this template -->
      <link href="{{ url('css/creative.min.css') }}" rel="stylesheet">
      <link href="{{ url('css/modern-business.css') }}" rel="stylesheet">
      <link href="css/scrolling-nav.css" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="{{ url('css/youtip.style.css') }}">   

     <!-- Plugin CSS -->
      <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
      
</head>

<body>

<div class="container">
    <div class="jumbotron text-center">
      <h1>Tambah Produk!</h1>
    </div>
</div>

<div class="container col-5">
<form >
					@csrf
                    <input name="_method" type="hidden" value="PATCH">
                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Event') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $tampil->name }}" required autocomplete="name" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi Event') }}</label>

                            <div class="col-md-6">
                                <input id="deskripsi" type="textarea" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{$tampil->deskripsi}}" required autocomplete="deskripsi" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Negara') }}</label>

                            <div class="col-md-6">
                                <input id="negara" type="text" class="form-control @error('negara') is-invalid @enderror" name="negara" value="{{ $tampil->negara }}" required autocomplete="negara" readonly>
                            </div>
</form>
<br>

<div class="card-body">
                    <form method="POST" action="{{route('store.product', $tampil->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Produk') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" id="name" type="text"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Harga Produk') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" id="price" type="text" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi Produk') }}</label>

                            <div class="col-md-6">
                                <textarea class="form-control" id="Deskripisi" type="textarea" name="deskripsi" value="{{ old('deskripsi') }}"  required autocomplete="deskripsi" autofocus></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image Produk') }}</label>
                            <div class="input-field col s6">
                              <input type="file" id="inputgambar" name="image" class="validate">
                             </div>
                         </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
      
</div>

</div>
</body>
</html>

@endsection
