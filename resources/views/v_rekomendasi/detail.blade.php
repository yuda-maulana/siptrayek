@extends('layout/template')
@section('title', 'Detail Rekomendasi')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <a href="/v_rekomendasi/edit/{{$rekomendasi->id}}" class="btn btn-sm btn-warning pull-right">Edit Data</a>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Tanggal</th>
                                <td>{{Carbon\Carbon::parse($rekomendasi->tanggal)->isoFormat('D MMMM Y')}}</td>
                            </tr>
                            <tr>
                                <th>Urut</th>
                                <td>{{$rekomendasi->urut}}</td>
                            </tr>
                            <tr>
                                <th>No. Bend</th>
                                <td>{{$rekomendasi->no_bend}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Pelayanan</th>
                                <td>{{$rekomendasi->layanan}}</td>
                            </tr>
                            <tr>
                                <th>Pemilik</th>
                                <td>{{$rekomendasi->pemilik}}</td>
                            </tr>
                            <tr>
                                <th>Perusahaan</th>
                                <td>{{$rekomendasi->perusahaan}}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{$rekomendasi->alamat}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Permohonan</th>
                                <td>{{$rekomendasi->mohon}}</td>
                            </tr>
                            <tr>
                                <th>Sifat Pelayanan</th>
                                <td>{{$rekomendasi->sifat}}</td>
                            </tr>
                            <tr>
                                <th>Jenis / Jumlah Kendaraan</th>
                                <td>{{$rekomendasi->jenis}} / {{$rekomendasi->jumlah}}</td>
                            </tr>
                            <tr>
                                <th>Trayek Dimohon</th>
                                <td>{{$rekomendasi->trayek}}</td>
                            </tr>
                            <tr>
                                <th>Retribusi</th>
                                <td>@currency($rekomendasi->retri)</td>
                            </tr>
                            <tr>
                                <th>Tanggal Terbit</th>
                                <td>{{Carbon\Carbon::parse($rekomendasi->terbit)->isoFormat('D MMMM Y')}}</td>
                            </tr>
                            <tr>
                                <th>Catatan</th>
                                <td>{{$rekomendasi->catatan}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="box-footer">
                    <a href="../rekomendasi" class="btn btn-success btn-sm ">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection