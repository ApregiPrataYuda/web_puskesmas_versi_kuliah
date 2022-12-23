<section class="content-header">
      <h1>
        Ruangan
        <small>form data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Ruangan </a></li>
        <li><a href="<?=site_url('Ruangan')?>">Ruangan</a></li>
      </ol>
    </section>



 <section class="content">
    <div class="box">
    <div class="box-header">
      <h4 style="color:blue;" class="box-title"><?=$page?> Ruangan</h4>
      <div class="pull-right">
      <a href="<?=site_url('Ruangan')?>" class="btn btn-danger btn-xs"><i class="fa fa-undo">back</i></a>
      </div>
    </div>
      <div class="box-body">
          <div class="row">
          <div class="col-md-4 col-md-offset-4">
            
            <?php echo form_open_multipart('Ruangan/proses')?>


              <div class="form-group">
              <input type="hidden" value="<?=$row->ruangan_id?>"  name="id">
              <label style="color:blue;" for="kode_ruangan">Kode Ruangan**</label>
              <input type="text" name="kode_ruangan"  value="<?=$row->kode_ruangan?>" class="form-control" placeholder="kode Ruangan" required>
              </div>

              <div class="form-group">
              <label style="color:blue;" for="nama_ruangan"> Nama Ruangan**</label>
              <input type="text" name="nama_ruangan"  value="<?=$row->nama_ruangan?>" class="form-control" placeholder="nama Ruangan" required>
              </div>

              <div class="form-group">
              <label style="color:blue;" for="biaya_ruangan">biaya**</label>
              <input type="number" name="biaya_ruangan"  value="<?=$row->biaya_ruangan?>" class="form-control" placeholder="biaya Ruangan" required>
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
   
         


   
  