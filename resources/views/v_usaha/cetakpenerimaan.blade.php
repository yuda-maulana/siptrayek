<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izin Usaha | Laporan Penerimaan Biaya Usaha</title>
    <link rel="icon" href="{{asset('logo')}}/dishub.png" width="50px">
</head>

<body onload="window.print()">
    <div class="form-group">
        <h2 class="page-header" align="center">
            <h2 align="center"><u>REKAPITULASI PENERIMAAN BIAYA IZIN USAHA</u></h2><br>
            <small class="pull-right"></small>
        </h2>
        <table border="1" cellspacing="1" cellpadding="1" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No. Uji <br> No. Kend</th>
                    <th>Jenis Kendaraan</th>
                    <th>Merk / Tahun</th>
                    <th>Seat <br> JBB</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($usaha as $data)
                <tr>
                    <td align="center">{{$no++}}</td>
                    <td>{{$data->no_uji}} <br>{{$data->no_kend}}</td>
                    <td>{{$data->jenis}} </td>
                    <td>{{$data->merk}} <br>{{$data->tahun}}</td>
                    <td>{{$data->orang}} Orang <br>{{$data->jbb}} Kg</td>
                    <td>{{$data->layanan}}</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="6" align="center"><b>Jumlah Kendaraan : {{$no-1}} Unit/Kendaraan</b></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>