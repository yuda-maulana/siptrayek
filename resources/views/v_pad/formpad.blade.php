@extends('layout/template')
@section('title', 'Form Cetak PAD')
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
                                <label for="tglawal"></label>
                                <input type="date" name="tglawal" class="form-control" id="tglawal" value="{{old('tglawal')}}">
                                <div class="text-danger">
                                    @error('tglawal')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="" onclick="this.href='/v_pad/cetaklaporan/'+ document.getElementById('tglawal').value" target="_blank"><button class="btn btn-success">Cetak Laporan</button></a>
                    <a href="pad" class="btn btn-danger">Batal</a>
                </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
</section>
@endsection