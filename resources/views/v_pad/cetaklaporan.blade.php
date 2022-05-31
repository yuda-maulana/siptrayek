<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Bukti Setoran PAD Trayek</title>
    <link rel="icon" href="{{asset('logo')}}/dishub.png" width="50px">

</head>

<body onload="window.print()">
    <table align="center" border="0">
        <tr>
            <td align="center">
                <font size="2"><b>BUKTI TANDA SETORAN</b></font><br>
                <font size="2"><b>PEMBANTU BENDAHARA PENERIMAAN</font></b>
            </td>
        </tr>
    </table><br>
    <table border="0">
        <tr>
            <td>Hari/Tanggal</td>
            <td>:</td>
            <td>{{Carbon\Carbon::parse($pad->tanggal)->isoFormat('D MMMM Y')}}</td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td>:</td>
            <td>{{$pad->no_bukti}}</td>
        </tr>
        <p>Telah terima uang atas penerimaan Pendapatan Asli Daerah (PAD) dari Retribusi Izin Trayek, Izin Operasi dan Izin Insidentil</p>
        <tr>
            <td>Sebesar</td>
            <td>:</td>
            <td>@currency($pad->jumlah)</td>
        </tr>

    </table>
    <p>Dengan rincian sebagai berikut.</p>
    <table border="1" align="center" cellpadding=1 cellspacing=1>
        <tr>
            <th>Kode Rekening</th>
            <th>Uraian</th>
            <th>Jumlah Unit</th>
            <th>Retribusi</th>

        </tr>
        <tr>
            <td>{{$pad->kod_rek}}</td>
            <td><b>Retribusi Izin Trayek</b></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{{$pad->no_rek}}</td>
            <td><b>{{$pad->nama_rek}}</b></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td></td>
            <td>{{$pad->uraian}}</td>
            <td>{{$pad->unit}}</td>
            <td>@currency($pad->retribusi)</td>
        </tr>
        <tr>
            <td></td>
            <td><b>Jumlah</b></td>
            <td><b>{{$pad->unit}}</b></td>
            <td><b>@currency($pad->retribusi)</b></td>
        </tr>
    </table><br><br>
    <table border="0" align="left">
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <font size=3>
                    Yang menerima<br>
                    Bendahara Penerimaan
            </td>
        </tr>
        <tr>
            <td height=70></td>
        </tr>
        <tr>
            <td colspan="3" align="center"><b><u>ASEP</u></b></td>
        </tr>
        <tr>
            <td colspan="3" align="center">NIP. 196801292007011005</td>
        </tr>
    </table><br>
    <table border="0" align="right">
        <tr>
            <td align="center"></td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <font size=3>
                    Yang menyetorkan<br>
                    Bendahara Penerimaan
            </td>
        </tr>
        <tr>
            <td height=70></td>
        </tr>
        <tr>
            <td colspan="3" align="center"><b><u>DODI ROSIDIN</u></b></td>
        </tr>
        <tr>
            <td colspan="3" align="center">NIP. 197003262007011005</td>
        </tr>
    </table>
    <br><br>
    <table border="0" align="center">
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

</body>

</html>