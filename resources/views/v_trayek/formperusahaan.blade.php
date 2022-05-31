@extends('layout/template')
@section('title', 'Form Realisasi Berdasarkan Perusahaan')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <!-- <form role="form"> -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="prshaan">Perusahaan</label>
                                <input type="text" name="prshaan" class="form-control" id="prshaan" value="{{old('prshaan')}}">
                                <div class="text-danger">
                                    @error('prshaan')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="" onclick="this.href='/v_trayek/cetakperusahaan/'+ document.getElementById('prshaan').value" target="_blank"><button class="btn btn-success">Cetak Laporan</button></a>
                    <a href="trayek" class="btn btn-danger">Batal</a>
                </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
</section>
@endsection