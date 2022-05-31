@extends('layout/template')
@section('title', 'Buku Penerimaan')
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
                        <form action="/v_bukubesar/bukubesar" method="get">
                            <div class="input-group input-group-sm" style="width: 220px;">
                                <input type="text" name="search" class="form-control pull-left" placeholder="Cari berdasarkan tahun dan nama rek">
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
                            <th>Tahun</th>
                            <th>Kode Rek</th>
                            <th>Nama Rek</th>
                            <th>Tgl Terima</th>
                            <th>Jumlah Terima</th>
                            <th>Tgl Setor</th>
                            <th>No Setor</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($bukubesar as $data)
                        <tr>
                            <td>{{$data->tahun}}</td>
                            <td>{{$data->kode_rek}}</td>
                            <td>{{$data->nama_rek}}</td>
                            <td>{{Carbon\Carbon::parse($data->tgl_terima)->isoFormat('D MMMM Y')}}</td>
                            <td>@currency($data->jml_terima)</td>
                            <td>{{Carbon\Carbon::parse($data->tgl_setor)->isoFormat('D MMMM Y')}}</td>
                            <td>{{$data->no_setor}}</td>
                            <td>
                                <a href="/v_bukubesar/detail/{{$data->id}}" class="btn btn-sm btn-info">Detail</a>
                                <a href="/v_bukubesar/edit/{{$data->id}}" class="btn btn-sm btn-warning">Edit</a>
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
                        <p>Halaman saat ini : <b>{{$bukubesar->currentPage() }}</b></p>
                        <p>Jumlah Data : <b>{{$bukubesar->total() }}</b></p>
                        <p>Data perhalaman : <b>{{$bukubesar->perPage() }}</b></p>
                        {{$bukubesar->links()}}
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@foreach ($bukubesar as $data)
<div class="modal modal-danger fade" id="delete{{$data->id}}">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{$data->kode_rek}}</h4>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <a href="" class="btn btn-outline pull-left" data-dismiss="modal">Tidak</a>
                <a href="/v_bukubesar/delete/{{$data->id}}" class="btn btn-outline">Ya</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach
@endsection