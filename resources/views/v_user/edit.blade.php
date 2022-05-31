@extends('layout/template')
@section('title', 'User')
@section('content')

<form action="/v_user/update/{{$user->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <form role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" name="name" class="form-control" id="name" value="{{$user->name}}">
                                        <div class="text-danger">
                                            @error('name')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nip">NIP</label>
                                        <input type="text" name="nip" class="form-control" id="nip" value="{{$user->nip}}">
                                        <div class="text-danger">
                                            @error('nip')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" class="form-control" id="email" value="{{$user->email}}">
                                        <div class="text-danger">
                                            @error('email')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="level_id">Role</label>
                                        <select class="form-control" name="level_id" id="level_id">
                                            <option disabled value>Role</option>
                                            <option value="{{$user->level_id}}">{{$user->level->role}}</option>
                                            @foreach ($level as $item)
                                            <option value="{{$item->id}}">{{$item->role}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="foto">Foto</label>
                                        <input type="file" name="foto" class="form-control" id="foto">
                                        <img src="{{URL::to('/')}}/foto/{{$user->foto}}" alt="" class="img-thumbnail" width="100px">
                                        <input type="hidden" class="form-control" id="hidden_image" name="hidden_image" value="{{$user->foto}}">
                                        <div class="text-danger">
                                            @error('foto')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button class="btn btn-success">Simpan</button>
                            <a href="../user" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</form>
@endsection