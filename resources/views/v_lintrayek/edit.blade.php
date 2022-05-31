@extends('layout/template')
@section('title', 'Edit Lintasan Trayek')
@section('content')
<form action="/v_lintrayek/update/{{$lintrayek->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <!-- <form role="form"> -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="kode">Kode</label>
                                    <input type="text" name="kode" class="form-control" id="kode" value="{{$lintrayek->kode}}">
                                    <div class="text-danger">
                                        @error('kode')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="alokasi">Alokasi</label>
                                    <input type="text" name="alokasi" class="form-control" value="{{$lintrayek->alokasi}}" id="alokasi">
                                    <div class="text-danger">
                                        @error('alokasi')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="realisasi">Realisasi</label>
                                    <input type="text" name="realisasi" class="form-control" value="{{$lintrayek->realisasi}}" id="realisasi">
                                    <div class="text-danger">
                                        @error('realisasi')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="aktif">Aktif</label>
                                    <input type="text" name="aktif" class="form-control" value="{{$lintrayek->aktif}}" id="aktif">
                                    <div class="text-danger">
                                        @error('aktif')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nonaktif">Non Aktif</label>
                                    <input type="text" name="nonaktif" class="form-control" value="{{$lintrayek->nonaktif}}" id="nonaktif">
                                    <div class="text-danger">
                                        @error('nonaktif')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="lintasan">Lintasan</label>
                                    <input type="text" name="lintasan" class="form-control" value="{{$lintrayek->lintasan}}" id="lintasan">
                                    <div class="text-danger">
                                        @error('lintasan')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rute">Rute</label>
                                    <textarea name="rute" id="rute" class="form-control" cols="58" rows="10">{{$lintrayek->rute}}</textarea>
                                    <div class="text-danger">
                                        @error('rute')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="jenis">Jenis</label>
                                    <select class="form-control" name="jenis" id="jenis">
                                        <option value="{{$lintrayek->jenis}}">{{$lintrayek->jenis}}</option>
                                        <option value="Angkutan Kota">Angkutan Kota</option>
                                        <option value="Mobil Penumpang">Mobil Penumpang</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-success">Simpan</button>
                        <a href="../lintrayek" class="btn btn-danger">Batal</a>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </section>
</form>

@endsection