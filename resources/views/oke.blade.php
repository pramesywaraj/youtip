@extends('layouts.app')

@section('content')
<div class="card-body">
                    <form method="POST" action="{{ route('store.product') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>

                            <div class="col-md-6">
                                <input id="deskripsi" type="text" name="deskripsi" value="{{ old('deskripsi') }}" required autocomplete="deskripsi" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
                            <div class="input-field col s6">
                              <input type="file" id="inputgambar" name="image" class="validate"/ >
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
@endsection

<div class="table-responsive">
                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
				   <th>No</th>
                    <th>Nama Product</th>
                     <th>Username_ID</th>
                     <th>Price</th>
                     <th>Deskripsi</th>
					 <th>Image</th>
                     <th>Edit</th>
                       <th>Delete</th>
                   </thead>
    <tbody>

                @php(
                    $no = 1 {{-- buat nomor urut --}}
                    )
                {{-- loop all data --}}
                @foreach ($tampils as $tampil)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $tampil->name }}</td>
                        <td>{{ $tampil->user_id }}</td>
                        <td>{{ $tampil->price }}</td>
						<td>{{ $tampil->deskripsi }}</td>
                        <td>
                        <img src="{{ asset('image/'.$tampil->image)  }}" style="max-height:200px;max-width:200px;margin-top:10px;">
                        </td>
                        <td>
                            
							<form action="{{ route('show.update', $tampil->id) }}">
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">Edit</button>
                            </form>
                            
                        </td>
						<td>
                            
							<form action="{{ route('delete.product', $tampil->id) }}" method="post">
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

