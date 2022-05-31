<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Realisasi Kendaraan Angkutan Kota / Penumpang</title>
    <link rel="icon" href="{{asset('logo')}}/dishub.png" width="50px">
</head>

<body onload="window.print()">
    <div class="form-group">
        <h2 class="page-header" align="center">
            <i class="fa fa-globe"></i><u>REALISASI KENDARAAN ANGKUTAN <br>KOTA / PENUMPANG</u>
            <small class="pull-right"></small>
        </h2>
        <p style="text-align: center;">BERDASARKAN PERATURAN WALIKOTA TASIKMALAYA NOMOR 64 TAHUN 2011 <br> TENTANG <br>JARINGAN TRAYEK
            ANGKUTAN KOTA DI KOTA TASIKMALAYA</p>
        <table border="1" cellspacing="0" cellspadding="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Lintasan</th>
                    <th>Lintasan</th>
                    <th>Alokasi</th>
                    <th>Realisasi</th>
                    <th>Aktif</th>
                    <th>Non Aktif</th>
                    <th>Sisa Alokasi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($lintrayek as $data)
                <tr>
                    <td align="center">{{$no++}}</td>
                    <td align="center">{{$data->kode}}</td>
                    <td align="center">{{$data->lintasan}}</td>
                    <td align="center">{{$data->alokasi}}</td>
                    <td align="center">{{$data->realisasi}}</td>
                    <td align="center">{{$data->aktif}}</td>
                    <td align="center">{{$data->nonaktif}}</td>
                    <td align="center">{{$data->alokasi-$data->realisasi}}</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="3" align="center"><b>TOTAL</b></td>
                    <td align="center">{{$lintrayek->sum('alokasi')}}</td>
                    <td align="center">{{$lintrayek->sum('realisasi')}}</td>
                    <td align="center">{{$lintrayek->sum('aktif')}}</td>
                    <td align="center">{{$lintrayek->sum('nonaktif')}}</td>
                    <td align="center">{{$lintrayek->sum('alokasi')-$lintrayek->sum('realisasi')}}</td>
                </tr>
            </tbody>
        </table><br><br>
        <table border="0" align="right">
            <tr>
                <td>Tasikmalaya,</td>
                <td></td>
                <td>{{Carbon\Carbon::now()->isoFormat('D MMMM Y')}}</td>
            </tr>
            <tr>
                <td colspan="3" align="center">
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
    </div>
</body>

</html>