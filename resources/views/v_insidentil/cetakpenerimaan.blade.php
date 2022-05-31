<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penerimaaan Biaya Izin Insidentil</title>
    <link rel="icon" href="{{asset('logo')}}/dishub.png" width="50px">
</head>

<body onload="window.print()">
    <div class="form-group">
        <h2 class="page-header" align="center">
            <h2 align="center"><u>REKAPITULASI PENERIMAAN BIAYA IZIN INSIDENTIL</u></h2><br>
            <small class="pull-right"></small>
        </h2>
        <table border="1" cellspacing="1" cellpadding="1" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No. Kend / No. Uji</th>
                    <th>Merk / Tahun / Habis Uji / Terbit</th>
                    <th>Maksud / Tujuan Perjalanan</th>
                    <th>Tanggal Perjalanan</th>
                    <th>Retribusi</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1; ?>
                @foreach ($insidentil as $data)
                <tr>
                    <td align="center">{{$no++}}</td>
                    <td>{{$data->no_kend}} / {{$data->no_uji}}</td>
                    <td>{{$data->merk}} / {{$data->tahun}} <br>{{Carbon\Carbon::parse($data->habis_uji)->isoFormat('D MMMM Y')}} <br> {{Carbon\Carbon::parse($data->terbit)->isoFormat('D MMMM Y')}}</td>
                    <td>{{$data->maksud}} <br> {{$data->tujuan}}</td>
                    <td>{{Carbon\Carbon::parse($data->tgl_awal_perjalanan)->isoFormat('D MMMM Y')}} s/d {{Carbon\Carbon::parse($data->tgl_akhir_perjalanan)->isoFormat('D MMMM Y')}}</td>
                    <td>@currency($data->retri)</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="5" rowspan="2" align="right"><b>Jumlah Kendaraan : {{$no-1}} Unit/Kendaraan</b></td>
                    <td>@currency($insidentil->sum('retri'))</td>
                </tr>
                <tr>
                    <td colspan="5" align="center"><b>@currency($insidentil->sum('retri'))</b></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>