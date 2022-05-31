<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izin Trayek | Laporan Realisasi Pemilik Tertentu</title>
    <link rel="icon" href="{{asset('logo')}}/dishub.png" width="50px">
</head>

<body onload="window.print()">
    <div class="form-group">
        <h2 class="page-header" align="center">
            <i class="fa fa-globe"></i><u>REALISASI KENDARAAN ORANG</u>
            <small class="pull-right"></small>
        </h2>
        <table border="1" cellspacing="0" cellspadding="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NO. Uji <br> No. Kend</th>
                    <th>Pemilik / Perusahaan / Alamat</th>
                    <th>No SK <br> Masa Berlaku</th>
                    <th>No KP <br> Masa Berlaku</th>
                    <th>Trayek</th>
                    <th>Merk / Tahun Kendaraan</th>
                    <th>Catatan <br> Seat / NIK / Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($trayek as $data)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->no_uji}} <br>{{$data->no_kend}}</td>
                    <td>{{$data->pemilik}} <br> {{$data->perusahaan}} <br>{{$data->alamat}}</td>
                    <td>{{$data->no_sk}} <br> {{Carbon\Carbon::parse($data->tgl_sk)->isoFormat('D MMMM Y')}} s/d {{Carbon\Carbon::parse($data->akhir_sk)->isoFormat('D MMMM Y')}}</td>
                    <td>{{$data->no_kp}} <br> {{Carbon\Carbon::parse($data->tgl_kp)->isoFormat('D MMMM Y')}} s/d {{Carbon\Carbon::parse($data->akhir_kp)->isoFormat('D MMMM Y')}}</td>
                    <td>{{$data->lintrayek->kode}} : {{$data->lintrayek->lintasan}}</td>
                    <td>{{$data->merk}} / {{$data->tahun}}</td>
                    <td>{{$data->catatan}} <br>{{$data->orang}} / {{$data->urut}} / @if (!(strtotime($data->tgl_sk) <= time() AND time()>= strtotime($data->akhir_sk)))
                            <span class="label label-success">Aktif</span>
                            @else
                            <span class="label label-danger">Tidak Aktif</span> </td>
                    @endif
                </tr>
                @endforeach
                <tr>
                    <td colspan="8" align="center"><b>Jumlah Kendaraan : {{$no-1}} Unit/Kendaraan</b></td>
                </tr>
            </tbody>
        </table><br><br>
    </div>
</body>

</html>