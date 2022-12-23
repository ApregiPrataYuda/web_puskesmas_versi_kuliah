<section class="content-header">
      <h1>
       Obat-data
        <small>Obat-data </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Obat-data </a></li>
        <li><a href="<?=site_url('Dashboard')?>">dashboard</a></li>
      </ol>
    </section>

   
    <!-- Main content -->
    <section class="content">
      <?php $this->load->view('flash_messages')?>
          <div class="box">
            <div class="box-header witd-border">
              <h3 class="box-title">Obat-data</h3>
              <div class="pull-right">
                
              <a href="<?= site_url('Obat/exportexcel')?>" class="btn btn-success btn-sm"><i class="fa  fa-file-excel-o">  Export excel</i></a>
              <a href="<?= site_url('Obat/exportpdf')?>" class="btn btn-warning btn-sm"><i class="fa  fa-file-excel-o">  Export pdf</i></a>
           
                 <a href="<?= site_url('Obat/add')?>" class="btn btn-success btn-sm"><i class="fa fa-plus">  new data</i></a>
              </div>
            </div>
            <div class="box-body table-responsive">
              <table class="table table-bordered table-striped" id="table1">
                <thead>
                <tr>
                  <td style="width:5%;">#NO</td>
                  <th>Nama Obat</th>
                  <th>Kode Obat</th>
                    <th>Harga Obat</th>
                    <th>tanggal expried obat</th>
                    <th>Stock</th>
                  <th style="width:5%;">pilihan</th>
                </tr>
                    </thead>   
                    <?php  $no=1;
                          foreach ($row->result() as $key => $data) { ?>
                                      <tr>
                                             <td><?=$no++?>.</td>
                                             <td><?=$data->nama_obat?></td>
                                             <td><?=$data->kode_obat?></td>
                                                  <td><?= indo_currency($data->harga)?></td>
                                                 <td>
                                                 <?php if ($data->experied != null) { ?>
                                                    <?=$data->experied?>
                                                  <?php } ?>
                                                 </td>
                                                  <td><?=$data->stock?></td>
                                             <td>
                                                   <a href="<?= site_url('Obat/edit/'.$data->obat_id);?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                                      <a href="<?=site_url('Obat/delete/'.$data->obat_id)?>" onclick="return confirm('yakin data akan di hapus?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                             </td>
                                      </tr>
                          <?php }  ?>
              </table>
            </div>  
          </div>
    </section>
  
    
   