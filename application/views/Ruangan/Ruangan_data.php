<section class="content-header">
      <h1>
       Ruangan-data
        <small>Ruangan-data </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Ruangan-data </a></li>
        <li><a href="<?=site_url('Dashboard')?>">dashboard</a></li>
      </ol>
    </section>

   
    <!-- Main content -->
    <section class="content">
      <?php $this->load->view('flash_messages')?>
          <div class="box">
            <div class="box-header witd-border">
              <h3 class="box-title">Ruangan-data</h3>
              <div class="pull-right">
           
              <a href="<?= site_url('Ruangan/exportexcel')?>" class="btn btn-success btn-sm"><i class="fa  fa-file-excel-o">  Export excel</i></a>
              <a href="<?= site_url('Ruangan/exportpdf')?>" class="btn btn-warning btn-sm"><i class="fa  fa-file-excel-o">  Export pdf</i></a>
                 <a href="<?= site_url('Ruangan/add')?>" class="btn btn-success btn-sm"><i class="fa fa-plus">  new data</i></a>
               
              </div>
            </div>
            <div class="box-body table-responsive">
              <table class="table table-bordered table-striped" id="table1">
                <thead>
                <tr>
                  <td style="width:5%;">#NO</td>
                  <th>Kode Ruangan</th>
                    <th>Nama Ruangan</th>
                    <th>Biaya Ruangan</th>
                  <th style="width:5%;">pilihan</th>
                </tr>
                    </thead>   
                    <?php  $no=1;
                          foreach ($row->result() as $key => $data) { ?>
                                      <tr>
                                             <td><?=$no++?>.</td>
                                             <td><?=$data->kode_ruangan?></td>
                                                  <td><?=$data->nama_ruangan?></td>
                                                  <td><?= indo_currency($data->biaya_ruangan)?></td>
                                             <td>
                                                   <a href="<?= site_url('ruangan/edit/'.$data->ruangan_id);?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                                      <a href="<?=site_url('ruangan/delete/'.$data->ruangan_id)?>" onclick="return confirm('yakin data akan di hapus?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                             </td>
                                      </tr>
                          <?php }  ?>
              </table>
            </div>  
          </div>
    </section>
  
    
   