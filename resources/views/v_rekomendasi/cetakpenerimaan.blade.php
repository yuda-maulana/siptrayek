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
            <h2 align="center"><u>REKAPITULASI PENERIMAAN BIAYA RETRIBUSI</u></h2><br>
            <small class="pull-right"></small>
        </h2>
        <table border="1" cellspacing="1" cellpadding="1" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal <br> No. Bend</th>
                    <th>Nama <br> Perusahaan <br> Alamat</th>
                    <th>Jenis / Sifat Pelayanan <br>Trayek Dimohon</th>
                    <th>Jenis / Jumlah Kendaraan / Tgl. Terbit / NIK / Keterangan</th>
                    <th>Retribusi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($rekomendasi as $data)
                <tr>
                    <td align="center">{{$no++}}</td>
                    <td>{{Carbon\Carbon::parse($data->tanggal)->isoFormat('D MMMM Y')}} <br> {{$data->no_bend}}</td>
                    <td>{{$data->pemilik}} <br> {{$data->perusahaan}} <br>{{$data->alamat}}</td>
                    <td>{{$data->layanan}} <br>{{$data->sifat}} <br>{{$data->trayek}}</td>
                    <td>{{$data->jenis}} <br> {{$data->jumlah}} <br> {{Carbon\Carbon::parse($data->terbit)->isoFormat('D MMMM Y')}} <br>{{$data->urut}} <br>{{$data->catatan}}</td>
                    <td>@currency($data->retri)</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="5" rowspan="2" align="right"><b>Jumlah Kendaraan : {{$no-1}} Unit/Kendaraan</b></td>
                </tr>
                <tr>
                    <td colspan="5" align="center"><b>@currency($rekomendasi->sum('retri'))</b></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>