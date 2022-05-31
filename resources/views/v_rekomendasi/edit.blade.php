@extends('layout/template')
@section('title', 'Edit Rekomendasi')
@section('content')
<form action="/v_rekomendasi/update/{{$rekomendasi->id}}" method="post" enctype="multipart/form-data">
    @csrf

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <!-- <form role="form"> -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{$rekomendasi->tanggal}}">
                                    <div class="text-danger">
                                        @error('tanggal')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="urut">No. Urut</label>
                                    <input type="text" name="urut" class="form-control" id="urut" value="{{$rekomendasi->urut}}">
                                    <div class="text-danger">
                                        @error('urut')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="no_bend">No. Bend</label>
                                    <input type="text" name="no_bend" class="form-control" value="{{$rekomendasi->no_bend}}" id="no_bend">
                                    <div class="text-danger">
                                        @error('no_bend')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="layanan">Jenis Pelayanan</label>
                                    <input type="text" name="layanan" class="form-control" value="{{$rekomendasi->layanan}}" id="layanan">
                                    <div class="text-danger">
                                        @error('layanan')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="pemilik">Pemilik</label>
                                    <input type="text" name="pemilik" class="form-control" value="{{$rekomendasi->pemilik}}" id="pemilik">
                                    <div class="text-danger">
                                        @error('pemilik')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="perusahaan">Perusahaan</label>
                                    <input type="text" name="perusahaan" class="form-control" value="{{$rekomendasi->perusahaan}}" id="perusahaan">
                                    <div class="text-danger">
                                        @error('perusahaan')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="{{$rekomendasi->alamat}}" id="alamat">
                                    <div class="text-danger">
                                        @error('alamat')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mohon">Jenis Permohonan</label>
                                    <input type="text" name="mohon" class="form-control" value="{{$rekomendasi->mohon}}" id="mohon">
                                    <div class="text-danger">
                                        @error('mohon')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sifat">Sifat Pelayanan</label>
                                    <input type="text" name="sifat" class="form-control" value="{{$rekomendasi->sifat}}" id="sifat">
                                    <div class="text-danger">
                                        @error('sifat')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jenis">Jenis Kendaraan</label>
                                    <input type="text" name="jenis" class="form-control" value="{{$rekomendasi->jenis}}" id="jenis">
                                    <div class="text-danger">
                                        @error('jenis')
                                        {{$message}}
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah Kendaraan</label>
                                    <input type="text" name="jumlah" class="form-control" value="{{$rekomendasi->jumlah}}" id="jumlah">
                                    <div class="text-danger">
                                        @error('jumlah')
                                        {{$message}}
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="trayek">Trayek Dimohon</label>
                                    <input type="text" name="trayek" class="form-control" value="{{$rekomendasi->trayek}}" id="trayek">
                                    <div class="text-danger">
                                        @error('trayek')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="terbit">Tgl. Terbit</label>
                                    <input type="date" name="terbit" class="form-control" value="{{$rekomendasi->terbit}}" id="terbit">
                                    <div class="text-danger">
                                        @error('terbit')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="retri">Retribusi</label>
                                    <input type="text" name="retri" class="form-control" value="{{$rekomendasi->retri}}" id="retri">
                                    <div class="text-danger">
                                        @error('retri')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="catatan">Catatan</label>
                                    <input type="text" name="catatan" class="form-control" value="{{$rekomendasi->catatan}}" id="catatan">
                                    <div class="text-danger">
                                        @error('catatan')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-success">Simpan</button>
                        <a href="../rekomendasi" class="btn btn-danger">Batal</a>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </section>
</form>

@endsection