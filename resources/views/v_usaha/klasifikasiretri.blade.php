@extends('layout/template')
@section('title', 'Klasifikasi Retribusi Izin Usaha')
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
                    <a href="addklasifikasi" class="btn btn-success btn-sm">Tambah Data</a>
                    <a href="formklasifikasiglobal" class="btn btn-info btn-sm">Cetak Klasifikasi Retribusi</a>
                    <div class="box-tools">
                        <br>
                        <form action="/v_usaha/klasifikasiretri" method="get">
                            <div class="input-group input-group-sm" style="width: 300px;">
                                <input type="text" name="search" class="form-control" placeholder="Cari berdasarkan nama pemilik, kelas dan kategori">
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
                            <th>No Uji / No Kend</th>
                            <th>Terbit</th>
                            <th>Pemilik</th>
                            <th>Kelas</th>
                            <th>Kategori</th>
                            <th>JBB (Kg) / Seat (Orang)</th>
                            <th>Retribusi</th>
                            <th>Aksi</th>
                        </tr>
                        <?php $no = 1; ?>
                        @foreach ($klsusaha as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->no_uji}} / {{$data->no_kend}}</td>
                            <td>{{Carbon\Carbon::parse($data->terbit)->isoFormat('D MMMM Y')}}</td>
                            <td>{{$data->pemilik}}</td>
                            <td>{{$data->x_kelas}}</td>
                            <td>{{$data->x_katagori}}</td>
                            <td>{{$data->jbb}} / {{$data->orang}}</td>
                            <td>@currency($data->n_ret)</td>
                            <td>
                                <!-- <a href="/v_usaha/detail/{{$data->id}}" class="btn btn-sm btn-info">Detail</a> -->
                                <a href="/v_usaha/editklasifikasi/{{$data->id}}" class="btn btn-sm btn-warning">Edit</a>
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
                        <p>Halaman saat ini : <b>{{$klsusaha->currentPage() }}</b></p>
                        <p>Jumlah Data : <b>{{$klsusaha->total() }}</b></p>
                        <p>Data perhalaman : <b>{{$klsusaha->perPage() }}</b></p>
                        {{$klsusaha->links()}}
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@foreach ($klsusaha as $data)
<div class="modal modal-danger fade" id="delete{{$data->id}}">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{$data->pemilik}}</h4>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <a href="" class="btn btn-outline pull-left" data-dismiss="modal">Tidak</a>
                <a href="/v_usaha/deleteklasifikasi/{{$data->id}}" class="btn btn-outline">Ya</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach
@endsection