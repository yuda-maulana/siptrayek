<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izin Operasi Taksi | Laporan Penerimaan Biaya Operasi Taksi</title>
    <link rel="icon" href="{{asset('logo')}}/dishub.png" width="50px">
</head>

<body onload="window.print()">
    <div class="form-group">
        <h2 class="page-header" align="center">
            <h2 align="center"><u>REKAPITULASI PENERIMAAN BIAYA IZIN OPERASI TAKSI</u></h2><br>
            <small class="pull-right"></small>
        </h2>
        <table border="1" cellspacing="1" cellpadding="1" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No. Uji <br> No. Kend</th>
                    <th>Pemilik <br> Perusahaan <br> Alamat</th>
                    <th>Jenis, Merk, Tahun Kendaraan</th>
                    <th>Retribusi</th>
                    <th>Periode <br> Adm.</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($taksi as $data)
                <tr>
                    <td align="center">{{$no++}}</td>
                    <td>{{$data->no_uji}} <br>{{$data->no_kend}}</td>
                    <td>{{$data->pemilik}} <br> {{$data->perusahaan}} <br>{{$data->alamat}}</td>
                    <td>{{$data->jenis_kendaraan}} <br>{{$data->merk}} <br>{{$data->tahun}}</td>
                    <td>@currency($data->retri)</td>
                    <td>@currency($data->periode) <br> @currency($data->administrasi)</td>
                    <td>{{$data->catatan}}</td>
                </tr>
                @endforeach
                <tr>
                    <!-- <td colspan="4" rowspan="2" align="right"><b>Jumlah Kendaraan : {{$no-1}} Unit/Kendaraan</b></td> -->
                    <td colspan="4" rowspan="2" align="right"><b>Jumlah Total : </b></td>
                    <td>@currency($taksi->sum('retri'))</td>
                    <td>
                        <table border="0">
                            <tr>
                                <td>@currency($taksi->sum('periode'))</td>
                            </tr>
                            <tr>
                                <td>@currency($taksi->sum('administrasi'))</td>
                            </tr>
                        </table>
                    </td>
                    <td rowspan="2" align="right"><b>Jumlah Kendaraan : {{$no-1}} Unit/Kendaraan</b></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><b>@currency($taksi->sum('retri')+$taksi->sum('periode')+$taksi->sum('administrasi'))</b></td>
                    <!-- <td colspan="3" align="center"><b>@currency($taksi->sum('retri')+$taksi->sum('leges'))</b></td> -->
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>