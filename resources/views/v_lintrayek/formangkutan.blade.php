@extends('layout/template')
@section('title', 'Form Realisasi Angkutan')
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
                                <label for="jns">Jenis</label>
                                <select class="form-control" name="jns" id="jns">
                                    <option disabled value>Pilih Lintasan</option>
                                    <option value="Angkutan Kota">Angkutan Kota</option>
                                    <option value="Mobil Penumpang">Mobil Penumpang</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="" onclick="this.href='/v_lintrayek/printangkutankota/'+ document.getElementById('jns').value" target="_blank"><button class="btn btn-success">Cetak Laporan</button></a>
                    <a href="lintrayek" class="btn btn-danger">Batal</a>
                </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
</section>
@endsection