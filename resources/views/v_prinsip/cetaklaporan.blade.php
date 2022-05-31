<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izin Prinsip | Laporan Kegiatan Izin Prinsip</title>
    <link rel="icon" href="{{asset('logo')}}/dishub.png" width="50px">
</head>

<body onload="window.print()">
    <div class="form-group">
        <h2 class="page-header" align="center">
            <h2 align="center"><u>DAFTAR IZIN PRINSIP YANG DIPROSES</u></h2><br>
            <small class="pull-right"></small>
        </h2>
        <table border="1" cellspacing="1" cellpadding="1" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pemohon <br> Pemilik <br> Alamat</th>
                    <th>Jenis, Merk, Tahun Kendaraan <br>Ttg / No Permohonan</th>
                    <th>Tgl. Terbit / Seat</th>
                    <th>Lintasan Trayek <br>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($prinsip as $data)
                <tr>
                    <td align="center">{{$no++}}</td>
                    <td>{{$data->mohon}}<br> {{$data->pemilik}} <br>{{$data->alamat}}</td>
                    <td>{{$data->jenis}} <br>{{$data->merk}} <br>{{$data->tahun}} <br> {{Carbon\Carbon::parse($data->tgl_mohon)->isoFormat('D MMMM Y')}} / {{$data->no_mohon}}</td>
                    <td>{{Carbon\Carbon::parse($data->terbit)->isoFormat('D MMMM Y')}} <br><br>{{$data->orang}}</td>
                    <td>{{$data->trayek}} <br> {{$data->catatan}}</td>
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