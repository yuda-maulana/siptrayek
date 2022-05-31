<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prinsip No {{$prinsip->no_rekom}}</title>
    <link rel="icon" href="{{asset('logo')}}/dishub.png" width="50px">

</head>

<body onload="window.print()">
    <table border="0" align="center" cellpadding=1 cellspacing=0>
        <tr>
            <td align="center" width=100 colspan="3"><img src="{{asset('logo')}}/pemkot.png" width="100" height="100"></td>
            <td align="center" width=600>
                <font size="4"><b>PEMERINTAH KOTA TASIKMALAYA</font></b><br>
                <font size="6"><b>DINAS PERHUBUNGAN</font></b><br>
                <font size="4"><b>KOTA TASIKMALAYA</font></b><br>
                <font>Jl. Ir. H. Djuanda No. 191 Telp. (0265) 329025 - 325187 Kota Tasikmalaya</font><br>
                <font>Website : </font>
                <font style="color: blue;"><u>http://dishub.tasikmalayakota.go.id</u></font><br>
            <td align="center" width=100 colspan=""></td>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <hr size="3" color="black" width="100%">
                <!-- <hr size="2" color="black" width="100%"> -->
            </td>
        </tr>
    </table>
    <br>
    <table align="center" border="0">
        <tr>
            <td align="center">
                <font size="4"><u><b>IZIN PRINSIP</b></u></font><br>
                <font size="2"><b>Nomor : 551./ /KD-ANGK</font></b>
            </td>
        </tr>
    </table>
    </p>
    <table align="center" border="0">
        <tr>
            <td align="center">
                <p align="justify">Berdasarkan Permohonan Izin Prinsip dari : <i>{{$prinsip->mohon}}</i><br>
                    Nomor : <i>{{$prinsip->no_mohon}}</i> Tanggal : <i>{{Carbon\Carbon::parse($prinsip->tgl_mohon)->isoFormat('D MMMM Y')}}</i><br><br>
                    Dan berdasarkan Surat Rekomendasi dari Kepala Dinas Perhubungan Kabupaten Tasikmalaya <br>
                    Nomor : <i>{{$prinsip->no_rekom}}</i> Tanggal : <i>{{Carbon\Carbon::parse($prinsip->tgl_rekom)->isoFormat('D MMMM Y')}}</i><br><br>
                    Kepala Dinas Perhubungan Kota Tasikmalaya dengan ini memberikan Izin Prinsip kepada : </p>
                <table border="0" align="left">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{$prinsip->pemilik}}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{$prinsip->alamat}}</td>
                    </tr>
                </table><br><br><br>
                <p align="justify">Untuk menjalankan trayek dan jenis kendaraan sebagai berikut :</p>
                <table border="1" align="center">
                    <tr>
                        <th align="center">Trayek</th>
                        <th align="center">Jenis Kendaraan</th>
                        <th align="center">Jumlah Kapasitas</th>
                    </tr>
                    <tr>
                        <td align="center">{{$prinsip->trayek}}</td>
                        <td align="center">{{$prinsip->jenis}}</td>
                        <td align="center">{{$prinsip->orang}} Orang</td>
                    </tr>
                </table>
                <br>
                <p align="justify">Secara prinsip telah disetujui dan untuk proses lebih lanjut diminta saudara melengkap <br>
                    persyaratan sebagai berikut:</p>
                <table border="0" align="left">
                    <tr>
                        <td>a.</td>
                        <td>Photocopy STNK;</td>
                    </tr>
                    <tr>
                        <td>b.</td>
                        <td>Photocopy Buku Uji;</td>
                    </tr>
                    <tr>
                        <td>c.</td>
                        <td>Tanda bukti penerimaan retribusi Izin Trayek.</td>
                    </tr>
                </table>
                <br><br><br><br>
                <p align="justify">Izin prinsip ini berlaku selama 3 (tiga) bulan terhitung sejak ditetapkan.</p>
            </td>
        </tr>
    </table>
    <table border="0" align="right">
        <tr>
            <td>Ditetapkan di</td>
            <td> : </td>
            <td>TASIKMALAYA</td>
        </tr>
        <tr>
            <td>Pada tanggal</td>
            <td> : </td>
            <td>{{Carbon\Carbon::parse($prinsip->terbit)->isoFormat('D MMMM Y')}}</td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <hr size="1" color="black">
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <font size=2>AN. WALIKOTA TASIKMALAYA <br>
                    KEPALA DINAS PERHUBUNGAN <br>
                    KOTA TASIKMALAYA,</font>
            </td>
        </tr>
        <tr>
            <td height=70></td>
        </tr>
        <tr>
            <td colspan="3" align="center"><b><u>H. AAY ZAINI DAHLAN, ATD, MM</u></b></td>
        </tr>
        <tr>
            <td colspan="3" align="center">Pembina Utama Muda / IV.c</td>
        </tr>
        <tr>
            <td colspan="3" align="center">NIP. 19631128 198803 1 005</td>
        </tr>
    </table>
</body>

</html>