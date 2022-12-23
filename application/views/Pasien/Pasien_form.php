<section class="content-header">
      <h1>
        Pasien
        <small>form data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Pasien </a></li>
        <li><a href="<?=site_url('Pasien')?>">Pasien</a></li>
      </ol>
    </section>



 <section class="content">
    <div class="box">
    <div class="box-header">
      <h4 style="color:blue;" class="box-title"><?=$page?> Pasien</h4>
      <div class="pull-right">
      <a href="<?=site_url('Pasien')?>" class="btn btn-danger btn-xs"><i class="fa fa-undo">back</i></a>
      </div>
    </div>
      <div class="box-body">
          <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <?php echo form_open_multipart('Pasien/proses')?>
            <div class="form-group">
              <input type="hidden" value="<?=$row->pasien_id?>"  name="id">
              <label style="color:blue;" for="kode_pasien">Kode Pasien**</label>
              <input type="text" name="kode_pasien"  value="<?=$row->kode_pasien?>" class="form-control" placeholder=" Kode Pasien" required>
              </div>

              <div class="form-group">
              <label style="color:blue;" for="nama_pasien"> Nama Pasien**</label>
              <input type="text" name="nama_pasien"  value="<?=$row->nama_pasien?>" class="form-control" placeholder="nama Pasien" required>
              </div>

              <div class="form-group">
              <label style="color:blue;" for="alamat">alamat**</label>
              <input type="text" name="alamat"  value="<?=$row->alamat?>" class="form-control" placeholder="alamat " required>
              </div>


              <div class="form-group">
              <label for="ruangan_id" name="ruangan_id"  style="color:blue;">Ruangan Pasien</label>
             <select name="ruangan_id" id="ruangan_id" class="form-control">
             <option value="">-pilih-</option>
                     <?php foreach ($Ruangan->result() as $key => $data){?>
                     <option value="<?=$data->ruangan_id?>" <?=$data->ruangan_id == $row->ruangan_id ? "selected" : null?>> <?=$data->nama_ruangan?></option>
                     <?php } ?>
             </select>
              </div>

              <div class="form-group">
              <label for="pelayanan_id" name="pelayanan_id"  style="color:blue;">nama pelayanan</label>
             <select name="pelayanan_id" id="pelayanan_id" class="form-control">
             <option value="">-pilih-</option>
                     <?php foreach ($Pelayanan->result() as $key => $data){?>
                     <option value="<?=$data->pelayanan_id?>" <?=$data->pelayanan_id == $row->pelayanan_id ? "selected" : null?>> <?=$data->penanganan?></option>
                     <?php } ?>
             </select>
              </div>


              <div class="form-group">
              <label for="obat_id" name="obat_id"  style="color:blue;">nama obat</label>
             <select name="obat_id" id="obat_id" class="form-control">
             <option value="">-pilih-</option>
                     <?php foreach ($Obat->result() as $key => $data){?>
                     <option value="<?=$data->obat_id?>" <?=$data->obat_id == $row->obat_id ? "selected" : null?>> <?=$data->nama_obat?></option>
                     <?php } ?>
             </select>
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
   
         


   
  