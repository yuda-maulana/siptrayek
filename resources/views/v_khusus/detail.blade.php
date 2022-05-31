@extends('layout/template')
@section('title', 'Detail Izin Khusus')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Data Kendaraan</h4>
                    <a href="/v_khusus/edit/{{$khusus->id}}" class="btn btn-sm btn-warning pull-right">Edit Data</a>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>No. Urut</th>
                                <td>{{$khusus->urut}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Terbit</th>
                                <td>{{Carbon\Carbon::parse($khusus->terbit)->isoFormat('D MMMM Y')}}</td>
                            </tr>
                            <!-- <tr>
                                <th>Status</th>
                                @if (!(strtotime($khusus->tgl_sk) <= time() AND time()>= strtotime($khusus->akhir_sk)))
                                    <td><span class="label label-success">Aktif</span></td>
                                    @else
                                    <td><span class="label label-danger">Tidak Aktif</span></td>
                                    @endif
                            </tr> -->
                            <tr>
                                <th>No. Uji / No. Kend / No. Bend</th>
                                <td>{{$khusus->no_uji}} / {{$khusus->no_kend}} / {{$khusus->no_bend}}</td>
                            </tr>
                            <tr>
                                <th>Nama Pemilik</th>
                                <td>{{$khusus->pemilik}}</td>
                            </tr>
                            <tr>
                                <th>Perusahaan</th>
                                <td>{{$khusus->perusahaan}}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{$khusus->alamat}}</td>
                            </tr>
                            <tr>
                                <th>Pimpinan</th>
                                <td>{{$khusus->pimpinan}}</td>
                            </tr>
                            <tr>
                                <th>No. Rangka / Mesin</th>
                                <td>{{$khusus->rangka}} / {{$khusus->mesin}}</td>
                            </tr>
                            <tr>
                                <th>Daya Angkut</th>
                                <td>{{$khusus->dy_akt}} kg</td>
                            </tr>
                            <tr>
                                <th>Merk / Tahun</th>
                                <td>{{$khusus->merk}} / {{$khusus->tahun}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kendaraan</th>
                                <td>{{$khusus->jenis}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Layanan</th>
                                <td>{{$khusus->layanan}}</td>
                            </tr>
                            <tr>
                                <th>Keperluan</th>
                                <td>{{$khusus->keperluan}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Permohonan</th>
                                <td>{{$khusus->catatan}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="box-footer">
                    <a href="../khusus" class="btn btn-success btn-sm ">Kembali</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Surat Keputusan dan Kartu Pengawasan</h4>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Nomor SK</th>
                                <td>{{$khusus->no_sk}}</td>
                                <th>Nomor KP</th>
                                <td>{{$khusus->no_kp}}</td>
                            </tr>
                            <tr>
                                <th>Berlaku SK</th>
                                <td>{{Carbon\Carbon::parse($khusus->tgl_sk)->isoFormat('D MMMM Y')}} s/d {{Carbon\Carbon::parse($khusus->akhir_sk)->isoFormat('D MMMM Y')}}</td>
                                <th>Berlaku KP</th>
                                <td>{{Carbon\Carbon::parse($khusus->tgl_kp)->isoFormat('D MMMM Y')}} s/d {{Carbon\Carbon::parse($khusus->akhir_kp)->isoFormat('D MMMM Y')}}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Uraian Biaya</h4>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Retribusi</th>
                                <td>@currency($khusus->retri)</td>
                            </tr>
                            <tr>
                                <th>Denda Periode</th>
                                <td>@currency($khusus->periode)</td>
                            </tr>
                            <tr>
                                <th>Denda Adm.</th>
                                <td>@currency($khusus->administrasi)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection