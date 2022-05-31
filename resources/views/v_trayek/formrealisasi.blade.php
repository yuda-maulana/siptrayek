@extends('layout/template')
@section('title', 'Form Relisasi Izin Trayek')
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
                                        <input type="radio" name="group1" value="lintasantertentu" checked="checked">
                                        Lintasan Tertentu
                                    </label>
                                    <br>
                                    <label>
                                        <input type="radio" name="group1" value="Perusahaan Tertentu">
                                        Perusahaan Tertentu
                                    </label>
                                    <br>
                                    <label>
                                        <input type="radio" name="group1" value="Pemilik Tertentu">
                                        Pemilik Tertentu
                                    </label>
                                    <br>
                                    <label>
                                        <input type="radio" name="group1" value="Seluruh Lintasan">
                                        Seluruh Lintasan
                                    </label>
                                    <br>
                                    <label>
                                        <input type="radio" name="group1" value="Angkutan Kota">
                                        Angkutan Kota
                                    </label>
                                    <br>
                                    <label>
                                        <input type="radio" name="group1" value="Angkutan Kota">
                                        Mobil Penumpang
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="lintrayek_id">Trayek</label>
                                    <select class="form-control" name="lintrayek_id" id="lintrayek_id">
                                        <option disabled value>Pilih Lintasan</option>
                                        @foreach ($lintrayek as $item)
                                        <option value="{{$item->id}}">{{$item->kode}}:{{$item->lintasan}}</option>
                                        @endforeach
                                    </select>
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
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="" onclick="this.href='/v_rekomendasi/cetaklaporan/'+ document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value" target="_blank"><button class="btn btn-success">Cetak Laporan</button></a>
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
        form.lintrayek_id.disabled = false;
        form.pemilik.disabled = form.perusahaan.disabled = true;
    }
    form.group1[1].onfocus = function() {
        form.perusahaan.disabled = false;
        form.pemilik.disabled = form.lintrayek_id.disabled = true;
    }
    form.group1[2].onfocus = function() {
        form.pemilik.disabled = false;
        form.perusahaan.disabled = form.lintrayek_id.disabled = true;
    }
</script>
@endsection