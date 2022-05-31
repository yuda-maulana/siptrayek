@extends('layout/template')
@section('title', 'PAD TRAYEK')
@section('content')

@if (session('pesan'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
    {{session('pesan')}}
</div>
@endif
<section class="content">
    <div class="row">
        <div class="col-xs-15">
            <div class="box">
                <div class="box-header">
                    <a href="add" class="btn btn-success btn-sm">Tambah Data</a>
                    <!-- </div>
                <div class="box-header"> -->
                    <div class="box-tools">
                        <form action="/v_pad/pad" method="get">
                            <div class="input-group input-group-sm" style="width: 220px;">
                                <input type="text" name="search" class="form-control pull-left" placeholder="Cari berdasarkan grup, no rek, uraian, no bukti">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>No</th>
                            <th>Kode Rek</th>
                            <th>No Rek</th>
                            <th>Uraian</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                        <?php $no = 1; ?>
                        @foreach ($pad as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->kod_rek}}</td>
                            <td>{{$data->no_rek}}</td>
                            <td>{{$data->uraian}}</td>
                            <td>{{Carbon\Carbon::parse($data->tanggal)->isoFormat('D MMMM Y')}}</td>
                            <td>
                                <a href="/v_pad/detail/{{$data->id}}" class="btn btn-sm btn-info">Detail</a>
                                <a href="/v_pad/edit/{{$data->id}}" class="btn btn-sm btn-warning">Edit</a>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$data->id}}">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="box-footer clearfix">
                    <div class="d-flex justify-content-center">
                        <p>Halaman saat ini : <b>{{$pad->currentPage() }}</b></p>
                        <p>Jumlah Data : <b>{{$pad->total() }}</b></p>
                        <p>Data perhalaman : <b>{{$pad->perPage() }}</b></p>
                        {{$pad->links()}}
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@foreach ($pad as $data)
<div class="modal modal-danger fade" id="delete{{$data->id}}">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{$data->kod_rek}}</h4>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <a href="" class="btn btn-outline pull-left" data-dismiss="modal">Tidak</a>
                <a href="/v_pad/delete/{{$data->id}}" class="btn btn-outline">Ya</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach
@endsection