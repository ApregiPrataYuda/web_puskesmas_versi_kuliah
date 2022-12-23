<section class="content-header">
      <h1>
     transaksi
        <small>Transaksi in data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Transaksi</a></li>
        <li><a href="<?=site_url('Dashboard')?>">dashboard</a></li>
      </ol>
    </section>



    <!-- Main content -->
    <section class="content col-md-6">
      <?php $this->load->view('flash_messages')?>
          <div class="box">
            <div class="box-header witd-border">
              <h3 class="box-title">transaksi-data</h3>
              <div class="pull-right">

           
               
                <a href="<?= site_url('Transaksi/add')?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"> add transaksi</i></a>
              </div>
            </div>
            <div class="box-body table-responsive">
              <table class="table table-bordered table-striped" id="table1">
                <thead>
                <tr>
                  <th style="width:5%;">#NO</th>
                  <th>nama pasien</th>
                  <th>tanggal</th>
                  <th style="width:5%;">pilihan</th>
                </tr>
                    </thead>   
                    <?php  $no=1;
                      foreach ($row as $key => $data) {  ?>
                      <tr>
                                 <td><?=$no++?></td>
                                    <td><?=$data->nama_pasien?></td>
                                    <td><?=$data->tanggal?></td>
                                    <td>
                                    <a href="<?= site_url('Pasien/print_data/'.$data->pasien_id);?>" class="btn btn-primary btn-xs"><i class="fa fa-print">cetak nota pembayaran</i></a><br>
                                    <a href="<?=site_url('Transaksi/delete/'.$data->transaksi_id)?>" onclick="return confirm('yakin data akan di hapus?')" class="btn btn-danger btn-xs"><i class="fa fa-trash">Hapus data transaksi</i></a>
                                    </td>
                                        </tr>
                     <?php } ?>
              </table>
            </div>  
          </div>
    </section>
  
    
   

















