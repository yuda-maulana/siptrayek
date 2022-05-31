@extends('layout/template')
@section('title', 'Tambah Target Retribusi')
@section('content')

<form action="/v_target/insert" method="post" enctype="multipart/form-data">
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
                                    <label for="kode_rek">Kode Rek</label>
                                    <input type="text" name="kode_rek" class="form-control" id="kode_rek" value="{{old('kode_rek')}}">
                                    <div class="text-danger">
                                        @error('kode_rek')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama_rek">Nama Rek</label>
                                    <input type="text" name="nama_rek" class="form-control" id="nama_rek" value="{{old('nama_rek')}}">
                                    <div class="text-danger">
                                        @error('nama_rek')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="target1">Target Awal</label>
                                    <input type="text" name="target1" class="form-control" id="target1" value="{{old('target1')}}">
                                    <div class="text-danger">
                                        @error('target1')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="target2">Target Perbulan</label>
                                    <input type="text" name="target2" class="form-control" id="target2" value="{{old('target2')}}">
                                    <div class="text-danger">
                                        @error('target2')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="target3">Target Akhir</label>
                                    <input type="text" name="target3" class="form-control" id="target3" value="{{old('target3')}}">
                                    <div class="text-danger">
                                        @error('target3')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
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
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-success">Simpan</button>
                        <a href="target" class="btn btn-danger">Batal</a>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </section>
</form>

@endsection