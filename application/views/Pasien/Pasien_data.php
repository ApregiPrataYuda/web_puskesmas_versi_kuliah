<section class="content-header">
      <h1>
       Pasien-data
        <small>Pasien-data </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Pasien-data </a></li>
        <li><a href="<?=site_url('Dashboard')?>">dashboard</a></li>
      </ol>
    </section>

   
    <!-- Main content -->
    <section class="content">
    <?php $this->load->view('flash_messages')?>
          <div class="box">
            <div class="box-header witd-border">
              <h3 class="box-title">Pasien-data</h3>
              <div class="pull-right">
                
              <a href="<?= site_url('Pasien/exportexcel')?>" class="btn btn-success btn-sm"><i class="fa  fa-file-excel-o">  Export excel</i></a>
              <a href="<?= site_url('Pasien/exportpdf')?>" class="btn btn-danger btn-sm"><i class="fa  fa-file-excel-o">  Export pdf</i></a>
              
                 <a href="<?= site_url('Pasien/add')?>" class="btn btn-success btn-sm"><i class="fa fa-plus">  new data</i></a>
              </div>
            </div>
            <div class="box-body table-responsive">
              <table class="table table-bordered table-striped" id="table1">
                <thead>
                <tr>
                  <td style="width:5%;">#NO</td>
                  <th>Kode Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Alamat Pasien</th>
                    <th>Ruangan Pasien</th>
                    <th>nama penanganan</th>
                    <th>nama obat</th>
                    <th>Total bayar</th>
                  <th style="width:5%;">pilihan</th>
                </tr>
                    </thead>
                   
                    <?php
                           
                    
                      $no=1;
                          foreach ($row->result() as $key => $data) { ?>
                                      <tr>
                                             <td><?=$no++?>.</td>
                                             <td><?=$data->kode_pasien?></td>
                                             <td><?=$data->nama_pasien?></td>
                                             
                                                <td><?=$data->alamat ?></td>
                                                <td><?=$data->nama_ruangan ?> <br> <p style="color: red; font-weight:bold">| harga Total |<?= indo_currency($data->biaya_ruangan) ?></td>
                                                <td><?=$data->penanganan ?> <br> <p style="color: red; font-weight:bold">| harga Total |<?= indo_currency($data->biaya) ?></p></td>
                                                <td><?=$data->nama_obat ?>  <br> <p style="color: red; font-weight:bold">| harga Total |<?= indo_currency($data->harga) ?></p></td>
                                                <td><p style="color: blue; font-weight:bold"><?=indo_currency($data->harga += $data->biaya += $data->biaya_ruangan) ?></p></td>
                                                  <td>
                                                   <a href="<?= site_url('pasien/edit/'.$data->pasien_id);?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                                      <a href="<?=site_url('pasien/delete/'.$data->pasien_id)?>" onclick="return confirm('yakin data akan di hapus?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                             </td>
                                      </tr>

                                      
                          <?php }  ?>


                         
              </table>
            </div>  
          </div>
    </section>
  
    
   