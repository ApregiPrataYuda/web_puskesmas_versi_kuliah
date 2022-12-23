<section class="content-header">
      <h1>
        Obat
        <small>form data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Obat </a></li>
        <li><a href="<?=site_url('Obat')?>">Obat</a></li>
      </ol>
    </section>



 <section class="content">
    <div class="box">
    <div class="box-header">
      <h4 style="color:blue;" class="box-title"><?=$page?> Obat</h4>
      <div class="pull-right">
      <a href="<?=site_url('Obat')?>" class="btn btn-danger btn-xs"><i class="fa fa-undo">back</i></a>
      </div>
    </div>
      <div class="box-body">
          <div class="row">
          <div class="col-md-4 col-md-offset-4">
            
            <?php echo form_open_multipart('Obat/proses')?>


              <div class="form-group">
              <input type="hidden" value="<?=$row->obat_id?>"  name="id">
              <label style="color:blue;" for="nama_obat">Nama Obat**</label>
              <input type="text" name="nama_obat"  value="<?=$row->nama_obat?>" class="form-control" placeholder="Nama Obat" required>
              </div>

              <div class="form-group">
              <label style="color:blue;" for="kode_obat">Kode Obat**</label>
              <input type="text" name="kode_obat"  value="<?=$row->kode_obat?>" class="form-control" placeholder="Kode Obat" required>
              </div>


              <div class="form-group">
              <label style="color:blue;" for="harga">Harga Obat**</label>
              <input type="number" name="harga"  value="<?=$row->harga?>" class="form-control" placeholder="Harga Obat" required>
              </div>


              <div class="form-group">
              <label style="color:blue;" for="experied">tanggal expried Obat**</label>
              <input type="date" name="experied"  value="<?=$row->experied?>" class="form-control">
              </div>

            
               <div class="form-group">
                  <button type="submit"  name="<?=$page?>" class="btn btn-primary"><i class="fa fa-paper-plane"></i> <?=$page?></button>
                   <button type="reset" class="btn btn-warning"><i class="fa fa-undo"></i> reset</button>
               </div>
         <?php echo form_close() ?>
          </div>
          </div>
            </div>  
         </div>
    </section>
   
         


   
  