<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izin Usaha | Laporan Kegiatan Usaha</title>
    <link rel="icon" href="{{asset('logo')}}/dishub.png" width="50px">
</head>

<body onload="window.print()">
    <div class="form-group">
        <h2 class="page-header" align="center">
            <h2 align="center"><u>DAFTAR IZIN USAHA YANG DIPROSES</u></h2><br>
            <small class="pull-right"></small>
        </h2>
        <table border="1" cellspacing="1" cellpadding="1" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No. Uji <br> No. Kend</th>
                    <th>Pemilik <br> Perusahaan <br> Alamat</th>
                    <th>Jenis Kendaraan / Layanan <br> Keterangan / Merk / Tahun Kendaraan</th>
                    <th>No Rangka / Mesin <br> JBB (kg) / Seat (orang)</th>
                    <th>No SK <br> Masa Berlaku</th>
                    <th>No KP <br> Masa Berlaku</th>
                    <th>Tgl. Terbit / NIK</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($usaha as $data)
                <tr>
                    <td align="center">{{$no++}}</td>
                    <td>{{$data->no_uji}} <br>{{$data->no_kend}}</td>
                    <td>{{$data->pemilik}} <br> {{$data->perusahaan}} <br>{{$data->alamat}}</td>
                    <td>{{$data->jenis}} / {{$data->layanan}} <br>{{$data->merk}} / {{$data->tahun}} <br>{{$data->catatan}}</td>
                    <td>{{$data->rangka}} / {{$data->mesin}} <br> {{$data->jbb}} / {{$data->orang}}</td>
                    <td>{{$data->no_sk}} <br> {{Carbon\Carbon::parse($data->tgl_sk)->isoFormat('D MMMM Y')}} s/d {{Carbon\Carbon::parse($data->akh_sk)->isoFormat('D MMMM Y')}}</td>
                    <td>{{$data->no_kp}} <br> {{Carbon\Carbon::parse($data->tgl_kp)->isoFormat('D MMMM Y')}} s/d {{Carbon\Carbon::parse($data->akh_kp)->isoFormat('D MMMM Y')}}</td>
                    <td>{{Carbon\Carbon::parse($data->terbit)->isoFormat('D MMMM Y')}} <br>{{$data->urut}}</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="8" align="center"><b>Jumlah Kendaraan : {{$no-1}} Unit/Kendaraan</b></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>