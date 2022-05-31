@extends('layout/template')
@section('title', 'Tambah Izin Khusus')
@section('content')

<form action="/v_khusus/insert" method="post" enctype="multipart/form-data">
    @csrf
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <!-- <form role="form"> -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="terbit">Tanggal Terbit</label>
                                    <input type="date" name="terbit" class="form-control" id="terbit" value="{{old('terbit')}}">
                                    <div class="text-danger">
                                        @error('terbit')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="no_uji">No. Uji</label>
                                    <input type="text" name="no_uji" class="form-control" id="no_uji" value="{{old('no_uji')}}">
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
                                    <input type="text" name="no_kend" class="form-control" id="no_kend" value="{{old('no_kend')}}">
                                    <div class="text-danger">
                                        @error('no_kend')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="no_bend">No. Bend</label>
                                    <input type="text" name="no_bend" class="form-control" id="no_bend" value="{{old('no_bend')}}">
                                    <div class="text-danger">
                                        @error('no_bend')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="urut">No. Urut</label>
                                    <input type="text" name="urut" class="form-control" id="urut" value="{{old('urut')}}">
                                    <div class="text-danger">
                                        @error('urut')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="pemilik">Pemilik</label>
                                    <input type="text" name="pemilik" class="form-control" id="pemilik" value="{{old('pemilik')}}">
                                    <div class="text-danger">
                                        @error('pemilik')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="perusahaan">Perusahaan</label>
                                    <input type="text" name="perusahaan" class="form-control" value="{{old('perusahaan')}}" id="perusahaan">
                                    <div class="text-danger">
                                        @error('perusahaan')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="{{old('alamat')}}" id="alamat">
                                    <div class="text-danger">
                                        @error('alamat')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="pimpinan">Pimpinan</label>
                                    <input type=text name="pimpinan" id="pimpinan" class="form-control" value="{{old('pimpinan')}}" id="pimpinan">
                                    <div class="text-danger">
                                        @error('pimpinan')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="rangka">No. Rangka</label>
                                    <input type="text" name="rangka" class="form-control" id="rangka" value="{{old('rangka')}}">
                                    <div class="text-danger">
                                        @error('rangka')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="mesin">No. Mesin</label>
                                    <input type="text" name="mesin" class="form-control" id="mesin" value="{{old('mesin')}}">
                                    <div class="text-danger">
                                        @error('mesin')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="merk">Merk</label>
                                    <input type="text" name="merk" class="form-control" id="merk" value="{{old('merk')}}">
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
                                    <input type="text" name="tahun" class="form-control" id="tahun" value="{{old('tahun')}}">
                                    <div class="text-danger">
                                        @error('tahun')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="jenis">Jenis Kendaraan</label>
                                    <input type="text" name="jenis" class="form-control" id="jenis" value="{{old('jenis')}}">
                                    <div class="text-danger">
                                        @error('jenis')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="layanan">Jenis Layanan</label>
                                    <input type="text" name="layanan" class="form-control" id="layanan" value="{{old('layanan')}}">
                                    <div class="text-danger">
                                        @error('layanan')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="keperluan">Keperluan</label>
                                    <input type="text" name="keperluan" class="form-control" id="keperluan" value="{{old('keperluan')}}">
                                    <div class="text-danger">
                                        @error('keperluan')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="dy_akt">Daya Angkut</label>
                                    <input type="text" name="dy_akt" class="form-control" id="dy_akt" value="{{old('dy_akt')}}">Kg
                                    <div class="text-danger">
                                        @error('dy_akt')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="catatan">Jenis Permohonan</label>
                                    <input type="text" name="catatan" class="form-control" id="catatan" value="{{old('catatan')}}">
                                    <div class="text-danger">
                                        @error('catatan')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-primary">
                    <!-- <form role="form"> -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="no_sk">Nomor SK</label>
                                    <input type="text" name="no_sk" class="form-control" id="no_sk" value="{{old('no_sk')}}">
                                    <div class="text-danger">
                                        @error('no_sk')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="tgl_sk">Tanggal SK</label>
                                    <input type="date" name="tgl_sk" class="form-control" id="tgl_sk" value="{{old('tgl_sk')}}">
                                    <div class="text-danger">
                                        @error('tgl_sk')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="akhir_sk">Akhir SK</label>
                                    <input type="date" name="akhir_sk" class="form-control" id="akhir_sk" value="{{old('akhir_sk')}}">
                                    <div class="text-danger">
                                        @error('akhir_sk')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="no_kp">Nomor KP</label>
                                    <input type="text" name="no_kp" class="form-control" id="no_kp" value="{{old('no_kp')}}">
                                    <div class="text-danger">
                                        @error('no_kp')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="tgl_kp">Tanggal KP</label>
                                    <input type="date" name="tgl_kp" class="form-control" id="tgl_kp" value="{{old('tgl_kp')}}">
                                    <div class="text-danger">
                                        @error('tgl_kp')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="akhir_kp">Akhir KP</label>
                                    <input type="date" name="akhir_kp" class="form-control" id="akhir_kp" value="{{old('akhir_kp')}}">
                                    <div class="text-danger">
                                        @error('akhir_kp')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-primary">
                    <!-- <form role="form"> -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="retri">Retribusi</label>
                                    <input type="text" name="retri" class="form-control" id="retri" value="{{old('retri')}}">
                                    <div class="text-danger">
                                        @error('retri')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="administrasi">Denda Administrasi</label>
                                    <input type="text" name="administrasi" class="form-control" id="administrasi" value="{{old('administrasi')}}">
                                    <div class="text-danger">
                                        @error('administrasi')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="periode">Denda Periode</label>
                                    <input type="text" name="periode" class="form-control" id="periode" value="{{old('periode')}}">
                                    <div class="text-danger">
                                        @error('periode')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-success">Simpan</button>
                        <a href="khusus" class="btn btn-danger">Batal</a>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </section>
</form>
@endsection