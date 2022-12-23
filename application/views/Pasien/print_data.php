<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print data kode Pasien <?=$row->kode_pasien?></title>
</head>
<body>

             
       <h3> <u>Puskesmas Kedaton</u>  </h3>
       <p>jln.kedaton no 23 kaliawi bandar lampung.  telp:09xxxxxxx</p>
       <u></u>
                         
             <br>

             <label for="" style="color:blue;" >kode Pasien: </label>
                <?=$row->kode_pasien?><br>
                 <label for="" style="color:blue;" > nama pasien : </label>
                <?=$row->nama_pasien?><br>
                 <label for="" style="color:blue;" > alamat pasien: </label>
                <?=$row->alamat?><br>
                 <label for="" style="color:blue;" > biaya ruangan: </label>
                 <?= indo_currency($row->biaya_ruangan) ?><br>
                 <label for="" style="color:blue;" > biaya pelayanan: </label>
                 <?= indo_currency($row->biaya) ?><br>
                <label for="" style="color:blue;" > biaya obat: </label>
                <?= indo_currency($row->harga) ?><br>


                <label for="" style="color:blue;" > Total Bayar: </label>
                <?=indo_currency($row->harga += $row->biaya += $row->biaya_ruangan) ?><br><br><br>


             



Direktur,
<br><br>
<u>Apregi prata yuda</u>
<p>Bandar Lampung,<?php $date = date('Y-m-d'); 
                           echo  "$date";  ?></p>

  






       
</body>
</html>