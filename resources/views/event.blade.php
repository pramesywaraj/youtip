@extends('layouts.temp2')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event</title>

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

<body id="page-top">
<div class="container py-4">
<div class="table-responsive">
<br>
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
				   <th>No</th>
                    <th>Nama Event</th>
                     <th>Deskripsi</th>
                     <th>Negara</th>
                     <th>Tambah Produk</th>
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
                        <td>{{ $data->negara }}</td>
						
                       <td>
                       <form action="{{route('tambah.product', $data->id) }}">
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">Tambah Product</button>
                            </form>
                        </td>
                        <td>
                            
							<form action="#">
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">Edit</button>
                            </form>
                            
                        </td>
						<td>
                            
							<form action="{{route('delete.event', $data->id)}}" method="post">
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

</div>
</div>

</body>
</html>
@endsection