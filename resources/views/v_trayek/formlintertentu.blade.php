@extends('layout/template')
@section('title', 'Form Realisasi Lintasan Tertentu')
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
                                <label for="lin">Trayek</label>
                                <select class="form-control" name="lin" id="lin">
                                    <option disabled value>Pilih Lintasan</option>
                                    @foreach ($lintrayek as $item)
                                    <option value="{{$item->id}}">{{$item->kode}}:{{$item->lintasan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="" onclick="this.href='/v_trayek/cetaklintertentu/'+ document.getElementById('lin').value" target="_blank"><button class="btn btn-success">Cetak Laporan</button></a>
                    <a href="trayek" class="btn btn-danger">Batal</a>
                </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
</section>
@endsection