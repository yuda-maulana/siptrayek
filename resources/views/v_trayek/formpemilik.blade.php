@extends('layout/template')
@section('title', 'Form Realisasi Berdasarkan Pemilik')
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
                                <label for="pmlk">Pemilik</label>
                                <input type="text" name="pmlk" class="form-control" id="pmlk" value="{{old('pmlk')}}">
                                <div class="text-danger">
                                    @error('pmlk')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="" onclick="this.href='/v_trayek/cetakpemilik/'+ document.getElementById('pmlk').value" target="_blank"><button class="btn btn-success">Cetak Laporan</button></a>
                    <a href="trayek" class="btn btn-danger">Batal</a>
                </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
</section>
@endsection