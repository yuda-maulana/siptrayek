@extends('layout/template')
@section('title', 'Detail PAD')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-15">
            <div class="box">
                <div class="box-header">
                    <a href="/v_pad/edit/{{$pad->id}}" class="btn btn-sm btn-warning pull-right">Edit Data</a>
                    <a href="/v_pad/cetaklaporan/{{$pad->id}}" class="btn btn-sm btn-primary pull-left" target="_blank">Cetak Bukti Setoran</a>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Kode Rekening</th>
                                <td>{{$pad->kod_rek}}</td>
                            </tr>
                            <tr>
                                <th>No Rekening</th>
                                <td>{{$pad->no_rek}}</td>
                            </tr>
                            <tr>
                                <th>Nama Rekening</th>
                                <td>{{$pad->nama_rek}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal</th>
                                <td>{{Carbon\Carbon::parse($pad->tanggal)->isoFormat('D MMMM Y')}}</td>
                            </tr>
                            <tr>
                                <th>No Bukti</th>
                                <td>{{$pad->no_bukti}}</td>
                            </tr>
                            <tr>
                                <th>Grup</th>
                                <td>{{$pad->grup}}</td>
                            </tr>
                            <tr>
                                <th>Urut</th>
                                <td>{{$pad->urut}}</td>
                            </tr>
                            <tr>
                                <th>Uraian</th>
                                <td>{{$pad->uraian}}</td>
                            </tr>
                            <tr>
                                <th>Unit</th>
                                <td>{{$pad->unit}}</td>
                            </tr>
                            <tr>
                                <th>Retribusi</th>
                                <td>@currency($pad->retribusi)</td>
                            </tr>
                            <tr>
                                <th>Jumlah</th>
                                <td>@currency($pad->jumlah)</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="box-footer">
                    <a href="../pad" class="btn btn-success btn-sm ">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection