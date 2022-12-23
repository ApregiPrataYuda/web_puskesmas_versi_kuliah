<?php 

header("content-type:application/octat-stream/");

header("content-disposition:attachment; filename=$title.xls");

header("pragma: no-cache");

header("expires:0");




?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>export</title>
</head>
<body>
    <h3 style="text-center">laporan Data Ruangan : <?= date('Y-m-d')?></h3>
<table border="1" width="10%">
                <thead>
                <tr>
                <th>NO</th>
                  <th>Kode Ruangan</th>
                    <th>Nama Ruangan</th>
                    <th>Biaya Ruangan</th>
                </tr>
                    </thead>
                     <?php $no=1; 
                    foreach ($row->result() as $key => $row) { ?> 
                        <tr>
                        <td><?=$no++?></td>
                        <td><?=$row->kode_ruangan?></td>
                                                  <td><?=$row->nama_ruangan?></td>
                                                  <td><?= indo_currency($row->biaya_ruangan)?></td>
                                           
                        </tr>
                    <?php } ?>
              
                    
              </table>
  
</body>
</html>
   
          