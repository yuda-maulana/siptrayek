@extends('layout/template')
@section('title', 'User')
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
                    <div class="box-tools">
                        <form action="/v_user/user" method="get">
                            <div class="input-group input-group-sm" style="width: 180px;">
                                <input type="text" name="search" class="form-control" placeholder="Cari berdasarkan nama pemilik">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                        <?php $no = 1; ?>
                        @foreach ($user as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->nip}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->level->role}}</td>
                            <td>
                                @if ($data->foto != '')
                                <img src="{{URL::to('/')}}/foto/{{$data->foto}}" alt="" width="100px">
                                @else
                                <img src="{{URL::to('/')}}/foto/no_image.jpg" alt="" width="100px">
                                @endif
                            </td>
                            <td>
                                <a href="/v_user/detail/{{$data->id}}" class="btn btn-sm btn-info">Detail</a>
                                <a href="/v_user/edit/{{$data->id}}" class="btn btn-sm btn-warning">Edit</a>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$data->id}}">
                                    Hapus
                                </button>

                            </td>
                        </tr>
                        @endforeach
                    </table>

                </div>


            </div>

        </div>
    </div>
</section>

@foreach ($user as $data)
<div class="modal modal-danger fade" id="delete{{$data->id}}">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{$data->name}}</h4>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <a href="" class="btn btn-outline pull-left" data-dismiss="modal">Tidak</a>
                <a href="/v_user/delete/{{$data->id}}" class="btn btn-outline">Ya</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach
@endsection