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

<div class="card-body">
            <form action="{{ route('update.product', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"  name="name" value="{{ $data->name }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" name="price" value="{{ $data->price }}" required autocomplete="price" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>

                            <div class="col-md-6">
                                <input id="deskripsi" type="text" name="deskripsi" value="{{ $data->deskripsi }}" required autocomplete="deskripsi" autofocus>
                            </div>
                        </div>

                    <div class="row">
                        <div class="col s6">
                         <img src="{{ asset('image/'.$data->image) }}" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />
                        </div>
                    </div>
                    <div class="row">
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
