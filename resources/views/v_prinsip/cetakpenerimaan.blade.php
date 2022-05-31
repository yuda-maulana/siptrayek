<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izin Prinsip | Laporan Penerimaan Biaya Izin Prinsip</title>
    <link rel="icon" href="{{asset('logo')}}/dishub.png" width="50px">
</head>

<body onload="window.print()">
    <div class="form-group">
        <h2 class="page-header" align="center">
            <h2 align="center"><u>REKAPITULASI PENERIMAAN BIAYA IZIN PRINSIP</u></h2><br>
            <small class="pull-right"></small>
        </h2>
        <table border="1" cellspacing="1" cellpadding="1" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama / No / Tanggal Permohonan</th>
                    <th>Nama Pemilik <br> Alamat</th>
                    <th>Jenis Kendaraan <br> Merk / Tahun Kendaraan</th>
                    <th>Tgl. Terbit / Seat</th>
                    <th>Lintasan Trayek <br>Keterangan</th>
                    <th>Retribusi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($prinsip as $data)
                <tr>
                    <td align="center">{{$no++}}</td>
                    <td>{{$data->mohon}} <br> {{$data->no_mohon}} <br>{{$data->tgl_mohon}}</td>
                    <td>{{$data->pemilik}} <br>{{$data->alamat}}</td>
                    <td>{{$data->jenis}} <br>{{$data->merk}} / {{$data->tahun}}</td>
                    <td>{{Carbon\Carbon::parse($data->terbit)->isoFormat('D MMMM Y')}} <br><br>{{$data->orang}}</td>
                    <td>{{$data->trayek}} <br> {{$data->catatan}}</td>
                    <td>@currency($data->retri)</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="6" rowspan="2" align="right"><b>Jumlah Kendaraan : {{$no-1}} Unit/Kendaraan</b></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><b>@currency($prinsip->sum('retri'))</b></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>