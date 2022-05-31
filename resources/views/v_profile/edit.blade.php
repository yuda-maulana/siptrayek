@extends('layout/template')
@section('title', 'User')
@section('content')
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <form role="form" action="/v_profile/update/{{$profile->id}}" method="post">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{$profile->name}}">
                            <div class="text-danger">
                                @error('name')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" name="nip" class="form-control" id="nip" value="{{$profile->nip}}">
                            <div class="text-danger">
                                @error('nip')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="{{$profile->email}}">
                            <div class="text-danger">
                                @error('email')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" name="foto" class="form-control" id="foto">
                            <img src="{{URL::to('/')}}/foto/{{$profile->foto}}" alt="" class="img-thumbnail" width="100px">
                            <input type="hidden" class="form-control" id="hidden_image" name="hidden_image" value="{{$profile->foto}}">
                            <div class="text-danger">
                                @error('foto')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                        <a href="../profile" class="btn btn-danger btn-sm">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection