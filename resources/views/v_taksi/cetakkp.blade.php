<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KP No {{$taksi->no_kp}}</title>
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
                <font size="4"><u><b>KARTU PENGAWASAN</b></u></font><br>
                <font size="2"><b>Nomor : {{$taksi->no_kp}}</font></b>
            </td>
        </tr>
    </table>
    </p>
    <table align="center" border="0" width=800>
        <tr>
            <td align="center">
                <p align="justify">Berdasarkan Keputusan Walikota Nomor : <i>{{$taksi->no_sk}}</i> tanggal
                    <i>{{Carbon\Carbon::parse($taksi->tgl_sk)->isoFormat('D MMMM Y')}}</i>
                    Tentang Izin Operasi Angkutan Taksi di Kota Tasikmalaya, oleh Dinas Perhubungan Kota
                    Tasikmalaya diberikan Kartu Pengawasan kepada <i>{{$taksi->perusahaan}}</i>
                    yang dipimpin oleh <i>{{$taksi->pimpinan}}</i> di <i>{{$taksi->alamat}}</i>
                    dari tanggal <b><i>{{Carbon\Carbon::parse($taksi->tgl_kp)->isoFormat('D MMMM Y')}} </i></b>
                    sampai tanggal <b><i>{{Carbon\Carbon::parse($taksi->akhir_kp)->isoFormat('D MMMM Y')}} </i></b>
                    dengan mempergunakan kendaraan Taksi untuk mengangkut penumpang tidak dalam trayek
                    di Kota Tasikmalaya.
                </p>
            </td>
        </tr>
    </table>
    <table align="center" border="0" width=800>
        <tr>
            <td align="justify" colspan="4">
                <p>Untuk keperluan tersebut dipergunakan kendaraan <br>sebagai berikut</p>
                <hr width="50%" align="left" size="1" color="black">
                <table border="0" align="right">
                    <tr>
                        <td colspan="3" align="center">
                            <font size=2><b>
                                    KEPALA DINAS PERHUBUNGAN <br>
                                    KOTA TASIKMALAYA,</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td height=100></td>
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
                <table border="0">
                    <tr>
                        <td>No. Register</td>
                        <td>:</td>
                        <td><b>{{$taksi->no_kend}} </b></td>
                    </tr>
                    <tr>
                        <td>No. Uji</td>
                        <td>:</td>
                        <td><b>{{$taksi->no_uji}}</b></td>
                    </tr>
                    <tr>
                        <td>Daya Angkut</td>
                        <td>:</td>
                        <td><b>{{$taksi->orang}}</b> Orang</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><b>{{$taksi->barang}}</b> Kg Barang</td>
                    </tr>
                </table>
                <hr width="50%" align="left" size="1" color="black">
                <table border="0">
                    <tr>
                        <td>Diterbitkan di</td>
                        <td>:</td>
                        <td>Kota Tasikmalaya</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td><b><i>{{Carbon\Carbon::parse($taksi->terbit)->isoFormat('D MMMM Y')}}</i></b></td>
                    </tr>
                </table>
                <p align="justify">Habis berlaku SK Izin Operasi : <b><i>{{Carbon\Carbon::parse($taksi->akhir_sk)->isoFormat('D MMMM Y')}}</b></i></p>
                <hr width="100%" align="left" size="1" color="black">
            </td>
        </tr>
        <tr>
            <td align="justify" colspan="4"><b><u>CATATAN</u></b> :</td>
        </tr>
        <tr>
            <td>1.</td>
            <td align="justify">Berdasarkan pasal 28 ayat 3 Perda Nomor : 3 Tahun 2012, wajib retribusi yang tidak membayar tepat waktu atau kurang,</td>
        </tr>
        <tr>
            <td></td>
            <td align="justify">bayar, dikenakan sanksi administrasi setiap bulan dari besarnya retribusi.
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td align="justify">Setiap kendaraan Taksi Wajib dilengkapi dengan argometer yang digunakan pad saat mengangkut penumpang.</td>
        </tr>
        <tr>
            <td>3.</td>
            <td align="justify">Nomor induk : {{$taksi->urut}}</td>
        </tr>
        <tr>
            <td>4.</td>
            <td align="justify">{{$taksi->catatan}}</td>
        </tr>
    </table> <br>
    <table border="1" align="center" cellpadding=0 cellspacing=0>
        <tr>
            <td align="center">
                <p style="color: red;">IZIN TRAYEK/IZIN OPERASI <br>
                    TIDAK UNTUK DIPERJUAL BELIKAN</p>
            </td>
        </tr>
        <tr>
            <td align="center">
                <p style="color: red;">PEMINDAH TANGANAN/PENGALIHAN KEPEMILIKAN<br>
                    IZIN TRAYEK/IZIN OPERASI HARUS MENDAPAT <br>
                    PERSETUJUAN PEJABAT PEMBERI IZIN</p>
            </td>
        </tr>
    </table>
</body>

</html>