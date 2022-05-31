 <html>

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Laporan Lintasan Trayek</title>
     <link rel="icon" href="{{asset('logo')}}/dishub.png" width="50px">

 </head>

 <body onload="window.print()">
     <div class="form-group">
         <h2 class="page-header" align="center">
             <i class="fa fa-globe"></i><u>LAPORAN LINTASAN TRAYEK</u><br><br>
             <small class="pull-right"></small>
         </h2>
         <table border="1" cellspacing="0" cellspadding="0" width="100%">
             <thead>
                 <tr>
                     <th>No</th>
                     <th>Kode Lintasan</th>
                     <th>Lintasan</th>
                     <th>Alokasi</th>
                     <th>Rute</th>
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
                     <td align="justify">{{$data->rute}}</td>
                 </tr>
                 @endforeach
             </tbody>
         </table>
     </div>
 </body>

 </html>