<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Izin Usaha No {{$usaha->urut_kp}}</title>
    <link rel="icon" href="{{asset('logo')}}/dishub.png" width="50px">

</head>

<body onload="window.print()">
    <table border="1" align="center" cellpadding=1 cellspacing=0>
        <tr>
            <td align="center" width=800>
                <table align="left">
                    <tr>
                        <td><img src="{{asset('logo')}}/pemkot.png" width="100" height="100"></td>
                    </tr>
                </table>
                <font size="4"><b>PEMERINTAH KOTA TASIKMALAYA</font></b><br>
                <font size="6"><b>DINAS PERHUBUNGAN</font></b><br>
                <font size="4"><b>KOTA TASIKMALAYA</font></b><br>
                <font>Jl. Ir. H. Djuanda No. 191 Telp. (0265) 329025 - 325187 Kota Tasikmalaya</font><br>
                <font>Website : </font>
                <font style="color: blue;"><u>http://dishub.tasikmalayakota.go.id</u></font><br>
            </td>
        </tr>
        <tr>
            <td align="center">
                <font size="4"><u><b>KARTU IZIN USAHA ANGKUTAN</b></u></font><br>
                <font size="2">Nomor : {{$usaha->no_kp}}</font><br>
                <hr width="100%" size="1" color="black">
                <table border="0" align="left" cellpadding=1 cellspacing=0>
                    <tr>
                        <td>
                            <p>Berdasarkan Keputusan Walikota Tasikmalaya</p>
                            <table border="0" align="left">
                                <tr>
                                    <td>Nomor</td>
                                    <td>:</td>
                                    <td>{{$usaha->no_sk}}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td>:</td>
                                    <td>{{Carbon\Carbon::parse($usaha->tgl_sk)->isoFormat('D MMMM Y')}}</td>
                                </tr>
                                <tr>
                                    <td>Diberikan Kartu Izin Usaha Kepada</td>
                                    <td>:</td>
                                    <td>{{$usaha->pemilik}}</td>
                                </tr>
                                <tr>
                                    <td>Perusahan</td>
                                    <td>:</td>
                                    <td>{{$usaha->perusahaan}}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{$usaha->alamat}}</td>
                                </tr>
                                <tr>
                                    <td>No. Kendaraan</td>
                                    <td>:</td>
                                    <td><b>{{$usaha->no_kend}}</b></td>
                                </tr>
                                <tr>
                                    <td>No. Uji</td>
                                    <td>:</td>
                                    <td><b>{{$usaha->no_uji}}</b></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kendaraan</td>
                                    <td>:</td>
                                    <td>{{$usaha->jenis}}</td>
                                </tr>
                                <tr>
                                    <td>JBB / Kapasitas Kendaraan</td>
                                    <td>:</td>
                                    <td>{{$usaha->jbb}} Kg / {{$usaha->orang}} Orang</td>
                                </tr>
                                <tr>
                                    <td>Jenis Pelayanan</td>
                                    <td>:</td>
                                    <td>{{$usaha->layanan}}</td>
                                </tr>
                                <tr>
                                    <td>Trayek</td>
                                    <td>:</td>
                                    <td>{{$usaha->lintasan}}</td>
                                </tr>
                                <tr>
                                    <td>Masa Berlaku</td>
                                    <td>:</td>
                                    <td><b>{{Carbon\Carbon::parse($usaha->tgl_kp)->isoFormat('D MMMM Y')}}</b></td>
                                </tr>
                            </table>
                            <hr width="100%" size="1" color="black">
                            <table align="center" border="0" width=800>
                                <tr>
                                    <td align="justify" colspan="4">
                                        <table border="0" align="right">
                                            <tr>
                                                <td>Diterbitkan di</td>
                                                <td>:</td>
                                                <td>Kota Tasikmalaya</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal</td>
                                                <td>:</td>
                                                <td><b><i>{{Carbon\Carbon::parse($usaha->terbit)->isoFormat('D MMMM Y')}}</i></b></td>
                                            </tr>
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
                                    </td>
                                </tr>
                            </table>
                            <hr width="100%" size="1" color="black">
                            <p style="text-align: justify;">Peraturan Daerah Kota Tasikmalaya Nomor 10 Tahun 2003 tentang Penyelenggaraan Lalu Lintas dan Angkutan Jalan Pasal 87
                                ayat(1)"Setiap Badan Hukum dan / atau perorangan yang akan berusaha di bidang angkutan wajib memiliki Izin Usaha Angkutan."</p>
                        </td>
                </table>
            </td>
        </tr>
    </table>
    <!-- <font size="2"><b>No : {{$usaha->urut_kp}}</font></b> -->
    </td>

    </tr>

    </table>

</body>

</html>