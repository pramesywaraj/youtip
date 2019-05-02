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
                        <td>{{ $tampil->username_id }}</td>
                        <td>{{ $tampil->price }}</td>
						<td>{{ $tampil->deskripsi }}</td>
                        <td>
                        <img src="{{ asset('image/'.$tampil->image)  }}" style="max-height:200px;max-width:200px;margin-top:10px;">
                        </td>
                        <td>
                            
							<form action=#>
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">Edit</button>
                            </form>
                            
                        </td>
						<td>
                            
							<form action="#" method="DELETE">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                            
                        </td>
                    </tr>
                @endforeach
                {{-- // end loop --}}
            </tbody>
        </form>

        
</table>