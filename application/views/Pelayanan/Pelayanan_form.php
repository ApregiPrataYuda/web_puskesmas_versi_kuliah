<section class="content-header">
      <h1>
        Pelayanan
        <small>form data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Pelayanan </a></li>
        <li><a href="<?=site_url('Pelayanan')?>">Pelayanan</a></li>
      </ol>
    </section>



 <section class="content">
    <div class="box">
    <div class="box-header">
      <h4 style="color:blue;" class="box-title"><?=$page?> Pelayanan</h4>
      <div class="pull-right">
      <a href="<?=site_url('Pelayanan')?>" class="btn btn-danger btn-xs"><i class="fa fa-undo">back</i></a>
      </div>
    </div>
      <div class="box-body">
          <div class="row">
          <div class="col-md-4 col-md-offset-4">
            
            <?php echo form_open_multipart('Pelayanan/proses')?>


              <div class="form-group">
              <input type="hidden" value="<?=$row->pelayanan_id?>"  name="id">
              <label style="color:blue;" for="penanganan">Kode Pelayanan**</label>
              <input type="text" name="penanganan"  value="<?=$row->penanganan?>" class="form-control" placeholder="penanganan" required>
              </div>

              <div class="form-group">
              <label style="color:blue;" for="biaya"> Nama Pelayanan**</label>
              <input type="number" name="biaya"  value="<?=$row->biaya?>" class="form-control" placeholder="Biaya" required>
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
   
         


   
  