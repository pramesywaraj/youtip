@extends('layouts.app')
@section('content')
<div class="card-body">
                    <form method="POST" action="{{ route('event.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Event Jastip') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="negara" class="col-md-4 col-form-label text-md-right">{{ __('Negara') }}</label>
                            <p><select name="negara">
                            <option value="">Pilih Negara:</option>
                            <option value="Korea">Korea</option>
                            <option value="Jepang">Jepang</option>
                            <option value="China">China</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Amerika">Amerika</option>
                            </select>
                            </p>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi Tentang Event') }}</label>

                            <div class="col-md-6">
                                <input id="deskripsi" type="text" name="deskripsi" value="{{ old('deskripsi') }}" required autocomplete="deskripsi" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_rekening" class="col-md-4 col-form-label text-md-right">{{ __('No Rekening') }}</label>

                            <div class="col-md-6">
                                <input id="no_rekening" type="text" name="no_rekening" value="{{ old('no_rekening') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
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
@endsection
