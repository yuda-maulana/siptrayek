<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi | Laporan Penerimaan Biaya Retribusi</title>
    <link rel="icon" href="{{asset('logo')}}/dishub.png" width="50px">
</head>

<body onload="window.print()">
    <div class="form-group">
        <h2 class="page-header" align="center">
            <h2 align="center"><u>REKAPITULASI PENERIMAAN BIAYA IZIN KHUSUS</u></h2><br>
            <small class="pull-right"></small>
        </h2>
        <table border="1" cellspacing="1" cellpadding="1" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No. Uji <br> No. Kend</th>
                    <th>Pemilik <br> Alamat</th>
                    <th>Jenis, Merk, Tahun Kendaraan</th>
                    <th>Daya Angkut</th>
                    <th>Retribusi</th>
                    <th>Periode <br> Adm.</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($khusus as $data)
                <tr>
                    <td align="center">{{$no++}}</td>
                    <td>{{$data->no_uji}} <br> {{$data->no_kend}}</td>
                    <td>{{$data->pemilik}} <br>{{$data->alamat}}</td>
                    <td>{{$data->jenis_kendaraan}} <br>{{$data->merk}} <br>{{$data->tahun}}</td>
                    <td>{{$data->dy_akt}}</td>
                    <td>@currency($data->retri)</td>
                    <td>@currency($data->periode) <br>@currency($data->administrasi)</td>
                </tr>
                <tr>
                    <td colspan="5" rowspan="2" align="right"><b>Total</b></td>
                    <td>@currency($data->retri)</td>
                    <td>@currency($data->periode) <br>@currency($data->administrasi)</td>
                </tr>
                <tr>
                    <td colspan="4" align="center"><b>@currency($data->retri+$data->periode+$data->administrasi)</b></td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="5" rowspan="2" align="right"><b>Jumlah Kendaraan : {{$no-1}} Unit/Kendaraan</b></td>
                    <td>@currency($khusus->sum('retri'))</td>
                    <td>@currency($khusus->sum('periode')) <br>@currency($khusus->sum('administrasi'))</td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><b>@currency($khusus->sum('retri')+$khusus->sum('periode')+$khusus->sum('administrasi'))</b></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>