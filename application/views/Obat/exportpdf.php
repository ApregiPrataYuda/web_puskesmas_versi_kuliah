<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print data kode obat <?=$row->kode_obat?></title>
</head>
<body>
<h3 style="text-center">laporan Data obat : <?= date('Y-m-d')?></h3>
<table border="1" width="10%">
<thead>
                <tr>
                <td>NO</td>
                <th>Nama Obat</th>
                  <th>Kode Obat</th>
                    <th>Harga Obat</th>
                    <th>tanggal expried obat</th>
                    <th>Stock</th>
                </tr>
                    </thead>
                     <?php $no=1; 
                    foreach ($row->result() as $key => $row) { ?> 
                        <tr>
                        <td><?=$no++?>.</td>
                                             <td><?=$row->nama_obat?></td>
                                             <td><?=$row->kode_obat?></td>
                                                  <td><?= indo_currency($row->harga)?></td>
                                                 <td>
                                                 <?php if ($row->experied != null) { ?>
                                                    <?=$row->experied?>
                                                  <?php } ?>
                                                 </td>
                                                  <td><?=$row->stock?></td>
                                               
                        </tr>
                    <?php } ?>
              
                    
              </table>
             
      
       
</body>
</html>