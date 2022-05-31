 <html>

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Laporan Data Lintasan Trayek</title>
     <link rel="icon" href="{{asset('logo')}}/dishub.png" width="50px">

 </head>

 <body onload="window.print()">
     <div class="form-group">
         <h2 class="page-header" align="center">
             <i class="fa fa-globe"></i><u>DATA LINTASAN TRAYEK</u><br><br>
         </h2>
         <table border="1" cellspacing="0" cellspadding="0" width="100%">
             <thead>
                 <tr>
                     <th>Kode Lintasan</th>
                     <th>Lintasan</th>
                     <th>Alokasi</th>
                     <th>Rute</th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                     <td align="center">{{$lintrayek->kode}}</td>
                     <td align="center">{{$lintrayek->lintasan}}</td>
                     <td align="center">{{$lintrayek->alokasi}}</td>
                     <td align="justify">{{$lintrayek->rute}}</td>
                 </tr>
             </tbody>
         </table>
     </div>
 </body>

 </html>