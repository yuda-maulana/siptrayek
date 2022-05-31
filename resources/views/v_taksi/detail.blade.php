@extends('layout/template')
@section('title', 'Detail Izin Operasi Taksi')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Data Kendaraan</h4>
                    <a href="/v_taksi/edit/{{$taksi->id}}" class="btn btn-sm btn-warning pull-right">Edit Data</a>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>No. Induk</th>
                                <td>{{$taksi->urut}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Terbit</th>
                                <td>{{Carbon\Carbon::parse($taksi->terbit)->isoFormat('D MMMM Y')}}</td>
                            </tr>
                            <!-- <tr>
                                <th>Status</th>
                                @if (!(strtotime($taksi->tgl_sk) <= time() AND time()>= strtotime($taksi->akhir_sk)))
                                    <td><span class="label label-success">Aktif</span></td>
                                    @else
                                    <td><span class="label label-danger">Tidak Aktif</span></td>
                                    @endif
                            </tr> -->
                            <tr>
                                <th>No. Uji / No. Kend / No. Bend</th>
                                <td>{{$taksi->no_uji}} / {{$taksi->no_kend}} / {{$taksi->no_bend}}</td>
                            </tr>
                            <tr>
                                <th>Nama Pemilik</th>
                                <td>{{$taksi->pemilik}}</td>
                            </tr>
                            <tr>
                                <th>Perusahaan</th>
                                <td>{{$taksi->perusahaan}}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{$taksi->alamat}}</td>
                            </tr>
                            <tr>
                                <th>Pimpinan</th>
                                <td>{{$taksi->pimpinan}}</td>
                            </tr>
                            <tr>
                                <th>No. Rangka / Mesin</th>
                                <td>{{$taksi->rangka}} / {{$taksi->mesin}}</td>
                            </tr>
                            <tr>
                                <th>Seat / Barang</th>
                                <td>{{$taksi->orang}} Orang / {{$taksi->barang}} kg</td>
                            </tr>
                            <tr>
                                <th>Merk / Tahun</th>
                                <td>{{$taksi->merk}} / {{$taksi->tahun}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kendaraan</th>
                                <td>{{$taksi->jenis_kendaraan}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="box-footer">
                    <a href="../taksi" class="btn btn-success btn-sm ">Kembali</a>
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
                                <td>{{$taksi->no_sk}} | <a href="../cetaksk/{{$taksi->id}}" target="_blank" class="btn btn-info btn-sm ">Cetak SK</a></td>
                                <th>Nomor KP</th>
                                <td>{{$taksi->no_kp}} | <a href="../cetakkp/{{$taksi->id}}" target="_blank" class="btn btn-info btn-sm ">Cetak KP</a></td>
                            </tr>
                            <tr>
                                <th>Berlaku SK</th>
                                <td>{{Carbon\Carbon::parse($taksi->tgl_sk)->isoFormat('D MMMM Y')}} s/d {{Carbon\Carbon::parse($taksi->akhir_sk)->isoFormat('D MMMM Y')}}</td>
                                <th>Berlaku KP</th>
                                <td>{{Carbon\Carbon::parse($taksi->tgl_kp)->isoFormat('D MMMM Y')}} s/d {{Carbon\Carbon::parse($taksi->akhir_kp)->isoFormat('D MMMM Y')}}</td>
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
                                <td>@currency($taksi->retri)</td>
                            </tr>
                            <tr>
                                <th>Denda Periode</th>
                                <td>@currency($taksi->periode)</td>
                            </tr>
                            <tr>
                                <th>Denda Adm.</th>
                                <td>@currency($taksi->administrasi)</td>
                            </tr>
                        </tbody>
                    </table>
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
                                <th>Jenis Permohonan</th>
                                <td>{{$taksi->catatan}}</td>
                            </tr>
                            <tr>
                                <th>Keterangan</th>
                                <td>{{$taksi->ket}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection