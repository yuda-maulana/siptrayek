<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izin Usaha | Laporan Klasifikasi Retribusi Global</title>
    <link rel="icon" href="{{asset('logo')}}/dishub.png" width="50px">
</head>

<body onload="window.print()">
    <div class="form-group">
        <h2 class="page-header" align="center">
            <h2 align="center"><u>REKAPITULASI PENERIMAAN BIAYA IZIN USAHA ANGKUTAN</u></h2><br>
            <small class="pull-right"></small>
        </h2>
        <table border="1" cellspacing="1" cellpadding="1" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Uraian</th>
                    <th>Unit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1. </td>
                    <td>Angkutan Penumpang</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Mobil Penumpang (s/d 8 tempat duduk)</td>
                    <td>{{$penumpang}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Mobil Penumpang (9 s/d 15 tempat duduk)</td>
                    <td>{{$kecil}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Mobil Penumpang (16 s/d 25 tempat duduk)</td>
                    <td>{{$sedang}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Mobil Penumpang (26 tempat duduk atau lebih)</td>
                    <td>{{$besar}}</td>
                </tr>
                <tr>
                    <td colspan="2" align="center">Jumlah</td>
                    <td>{{$penumpang+$kecil+$sedang+$besar}}</td>
                </tr>
                <tr>
                    <td>2. </td>
                    <td>Angkutan Barang</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>JBB s/d 5.000 Kg.</td>
                    <td>{{$jbbkcl}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>JBB 5.001 s/d 8.000 Kg.</td>
                    <td>{{$jbbsdng}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>JBB 8.001 s/d 15.000 Kg.</td>
                    <td>{{$jbbmngah}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>JBB lebih dari 15.000 Kg.</td>
                    <td>{{$jbbbesar}}</td>
                </tr>
                <tr>
                    <td colspan="2" align="center">Jumlah</td>
                    <td>{{$jbbkcl+$jbbsdng+$jbbmngah+$jbbbesar}}</td>
                </tr>
                <tr>
                    <td colspan="2" align="center">TOTAL</td>
                    <td>{{$penumpang+$kecil+$sedang+$besar+$jbbkcl+$jbbsdng+$jbbmngah+$jbbbesar}}</td>
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
                <td align="center"></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <font size=3>
                        Tasikmalaya, {{Carbon\Carbon::now()->isoFormat('D MMMM Y')}}<br>
                        Kepala Seksi Bina Usaha Angkutan
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
        <br><br>

    </div>
</body>

</html>