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
      <link href="{{ url('css/creative.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <!-- Plugin CSS -->
      <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  </head>

<body>
        
<div class="container py-4">
        
    <header class="pad">
        <div class="container text-center">
            <h1>Buat Event Kamu!</h1>
            <p class="lead">Buatlah event sebelum menambahkan produk!</p>
        </div>
    </header>

    <form method="POST" action="{{ route('event.store') }}" enctype="multipart/form-data">
    @csrf

            <div class="form-group row">
                    <label for="event" class="col-sm-2 col-form-label">{{ __('Nama Event') }}</label>
                <div class="col-sm-10">
                    <input class="form-control" id="name" type="text"  name="name" value="{{ old('name') }}" 
                            required autocomplete="name" autofocus>
                </div>
            </div>

            <div class="form-group row">
                <label for="negara" class="col-sm-2 col-form-label" >{{ __('Negara') }}</label>
                <div class="col-sm-10">
                <select name="negara" class="custom-select">                            
                    <option value="">Pilih Negara</option>
                            <option value="Korea">Korea</option>
                            <option value="Jepang">Jepang</option>
                            <option value="China">China</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Amerika">Amerika</option>
                </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="no_rekening" class="col-sm-2 col-form-label">{{ __('Nomor Rekening') }}</label>
                <div class="col-sm-10">
                    <input class="form-control" id="no_rekening" type="text" name="no_rekening" value="{{ old('no_rekening') }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label" >Deskripsi Event</label>
                <div class="col-sm-10">
                     <textarea class="form-control" id="Deskripisi" type="textarea" name="deskripsi" value="{{ old('deskripsi') }}"  required></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="image" class="col-sm-2 col-form-label">{{ __('Image') }}</label>
                    <div class="input-field col s6">
                        <input type="file" id="inputgambar" name="image" class="validate">
                    </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan') }}
                    </button>
                </div>
            </div>
    </form>
</div>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
@endsection
