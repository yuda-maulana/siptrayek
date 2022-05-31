@extends('layout/template')
@section('title', 'Detail Izin Prinsip')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <a href="/v_prinsip/edit/{{$prinsip->id}}" class="btn btn-sm btn-warning pull-right">Edit Data</a>
                    <a href="/v_prinsip/cetakprinsip/{{$prinsip->id}}" class="btn btn-sm btn-primary pull-left">Cetak Data</a>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Tanggal</th>
                                <td>{{Carbon\Carbon::parse($prinsip->tanggal)->isoFormat('D MMMM Y')}}</td>
                            </tr>
                            <tr>
                                <th>No. Urut</th>
                                <td>{{$prinsip->urut}}</td>
                            </tr>
                            <tr>
                                <th>No. Rekom</th>
                                <td>{{$prinsip->no_rekom}}</td>
                            </tr>
                            <tr>
                                <th>Tgl. Rekom</th>
                                <td>{{Carbon\Carbon::parse($prinsip->tgl_rekom)->isoFormat('D MMMM Y')}}</td>
                            </tr>
                            <tr>
                                <th>No. Bend</th>
                                <td>{{$prinsip->no_bend}}</td>
                            </tr>
                            <tr>
                                <th>Nama Pemohon</th>
                                <td>{{$prinsip->mohon}}</td>
                            </tr>
                            <tr>
                                <th>Nomor Pemohon</th>
                                <td>{{$prinsip->no_mohon}}</td>
                            </tr>
                            <tr>
                                <th>Tgl. Permohonan</th>
                                <td>{{Carbon\Carbon::parse($prinsip->tgl_mohon)->isoFormat('D MMMM Y')}}</td>
                            </tr>
                            <tr>
                                <th>Tgl. Terbit</th>
                                <td>{{Carbon\Carbon::parse($prinsip->terbit)->isoFormat('D MMMM Y')}}</td>
                            </tr>
                            <tr>
                                <th>Retribusi</th>
                                <td>@currency($prinsip->retri)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="box-footer">
                    <a href="../prinsip" class="btn btn-success btn-sm ">Kembali</a>
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
                                <th>Nama Pemilik</th>
                                <td>{{$prinsip->pemilik}}</td>
                            </tr>
                            <tr>
                                <th>Perusahaan</th>
                                <td>{{$prinsip->perusahaan}}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{$prinsip->alamat}}</td>
                            </tr>
                            <tr>
                                <th>Trayek</th>
                                <td>{{$prinsip->trayek}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kendaraan</th>
                                <td>{{$prinsip->jenis}}</td>
                            </tr>
                            <tr>
                                <th>Daya Angkut</th>
                                <td>{{$prinsip->orang}} Orang</td>
                            </tr>
                            <tr>
                                <th>Merk / Tahun</th>
                                <td>{{$prinsip->merk}} / {{$prinsip->tahun}}</td>
                            </tr>
                            <tr>
                                <th>Catatan</th>
                                <td>{{$prinsip->catatan}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection