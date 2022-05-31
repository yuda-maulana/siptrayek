@extends('layout/template')
@section('title', 'Detail Lintasan Trayek')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-15">
            <div class="box">
                <div class="box-header">
                    <a href="/v_lintrayek/edit/{{$lintrayek->id}}" class="btn btn-sm btn-warning">Edit Data</a>
                    <a href="/v_lintrayek/printlintrayek/{{$lintrayek->id}}" class="btn btn-sm btn-info pull-right" target="_blank">Cetak Data</a>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Kode Lintasan</th>
                                <td>{{$lintrayek->kode}}</td>
                            </tr>
                            <tr>
                                <th>Lintasan Trayek</th>
                                <td>{{$lintrayek->lintasan}}</td>
                            </tr>
                            <tr>
                                <th>Alokasi</th>
                                <td>{{$lintrayek->alokasi}}</td>
                            </tr>
                            <tr>
                                <th>Realisasi</th>
                                <td>{{$lintrayek->realisasi}}</td>
                            </tr>
                            <tr>
                                <th>Aktif</th>
                                <td>{{$lintrayek->aktif}}</td>
                            </tr>
                            <tr>
                                <th>Non Aktif</th>
                                <td>{{$lintrayek->nonaktif}}</td>
                            </tr>
                            <tr>
                                <th>Sisa Alokasi</th>
                                <td>{{$lintrayek->alokasi-$lintrayek->realisasi}}</td>
                            </tr>
                            <tr>
                                <th>Rute</th>
                                <td>{{$lintrayek->rute}}</td>
                            </tr>
                            <tr>
                                <th>Jenis</th>
                                <td>{{$lintrayek->jenis}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="box-footer">
                    <a href="../lintrayek" class="btn btn-success btn-sm ">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection