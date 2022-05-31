@extends('layout/template')
@section('title', 'Tambah Klasifikasi Retribusi Izin Usaha')
@section('content')

<form action="/v_usaha/insertklasifikasi" method="post" enctype="multipart/form-data">
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
                                    <input type="text" name="no_uji" class="form-control" id="no_uji" value="{{old('no_uji')}}">
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
                                    <input type="date" name="terbit" class="form-control" id="terbit" value="{{old('terbit')}}">
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
                                    <input type="text" name="no_kend" class="form-control" id="no_kend" value="{{old('no_kend')}}">
                                    <div class="text-danger">
                                        @error('no_kend')
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
                                    <label for="jbb">JBB</label>
                                    <input type="text" name="jbb" class="form-control" id="jbb" value="{{old('jbb')}}">
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
                                    <label for="orang">Seat</label>
                                    <input type="text" name="orang" class="form-control" id="orang" value="{{old('orang')}}">
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
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="x_katagori">Kategori</label>
                                    <select class="form-control" name="x_katagori" id="x_katagori">
                                        <option disabled value>Pilih Kategori</option>
                                        <option value="Angkutan Penumpang">Angkutan Penumpang</option>
                                        <option value="Angkutan Barang">Angkutan Barang</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="x_kelas">Kelas</label>
                                    <select class="form-control" name="x_kelas" id="x_kelas">
                                        <option disabled value>Pilih Kelas</option>
                                        <option value="Mobil Penumpang (s/d 8 tempat duduk)">Mobil Penumpang (s/d 8 tempat duduk)</option>
                                        <option value="Mobil Bus Kecil (9 s/d 15 tempat duduk)">Mobil Bus Kecil (9 s/d 15 tempat duduk)</option>
                                        <option value="Mobil Bus Sedang (16 s/d 25 tempat duduk)">Mobil Bus Sedang (16 s/d 25 tempat duduk)</option>
                                        <option value="Mobil Bus Besar (26 tempat duduk atau lebih)">Mobil Bus Besar (26 tempat duduk atau lebih)</option>
                                        <option value="JBB s/d 5.000 Kg.">JBB s/d 5.000 Kg.</option>
                                        <option value="JBB 5.001 s/d 8.000 Kg.">JBB 5.001 s/d 8.000 Kg.</option>
                                        <option value="JBB 8.001 s/d 15.000 Kg.">JBB 8.001 s/d 15.000 Kg.</option>
                                        <option value="JBB lebih dari 15.000 Kg.">JBB lebih dari 15.000 Kg.</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="n_ret">Retribusi</label>
                                    <input type="text" name="n_ret" class="form-control" id="n_ret" value="{{old('n_ret')}}">
                                    <div class="text-danger">
                                        @error('n_ret')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-success">Simpan</button>
                        <a href="klasifikasiretri" class="btn btn-danger">Batal</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
@endsection