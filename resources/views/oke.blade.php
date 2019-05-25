<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Product!</title>

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
<br>
<br>

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
                                <input id="name" type="text"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Harga Produk') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi Produk') }}</label>

                            <div class="col-md-6">
                                <input id="deskripsi" type="text" name="deskripsi" value="{{ old('deskripsi') }}" required autocomplete="deskripsi" autofocus>
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
<div class="table-responsive">
<br>
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
				   <th>No</th>
                    <th>Nama Product</th>
                     <th>Deskripsi</th>
                     <th>Harga</th>
                     <th>Edit</th>
                       <th>Delete</th>
                   </thead>
    <tbody>

                @php(
                    $no = 1 {{-- buat nomor urut --}}
                    )
                {{-- loop all data --}}
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->deskripsi }}</td>
                        <td>{{ $data->price }}</td>
						
                        <td>
                            
							<form action="#">
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">Edit</button>
                            </form>
                            
                        </td>
						<td>
                            
							<form action="#" method="post">
                                @csrf
                                @method('DELETE')
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                            
                        </td>
                    </tr>
                @endforeach
                {{-- // end loop --}}
            </tbody>
        </form>
        
        
</table>

