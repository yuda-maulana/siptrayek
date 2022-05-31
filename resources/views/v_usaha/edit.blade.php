@extends('layout/template')
@section('title', 'Edit Izin Usaha')
@section('content')

<form action="/v_usaha/update/{{$usaha->id}}" method="post" enctype="multipart/form-data">
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
                                    <label for="no_uji">No. Uji</label>
                                    <input type="text" name="no_uji" class="form-control" id="no_uji" value="{{$usaha->no_uji}}">
                                    <div class="text-danger">
                                        @error('no_uji')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="terbit">Tanggal Terbit</label>
                                    <input type="date" name="terbit" class="form-control" id="terbit" value="{{$usaha->terbit}}">
                                    <div class="text-danger">
                                        @error('terbit')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="no_kend">No. Kend</label>
                                    <input type="text" name="no_kend" class="form-control" id="no_kend" value="{{$usaha->no_kend}}">
                                    <div class="text-danger">
                                        @error('no_kend')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="urut">No. Urut</label>
                                    <input type="text" name="urut" class="form-control" id="urut" value="{{$usaha->urut}}">
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
                                    <input type="text" name="pemilik" class="form-control" id="pemilik" value="{{$usaha->pemilik}}">
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
                                    <input type="text" name="perusahaan" class="form-control" value="{{$usaha->perusahaan}}" id="perusahaan">
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
                                    <input type="text" name="alamat" class="form-control" value="{{$usaha->alamat}}" id="alamat">
                                    <div class="text-danger">
                                        @error('alamat')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="kecamatan">Kecamatan</label>
                                    <input type=text name="kecamatan" id="kecamatan" class="form-control" value="{{$usaha->kecamatan}}" id="kecamatan">
                                    <div class="text-danger">
                                        @error('kecamatan')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="jenis">Jenis Kendaraan</label>
                                    <input type="text" name="jenis" class="form-control" id="jenis" value="{{$usaha->jenis}}">
                                    <div class="text-danger">
                                        @error('jenis')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="layanan">Jenis Layanan</label>
                                    <input type="text" name="layanan" class="form-control" id="layanan" value="{{$usaha->layanan}}">
                                    <div class="text-danger">
                                        @error('layanan')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="lintasan">Lintasan Trayek</label>
                                    <input type="text" name="lintasan" class="form-control" id="lintasan" value="{{$usaha->lintasan}}">
                                    <div class="text-danger">
                                        @error('lintasan')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="rangka">No. Rangka</label>
                                    <input type="text" name="rangka" class="form-control" id="rangka" value="{{$usaha->rangka}}">
                                    <div class="text-danger">
                                        @error('rangka')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="mesin">No. Mesin</label>
                                    <input type="text" name="mesin" class="form-control" id="mesin" value="{{$usaha->mesin}}">
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
                                    <input type="text" name="merk" class="form-control" id="merk" value="{{$usaha->merk}}">
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
                                    <input type="text" name="tahun" class="form-control" id="tahun" value="{{$usaha->tahun}}">
                                    <div class="text-danger">
                                        @error('tahun')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="jbb">JBB</label>
                                    <input type="text" name="jbb" class="form-control" id="jbb" value="{{$usaha->jbb}}">
                                    <p>Kg</p>
                                    <div class="text-danger">
                                        @error('jbb')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="barang">Barang</label>
                                    <input type="text" name="barang" class="form-control" id="barang" value="{{$usaha->barang}}">
                                    <p>Kg</p>
                                    <div class="text-danger">
                                        @error('barang')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="orang">Seat</label>
                                    <input type="text" name="orang" class="form-control" id="orang" value="{{$usaha->orang}}">
                                    <p>Orang</p>
                                    <div class="text-danger">
                                        @error('orang')
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
                                    <input type="text" name="no_sk" class="form-control" id="no_sk" value="{{$usaha->no_sk}}">
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
                                    <input type="date" name="tgl_sk" class="form-control" id="tgl_sk" value="{{$usaha->tgl_sk}}">
                                    <div class="text-danger">
                                        @error('tgl_sk')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="akh_sk">Akhir SK</label>
                                    <input type="date" name="akh_sk" class="form-control" id="akh_sk" value="{{$usaha->akh_sk}}">
                                    <div class="text-danger">
                                        @error('akh_sk')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="no_kp">Nomor KP</label>
                                    <input type="text" name="no_kp" class="form-control" id="no_kp" value="{{$usaha->no_kp}}">
                                    <div class="text-danger">
                                        @error('no_kp')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="urut_kp">Urut KP</label>
                                    <input type="text" name="urut_kp" class="form-control" id="urut_kp" value="{{$usaha->urut_kp}}">
                                    <div class="text-danger">
                                        @error('urut_kp')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="tgl_kp">Tanggal KP</label>
                                    <input type="date" name="tgl_kp" class="form-control" id="tgl_kp" value="{{$usaha->tgl_kp}}">
                                    <div class="text-danger">
                                        @error('tgl_kp')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="akh_kp">Akhir KP</label>
                                    <input type="date" name="akh_kp" class="form-control" id="akh_kp" value="{{$usaha->akh_kp}}">
                                    <div class="text-danger">
                                        @error('akh_kp')
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
                                    <label for="kategori">Kategori Retribusi</label>
                                    <select class="form-control" name="kategori" id="kategori">
                                        <option value="{{$usaha->kategori}}">{{$usaha->kategori}}</option>
                                        <option value="Angkutan Penumpang">Angkutan Penumpang</option>
                                        <option value="Aangkutan Barang">Aangkutan Barang</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="{{$usaha->status}}">{{$usaha->status}}</option>
                                        <option value="UMUM">UMUM</option>
                                        <option value="TIDAK UMUM">TIDAK UMUM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="domisili">Domisili</label>
                                    <select class="form-control" name="domisili" id="domisili">
                                        <option value="{{$usaha->domisili}}">{{$usaha->domisili}}</option>
                                        <option value="DALAM KOTA">DALAM KOTA</option>
                                        <option value="LUAR KOTA">LUAR KOTA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="no_bend">No. Bend</label>
                                    <input type="text" name="no_bend" class="form-control" id="no_bend" value="{{$usaha->no_bend}}">
                                    <div class="text-danger">
                                        @error('no_bend')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="no_kartu">No Kartu</label>
                                    <input type="text" name="no_kartu" class="form-control" id="no_kartu" value="{{$usaha->no_kartu}}">
                                    <div class="text-danger">
                                        @error('no_kartu')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-success">Simpan</button>
                        <a href="usaha" class="btn btn-danger">Batal</a>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </section>
</form>
@endsection