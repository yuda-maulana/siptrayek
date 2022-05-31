@extends('layout/template')
@section('title', 'Detail Buku Penerimaan')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-15">
            <div class="box">
                <div class="box-header">
                    <a href="/v_bukubesar/edit/{{$bukubesar->id}}" class="btn btn-sm btn-warning pull-right">Edit Data</a>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-sm">Cetak Laporan</button>
                        <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/v_bukubesar/cetakharianpenerimaan/{{$bukubesar->id}}" target="_blank">Cetak Harian</a></li>
                            <li><a href="/v_bukubesar/cetakbulananpenerimaan/{{$bukubesar->id}}" target="_blank">Cetak Perbulan</a></li>
                        </ul>
                    </div>
                    <!-- <a href="/v_bukubesar/cetakharianpenerimaan/{{$bukubesar->id}}" class="btn btn-sm btn-info pull-left">Cetak Harian</a>
                    <a href="/v_bukubesar/cetakbulananpenerimaan/{{$bukubesar->id}}" class="btn btn-sm btn-primary pull-left">Cetak Perbulan</a> -->
                </div>
                <div class="box-body no-bukubesarding">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Tahun / Target</th>
                                <td>{{$bukubesar->tahun}} / @currency($bukubesar->target->target3)</td>
                            </tr>
                            <tr>
                                <th>Kode Rekening</th>
                                <td>{{$bukubesar->kode_rek}}</td>
                            </tr>

                            <tr>
                                <th>Nama Rekening</th>
                                <td>{{$bukubesar->nama_rek}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Terima</th>
                                <td>{{Carbon\Carbon::parse($bukubesar->tgl_terima)->isoFormat('D MMMM Y')}}</td>
                            </tr>
                            <tr>
                                <th>Jumlah Terima</th>
                                <td>@currency($bukubesar->jml_terima)</td>
                            </tr>
                            <tr>
                                <th>Tanggal Setor</th>
                                <td>{{Carbon\Carbon::parse($bukubesar->tgl_setor)->isoFormat('D MMMM Y')}}</td>
                            </tr>
                            <tr>
                                <th>No Setor</th>
                                <td>{{$bukubesar->no_setor}}</td>
                            </tr>
                            <tr>
                                <th>Jmlh Tgl Ini</th>
                                <td>@currency($bukubesar->jm_tg_i)</td>
                            </tr>
                            <tr>
                                <th>Jmlh Tgl Lalu</th>
                                <td>@currency($bukubesar->jm_tg_l)</td>
                            </tr>
                            <tr>
                                <th>Jmlh s.d Tgl Ini</th>
                                <td>@currency($bukubesar->jm_stg_i)</td>
                            </tr>
                            <tr>
                                <th>Jmlh Bulan Ini</th>
                                <td>@currency($bukubesar->jm_bl_i)</td>
                            </tr>
                            <tr>
                                <th>Jmlh Bulan Lalu</th>
                                <td>@currency($bukubesar->jm_bl_l)</td>
                            </tr>
                            <tr>
                                <th>Jmlh s.d Bulan Ini</th>
                                <td>@currency($bukubesar->jm_sbl_i)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="box-footer">
                    <a href="../bukubesar" class="btn btn-success btn-sm ">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection