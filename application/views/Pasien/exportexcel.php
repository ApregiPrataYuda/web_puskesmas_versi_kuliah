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
    <h3 style="text-center">laporan Data pasien : <?= date('Y-m-d')?></h3>
<table border="1" width="10%">
                <thead>
                <tr>
                <td>NO</td>
                  <th>Kode Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Alamat Pasien</th>
                    <th>Ruangan Pasien</th>
                    <th>nama penanganan</th>
                    <th>nama obat</th>
                    <th>Total bayar</th>
                </tr>
                    </thead>
                     <?php $no=1; 
                    foreach ($row->result() as $key => $row) { ?> 
                        <tr>
                        <td><?=$no++?></td>
                                             <td><?=$row->kode_pasien?></td>
                                             <td><?=$row->nama_pasien?></td>
                                                <td><?=$row->alamat ?></td>
                                                <td><?=$row->nama_ruangan ?> <br> <p style="color: red; font-weight:bold">| harga Total |<?= indo_currency($row->biaya_ruangan) ?></td>
                                                <td><?=$row->penanganan ?> <br> <p style="color: red; font-weight:bold">| harga Total |<?= indo_currency($row->biaya) ?></p></td>
                                                <td><?=$row->nama_obat ?>  <br> <p style="color: red; font-weight:bold">| harga Total |<?= indo_currency($row->harga) ?></p></td>
                                                <td><p style="color: blue; font-weight:bold"><?=indo_currency($row->harga += $row->biaya += $row->biaya_ruangan) ?></p></td>
                        </tr>
                    <?php } ?>
              
                    
              </table>
  
</body>
</html>
   
          