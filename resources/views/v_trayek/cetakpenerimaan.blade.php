<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izin Trayek | Laporan Penerimaan Biaya Izin Trayek</title>
    <link rel="icon" href="{{asset('logo')}}/dishub.png" width="50px">
</head>

<body onload="window.print()">
    <div class="form-group">
        <h2 class="page-header" align="center">
            <h2 align="center"><u>REKAPITULASI PENERIMAAN BIAYA TRAYEK</u></h2><br>
            <small class="pull-right"></small>
        </h2>
        <table border="1" cellspacing="1" cellpadding="1" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No. Uji <br> No. Kend</th>
                    <th>Pemilik <br> Perusahaan <br> Alamat</th>
                    <th>Jenis, Merk, Tahun Kendaraan</th>
                    <th>Seat</th>
                    <th>Retribusi SK</th>
                    <th>Retribusi KP</th>
                    <th>Jumlah Retribusi</th>
                    <th>Denda Periode</th>
                    <th>Denda Administrasi</th>
                    <th>Jumlah</th>
                    <th>Keterangan <br>Kode dan Lintasan Trayek</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($trayek as $data)
                <tr>
                    <td align="center">{{$no++}}</td>
                    <td>{{$data->no_uji}} <br>{{$data->no_kend}}</td>
                    <td>{{$data->pemilik}} <br> {{$data->perusahaan}} <br>{{$data->alamat}}</td>
                    <td>{{$data->jenis}} <br>{{$data->merk}} <br>{{$data->tahun}}</td>
                    <td>{{$data->orang}}</td>
                    <td>@currency($data->ret_sk)</td>
                    <td>@currency($data->ret_kp)</td>
                    <td>@currency($data->ret_sk+$data->ret_kp)</td>
                    <td>@currency($data->denda_periode) </td>
                    <td>@currency($data->denda_admin)</td>
                    <td>@currency($data->ret_sk+$data->ret_kp+$data->denda_periode+$data->denda_admin)</td>
                    <td>{{$data->catatan}} <br>{{$data->lintrayek->kode}} / {{$data->lintrayek->lintasan}} </td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="5" align="center"><b>Jumlah Total</b></td>
                    <td><b>@currency($trayek->sum('ret_sk'))</b></td>
                    <td><b>@currency($trayek->sum('ret_kp'))</b></td>
                    <td><b>@currency($trayek->sum('ret_sk')+$trayek->sum('ret_kp'))</b></td>
                    <td><b>@currency($trayek->sum('denda_periode'))</b></td>
                    <td><b>@currency($trayek->sum('denda_admin'))</b></td>
                    <td><b>@currency($trayek->sum('ret_sk')+$trayek->sum('ret_kp')+$trayek->sum('denda_periode')+$trayek->sum('denda_admin'))</b></td>
                    <td><b>Jumlah Kendaraan : {{$no-1}} Unit/Kendaraan</b></td>
                </tr>
            </tbody>
        </table>
        <table border="0" align="left">
            <tr>
                <td></td>
            </tr>
            <tr>
                <td align="center">Mengetahui</td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <font size=2>
                        KEPALA BIDANG ANGKUTAN<br>
                </td>
            </tr>
            <tr>
                <td height=70></td>
            </tr>
            <tr>
                <td colspan="3" align="center"><b><u>Ajat Sudrajat, ATD, MM</u></b></td>
            </tr>
            <tr>
                <td colspan="3" align="center">NIP. 196907051994031021</td>
            </tr>
        </table>
        <table border="0" align="right">
            <tr>
                <td align="center">Tasimalaya</td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <font size=2>
                        KEPALA SEKSI BINA USAHA ANGKUTAN<br>
                </td>
            </tr>
            <tr>
                <td height=70></td>
            </tr>
            <tr>
                <td colspan="3" align="center"><b><u>Denny Iskandar, A.Md</u></b></td>
            </tr>
            <tr>
                <td colspan="3" align="center">NIP. 196702121990021000</td>
            </tr>
        </table>
    </div>
</body>

</html>