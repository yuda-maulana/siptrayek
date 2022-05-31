<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Realisasi Seluruh Lintasan</title>
    <link rel="icon" href="{{asset('logo')}}/dishub.png" width="50px">

</head>

<body onload="window.print()">
    <div class="form-group">
        <h2 class="page-header" align="center">
            <i class="fa fa-globe"></i><u>REALISASI KENDARAAN ANGKUTAN ORANG</u><br><br>
            <small class="pull-right"></small>
        </h2>
        <table border="1" cellspacing="0" cellspadding="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Lintasan</th>
                    <th>Lintasan</th>
                    <th>Alokasi</th>
                    <th>Realisasi</th>
                    <th>Aktif</th>
                    <th>Non Aktif</th>
                    <th>Sisa Alokasi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($lintrayek as $data)
                <tr>
                    <td align="center">{{$no++}}</td>
                    <td align="center">{{$data->kode}}</td>
                    <td align="center">{{$data->lintasan}}</td>
                    <td align="center">{{$data->alokasi}}</td>
                    <td align="center">{{$data->realisasi}}</td>
                    <td align="center">{{$data->aktif}}</td>
                    <td align="center">{{$data->nonaktif}}</td>
                    <td align="center">{{$data->alokasi-$data->realisasi}}</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="3" align="center"><b>TOTAL</b></td>
                    <td align="center">{{$data->sum('alokasi')}}</td>
                    <td align="center">{{$data->sum('realisasi')}}</td>
                    <td align="center">{{$data->sum('aktif')}}</td>
                    <td align="center">{{$data->sum('nonaktif')}}</td>
                    <td align="center">{{$data->sum('alokasi')-$data->sum('realisasi')}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>