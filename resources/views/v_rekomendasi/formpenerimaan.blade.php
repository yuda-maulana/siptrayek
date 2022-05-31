@extends('layout/template')
@section('title', 'Form Penerimaan Biaya Retribusi')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <!-- <form role="form"> -->
                <div class="box-body">
                    <div class="row">
                        <form id="myform" name="myform" action="" method="post">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>
                                        <input type="radio" name="group1" value="Tanggal" checked="checked">
                                        Pertanggal
                                    </label>
                                    <br>
                                    <label>
                                        <input type="radio" name="group1" value="Pertanggal">
                                        Tanggal Tertentu
                                    </label>
                                </div>
                            </div>
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
                                <div class="form-group">
                                    <label for="tglakhir"></label>
                                    <input type="date" name="tglakhir" class="form-control" id="tglakhir" value="{{old('tglakhir')}}" disabled="disabled">
                                    <div class="text-danger">
                                        @error('tglakhir')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="" onclick="this.href='/v_rekomendasi/cetakpenerimaan/'+ document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value" target="_blank"><button class="btn btn-success">Cetak Laporan</button></a>
                    <a href="rekomendasi" class="btn btn-danger">Batal</a>
                </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
</section>
<script>
    var form = document.forms['myform'];
    form.group1[0].onfocus = function() {
        form.tglawal.disabled = false;
        form.tglakhir.disabled = true;
    }
    form.group1[1].onfocus = function() {
        form.tglawal.disabled = form.tglakhir.disabled = false;
    }
</script>
@endsection