@extends('layouts.app')

@section('content')
<div class="table-responsive">
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
@endsection
