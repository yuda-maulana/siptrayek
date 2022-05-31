@extends('layout/template')
@section('title', 'Edit Izin Insidentil')
@section('content')
<form action="/v_insidentil/update/{{$insidentil->id}}" method="post" enctype="multipart/form-data">
    @csrf

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <form role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control" value="{{$insidentil->tanggal}}" id="tanggal">
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
                                        <input type="text" name="urut" class="form-control" value="{{$insidentil->urut}}" id="urut">
                                        <div class="text-danger">
                                            @error('urut')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="no_bend">No. Bend</label>
                                        <input type="text" name="no_bend" class="form-control" value="{{$insidentil->no_bend}}" id="no_bend">
                                        <div class="text-danger">
                                            @error('no_bend')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="no_uji">No. Uji</label>
                                        <input type="text" name="no_uji" class="form-control" value="{{$insidentil->no_uji}}" id="no_uji">
                                        <div class="text-danger">
                                            @error('no_uji')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="no_kend">No. Kend</label>
                                        <input type="text" name="no_kend" class="form-control" value="{{$insidentil->no_kend}}" id="no_kend">
                                        <div class="text-danger">
                                            @error('no_kend')
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
                                        <input type="text" name="pemilik" class="form-control" value="{{$insidentil->pemilik}}" id="pemilik">
                                        <div class="text-danger">
                                            @error('pemilik')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="perusahaan">Perusahaan</label>
                                        <input type="text" name="perusahaan" class="form-control" value="{{$insidentil->perusahaan}}" id="perusahaan">
                                        <div class="text-danger">
                                            @error('perusahaan')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" value="{{$insidentil->alamat}}" id="alamat">
                                        <div class="text-danger">
                                            @error('alamat')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="merk">Merk</label>
                                        <input type="text" name="merk" class="form-control" value="{{$insidentil->merk}}" id="merk">
                                        <div class="text-danger">
                                            @error('merk')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="tahun">Tahun</label>
                                        <input type="text" name="tahun" class="form-control" value="{{$insidentil->tahun}}" id="tahun">
                                        <div class="text-danger">
                                            @error('tahun')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="habis_uji">Habis Uji</label>
                                        <input type="date" name="habis_uji" class="form-control" value="{{$insidentil->habis_uji}}" id="habis_uji">
                                        <div class="text-danger">
                                            @error('habis_uji')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="terbit">Terbit</label>
                                        <input type="date" name="terbit" class="form-control" value="{{$insidentil->terbit}}" id="terbit">
                                        <div class="text-danger">
                                            @error('terbit')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="tujuan">Tujuan</label>
                                        <input type="text" name="tujuan" class="form-control" value="{{$insidentil->tujuan}}" id="tujuan">
                                        <div class="text-danger">
                                            @error('tujuan')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="maksud">Maksud</label>
                                        <input type="text" name="maksud" class="form-control" value="{{$insidentil->maksud}}" id="maksud">
                                        <div class="text-danger">
                                            @error('maksud')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="catatan">Catatan</label>
                                        <input type="text" name="catatan" class="form-control" value="{{$insidentil->catatan}}" id="catatan">
                                        <div class="text-danger">
                                            @error('catatan')
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
                                        <input type="text" name="retri" class="form-control" value="{{$insidentil->retri}}" id="retri">
                                        <div class="text-danger">
                                            @error('retri')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="leges">Leges</label>
                                        <input type="text" name="leges" class="form-control" value="{{$insidentil->leges}}" id="leges">
                                        <div class="text-danger">
                                            @error('leges')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="tgl_awal_perjalanan">Tanggal Perjalanan</label>
                                        <input type="date" name="tgl_awal_perjalanan" class="form-control" value="{{$insidentil->tgl_awal_perjalanan}}" id="tgl_awal_perjalanan">
                                        <div class="text-danger">
                                            @error('tgl_awal_perjalanan')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="tgl_akhir_perjalanan">Sampai</label>
                                        <input type="date" name="tgl_akhir_perjalanan" class="form-control" value="{{$insidentil->tgl_akhir_perjalanan}}" id="tgl_akhir_perjalanan">
                                        <div class="text-danger">
                                            @error('tgl_akhir_perjalanan')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button class="btn btn-success">Simpan</button>
                            <a href="../insidentil" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</form>

@endsection