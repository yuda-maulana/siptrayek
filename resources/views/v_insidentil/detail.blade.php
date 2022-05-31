@extends('layout/template')
@section('title', 'Detail Izin Insidentil')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <a href="/v_insidentil/edit/{{$insidentil->id}}" class="btn btn-sm btn-warning pull-right">Edit Data</a>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Tanggal</th>
                                <td>{{Carbon\Carbon::parse($insidentil->tanggal)->isoFormat('D MMMM Y')}}</td>
                            </tr>
                            <tr>
                                <th>No. Urut</th>
                                <td>{{$insidentil->urut}}</td>
                            </tr>
                            <tr>
                                <th>No. Bend</th>
                                <td>{{$insidentil->no_bend}}</td>
                            </tr>
                            <tr>
                                <th>Pemilik</th>
                                <td>{{$insidentil->pemilik}}</td>
                            </tr>
                            <tr>
                                <th>Perusahaan</th>
                                <td>{{$insidentil->perusahaan}}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{$insidentil->alamat}}</td>
                            </tr>
                            <tr>
                                <th>No. Kend</th>
                                <td>{{$insidentil->no_kend}}</td>
                            </tr>
                            <tr>
                                <th>No. Uji</th>
                                <td>{{$insidentil->no_uji}}</td>
                            </tr>
                            <tr>
                                <th>Merk / Tahun</th>
                                <td>{{$insidentil->merk}} / {{$insidentil->tahun}}</td>
                            </tr>
                            <tr>
                                <th>Habis Uji</th>
                                <td>{{Carbon\Carbon::parse($insidentil->habis_uji)->isoFormat('D MMMM Y')}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="box-footer">
                    <a href="../insidentil" class="btn btn-success btn-sm ">Kembali</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Tanggal Perjalanan</th>
                                <td>{{Carbon\Carbon::parse($insidentil->tgl_awal_perjalanan)->isoFormat('D MMMM Y')}} s/d {{Carbon\Carbon::parse($insidentil->tgl_akhir_perjalanan)->isoFormat('D MMMM Y')}}</td>
                            </tr>
                            <tr>
                                <th>Tujuan</th>
                                <td>{{$insidentil->tujuan}}</td>
                            </tr>
                            <tr>
                                <th>Maksud</th>
                                <td>{{$insidentil->maksud}}</td>
                            </tr>
                            <tr>
                                <th>Retribusi</th>
                                <td>@currency($insidentil->retri)</td>
                            </tr>
                            <tr>
                                <th>Leges</th>
                                <td>@currency($insidentil->leges)</td>
                            </tr>
                            <tr>
                                <th>Tanggal Terbit</th>
                                <td>{{Carbon\Carbon::parse($insidentil->terbit)->isoFormat('D MMMM Y')}}</td>
                            </tr>
                            <tr>
                                <th>Catatan</th>
                                <td>{{$insidentil->catatan}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection