@extends('layout/template')
@section('title', 'Detail Izin Usaha')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Data Kendaraan</h4><br><br>
                    <a href="/v_usaha/edit/{{$usaha->id}}" class="btn btn-sm btn-warning pull-right">Edit Data</a>
                    <a href="/v_usaha/cetakkartu/{{$usaha->id}}" class="btn btn-sm btn-primary pull-left">Cetak Kartu Izin Usaha</a>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>No. Uji</th>
                                <td>{{$usaha->no_uji}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Terbit</th>
                                <td>{{Carbon\Carbon::parse($usaha->terbit)->isoFormat('D MMMM Y')}}</td>
                            </tr>
                            <tr>
                                <th>No. Kend</th>
                                <td>{{$usaha->no_kend}}</td>
                            </tr>
                            <tr>
                                <th>No. Urut | No. Bend</th>
                                <td>{{$usaha->urut}} / {{$usaha->no_bend}}</td>
                            </tr>
                            <!-- <tr>
                                <th>Status</th>
                                @if (!(strtotime($usaha->tgl_sk) <= time() AND time()>= strtotime($usaha->akhir_sk)))
                                    <td><span class="label label-success">Aktif</span></td>
                                    @else
                                    <td><span class="label label-danger">Tidak Aktif</span></td>
                                    @endif
                            </tr> -->

                            <tr>
                                <th>Nama Pemilik</th>
                                <td>{{$usaha->pemilik}}</td>
                            </tr>
                            <tr>
                                <th>Perusahaan</th>
                                <td>{{$usaha->perusahaan}}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{$usaha->alamat}}</td>
                            </tr>
                            <tr>
                                <th>Kecamatan</th>
                                <td>{{$usaha->kecamatan}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kendaraan</th>
                                <td>{{$usaha->jenis}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Layanan</th>
                                <td>{{$usaha->layanan}}</td>
                            </tr>
                            <tr>
                                <th>Lintasan</th>
                                <td>{{$usaha->lintasan}}</td>
                            </tr>
                            <tr>
                                <th>No. Rangka / Mesin</th>
                                <td>{{$usaha->rangka}} / {{$usaha->mesin}}</td>
                            </tr>
                            <tr>
                                <th>Seat / Barang</th>
                                <td>{{$usaha->orang}} Orang / {{$usaha->barang}} kg</td>
                            </tr>
                            <tr>
                                <th>Merk / Tahun</th>
                                <td>{{$usaha->merk}} / {{$usaha->tahun}}</td>
                            </tr>
                            <tr>
                                <th>JBB</th>
                                <td>{{$usaha->jbb}} Kg</td>
                            </tr>
                            <tr>
                                <th>Seat</th>
                                <td>{{$usaha->orang}} Orang</td>
                            </tr>
                            <tr>
                                <th>Daya Angkut Barang</th>
                                <td>{{$usaha->barang}} Kg</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="box-footer">
                    <a href="../usaha" class="btn btn-success btn-sm ">Kembali</a>
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
                                <td>{{$usaha->no_sk}}</td>
                                <th>Nomor KP</th>
                                <td>{{$usaha->no_kp}}</td>
                            </tr>
                            <tr>
                                <th>Berlaku SK</th>
                                <td>{{Carbon\Carbon::parse($usaha->tgl_sk)->isoFormat('D MMMM Y')}} s/d {{Carbon\Carbon::parse($usaha->akh_sk)->isoFormat('D MMMM Y')}}</td>
                                <th>Berlaku KP</th>
                                <td>{{Carbon\Carbon::parse($usaha->tgl_kp)->isoFormat('D MMMM Y')}} s/d {{Carbon\Carbon::parse($usaha->akh_kp)->isoFormat('D MMMM Y')}}</td>
                            </tr>
                            <tr>
                                <th>Urut KP</th>
                                <td>{{$usaha->urut_kp}}</td>
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
                                <th>Kategori Retribusi</th>
                                <td>{{$usaha->kategori}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$usaha->status}}</td>
                            </tr>
                            <tr>
                                <th>Domisili</th>
                                <td>{{$usaha->domisili}}</td>
                            </tr>
                            <tr>
                                <th>No Kartu</th>
                                <td>{{$usaha->urut_kp}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection