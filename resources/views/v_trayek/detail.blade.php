@extends('layout/template')
@section('title', 'Detail Lintasan Trayek')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Data Kendaraan</h4>
                    <a href="/v_trayek/edit/{{$trayek->id}}" class="btn btn-sm btn-warning pull-right">Edit Data</a>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Tanggal Terbit</th>
                                <td>{{Carbon\Carbon::parse($trayek->terbit)->isoFormat('D MMMM Y')}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                @if (!(strtotime($trayek->tgl_sk) <= time() AND time()>= strtotime($trayek->akhir_sk)))
                                    <td><span class="label label-success">Aktif</span></td>
                                    @else
                                    <td><span class="label label-danger">Tidak Aktif</span></td>
                                    @endif
                            </tr>
                            <tr>
                                <th>No. Urut</th>
                                <td>{{$trayek->urut}}</td>
                            </tr>
                            <tr>
                                <th>Lintasan Trayek</th>
                                <td>{{$trayek->lintrayek->kode}} : {{$trayek->lintrayek->lintasan}}</td>
                            </tr>
                            <tr>
                                <th>Alokasi</th>
                                <td>{{$trayek->lintrayek->alokasi}}</td>
                            </tr>
                            <tr>
                                <th>No. Uji / No. Kend / No. Bend</th>
                                <td>{{$trayek->no_uji}} / {{$trayek->no_kend}} / {{$trayek->no_bend}}</td>
                            </tr>
                            <tr>
                                <th>Nama Pemilik</th>
                                <td>{{$trayek->pemilik}}</td>
                            </tr>
                            <tr>
                                <th>Perusahaan</th>
                                <td>{{$trayek->perusahaan}}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{$trayek->alamat}}</td>
                            </tr>
                            <tr>
                                <th>Pimpinan</th>
                                <td>{{$trayek->pimpinan}}</td>
                            </tr>
                            <tr>
                                <th>No. Rangka / Mesin</th>
                                <td>{{$trayek->no_rangka}} / {{$trayek->mesin}}</td>
                            </tr>
                            <tr>
                                <th>Seat / Barang</th>
                                <td>{{$trayek->seat}} Orang / {{$trayek->barang}} kg</td>
                            </tr>
                            <tr>
                                <th>Merk / Tahun</th>
                                <td>{{$trayek->merk}} / {{$trayek->tahun}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kendaraan</th>
                                <td>{{$trayek->jeniskend->jnskend}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="box-footer">
                    <a href="../trayek" class="btn btn-success btn-sm ">Kembali</a>
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
                                <td>{{$trayek->no_sk}} | <a href="../cetaksk/{{$trayek->id}}" target="_blank" class="btn btn-info btn-sm ">Cetak SK</a></td>
                                <th>Nomor KP</th>
                                <td>{{$trayek->no_kp}} | <a href="../cetakkp/{{$trayek->id}}" target="_blank" class="btn btn-info btn-sm ">Cetak KP</a></td>
                            </tr>
                            <tr>
                                <th>Berlaku SK</th>
                                <td>{{Carbon\Carbon::parse($trayek->tgl_sk)->isoFormat('D MMMM Y')}} s/d {{Carbon\Carbon::parse($trayek->akhir_sk)->isoFormat('D MMMM Y')}}</td>
                                <th>Berlaku KP</th>
                                <td>{{Carbon\Carbon::parse($trayek->tgl_kp)->isoFormat('D MMMM Y')}} s/d {{Carbon\Carbon::parse($trayek->akhir_kp)->isoFormat('D MMMM Y')}}</td>
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
                                <th>Retribusi SK</th>
                                <td>@currency($trayek->ret_sk)</td>
                            </tr>
                            <tr>
                                <th>Retribusi KP</th>
                                <td>@currency($trayek->ret_kp)</td>
                            </tr>
                            <tr>
                                <th>Total Retribusi</th>
                                <td>@currency($trayek->ret_sk+$trayek->ret_kp)</td>
                            </tr>
                            <tr>
                                <th>Denda Periode</th>
                                <td>@currency($trayek->denda_periode)</td>
                            </tr>
                            <tr>
                                <th>Denda Adm.</th>
                                <td>@currency($trayek->denda_admin)</td>
                            </tr>
                            <tr>
                                <th>Jumlah Total</th>
                                <td>@currency($trayek->ret_sk+$trayek->ret_kp+$trayek->denda_periode+$trayek->denda_admin)</td>
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
                                <td>{{$trayek->catatan}}</td>
                            </tr>
                            <tr>
                                <th>Keterangan</th>
                                <td>{{$trayek->ket}} {{$trayek->ket1}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection