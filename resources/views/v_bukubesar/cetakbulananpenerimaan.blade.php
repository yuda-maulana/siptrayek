<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Penerimaan Akhir Bulan</title>
    <link rel="icon" href="{{asset('logo')}}/dishub.png" width="50px">

</head>

<body onload="window.print()">
    <table border="0" align="center" cellpadding=1 cellspacing=0>
        <tr>
            <td align="center" width=100 colspan="3"><img src="{{asset('logo')}}/pemkot.png" width="100" height="100"></td>
            <td align="center" width=600>
                <font size="4"><b>PEMERINTAH KOTA TASIKMALAYA</font></b><br>
                <font size="4"><b>BUKU PEMBANTU</font></b><br>
                <font size="4"><b>PER RINCIAN OBJEK PENERIMAAN</font></b><br>
            <td align="center" width=100 colspan=""></td>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <hr size="3" color="black" width="100%">
                <!-- <hr size="2" color="black" width="100%"> -->
            </td>
        </tr>
    </table><br><br>
    <table border="0">
        <tr>
            <td>SKPD</td>
            <td>:</td>
            <td>Dinas Perhubungan</td>
        </tr>
        <tr>
            <td>Nama Rekening</td>
            <td>:</td>
            <td>{{$bukubesar->nama_rek}}</td>
        </tr>
        <tr>
            <td>Kode Rekening</td>
            <td>:</td>
            <td>{{$bukubesar->kode_rek}}</td>
        </tr>
        <tr>
            <td>Jumlah Anggaran</td>
            <td>:</td>
            <td>@currency($bukubesar->target->target3)</td>
        </tr>
        <tr>
            <td>Tahun Anggaran</td>
            <td>:</td>
            <td>{{$bukubesar->tahun}}</td>
        </tr>
    </table><br><br>
    <table align="center" border="1" cellpadding=1 cellspacing=1>
        <tr>
            <th>No</th>
            <th>Nama BKU Penerimaan</th>
            <th>Tanggal Setor</th>
            <th>Nomor Setor</th>
            <th>Jumlah (Rp.)</th>
        </tr>
        <tr>
            <td align="center">1. </td>
            <td align="center"></td>
            <td align="center">{{Carbon\Carbon::parse($bukubesar->tgl_setor)->isoFormat('D MMMM Y')}}</td>
            <td align="center">{{$bukubesar->no_setor}}</td>
            <td align="center">@currency($bukubesar->jm_tg_i)</td>
        </tr>
        <tr>
            <td align="center"></td>
            <td align="center"></td>
            <td align="center"></td>
            <td align="center">Jumlah tanggal lalu</td>
            <td align="center">@currency($bukubesar->jm_tg_l)</td>
        </tr>
        <tr>
            <td align="center"></td>
            <td align="center"></td>
            <td align="center"></td>
            <td align="center">Jumlah s.d tanggal ini</td>
            <td align="center">@currency($bukubesar->jm_stg_i)</td>
        </tr>
        <tr>
            <td align="center"></td>
            <td align="center"></td>
            <td align="center"></td>
            <td align="center">Jumlah bulan lalu</td>
            <td align="center">@currency($bukubesar->jm_bl_l)</td>
        </tr>
        <tr>
            <td align="center"></td>
            <td align="center"></td>
            <td align="center"></td>
            <td align="center">Jumlah s.d bulan ini</td>
            <td align="center">@currency($bukubesar->jm_sbl_i)</td>
        </tr>
    </table>
    <br>
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
                    Mengetahui,<br>
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
    </table>
    <table border="0" align="right">
        <tr>
            <td align="center"></td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <font size=3>
                    Tasikmalaya, {{Carbon\Carbon::parse($bukubesar->tgl_setor)->isoFormat('D MMMM Y')}}<br>
                    Pembantu Bendahara Penerimaan
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

</body>

</html>