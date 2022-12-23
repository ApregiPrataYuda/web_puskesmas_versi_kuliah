<section class="content-header">
      <h1>
      Transaksi
        <small>form tambah transaksi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">transaksi</a></li>
        <li><a href="<?=site_url('')?>">Dashboard</a></li>
      </ol>
    </section>



 <section class="content">
    <div class="box">
    <div class="box-header">
      <h4 style="color:blue;" class="box-title">Transaksi </h4>
      <div class="pull-right">
      <a href="<?=site_url('Transaksi/add')?>" class="btn btn-danger btn-xs"><i class="fa fa-undo">back</i></a>
      </div>
    </div>
      <div class="box-body">
          <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <?php echo form_open_multipart('Transaksi/proses')?>
              <div class="form-group">
              <label style="color:blue;" for="tanggal">Tanggal*</label>
              <input type="tanggal" name="tanggal"  value="<?=date('Y-m-d')?>" class="form-control" placeholder="tanggal" required>
              </div>


        
            

              <div>
                   <label style="color:blue;" for="kode_pasien">kode Pasien*</label>
              </div>
                <div class="form-group input-group">
                  <input type="hidden" name="pasien_id" id="pasien_id"  required> 
                  <input type="text" name="kode_pasien" id="kode_pasien"  class="form-control"  required autofocus readonly>
                   <span class="input-group-btn ">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-transaksi">
                         <i class="fa fa-search"></i>
                      </button>
                   </span> 
                </div>
            <div class="form-group">
              <label style="color:blue;" for="nama_pasien">nama pasien*</label>
              <input type="text" name="nama_pasien" id="nama_pasien"  class="form-control"  readonly>
            </div>


           
              <div class="form-group">
              <label style="color:blue;" for="user">user input</label>
                  <select name="user" id="user"  class="form-control">
                  <option value="">-pilih-</option>
                <?php foreach ($user as $i => $data) {  
                                echo' <option value="'.$data->user_id.'">'.$data->name.'</option>';
                     } ?>
                  </select>
                  
              </div>



               <div class="form-group">
                  <button type="submit"  name="add_trans" class="btn btn-primary"><i class="fa fa-paper-plane"></i> save </button>
                   <button type="reset" class="btn btn-warning"><i class="fa fa-undo"></i> reset</button>
               </div>
         <?php echo form_close() ?>
          </div>
          </div>
            </div>  
         </div>
    </section>



    <div class="modal fade" id="modal-transaksi">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">select transaksi </h4>
              </div>
              <div class="modal-body table-responsive">
                  <table class="table table-bordered table-striped" id="table1">
                <thead>
                <tr>
                  <th style="width:5%;">#NO</th>
                  <th>kode pasien</th>
                  <th>nama pasien</th>
                  <!-- <th>alamat pasien</th>
                   <th>nama penanganan</th>
                   <th>ruangan pasien</th> -->
                </tr>
                     </thead>
                        <?php   $no=1;
                        foreach ($pasien as $i => $data) {  ?>
                             <tr>
                             <td><?=$no++?>.</td> 
                                <td><?=$data->kode_pasien?></td>
                                 <td><?=$data->nama_pasien?></td>
                                    <!-- <td><?=$data->alamat?></td>
                                    <td><?=$data->nama_ruangan?></td>
                                    <td ><?=$data->penanganan?></td> -->
                                   
                                    <td>
                                   <button class="btn btn-primary btn-xs" id="select"
                                   data-id="<?=$data->pasien_id?>"
                                    data-kode_pasien="<?=$data->kode_pasien?>"
                                    data-nama_pasien="<?=$data->nama_pasien?>"
                                    data-alamat="<?=$data->alamat?>"
                                    data-nama_ruangan="<?=$data->nama_ruangan?>"
                                    data-penanganan="<?=$data->penanganan?>"
                                    data-nama_obat="<?=$data->nama_obat?>
                                    
                                    
                                    ">
                                    
                                      <i class="fa fa-check">select</i>
                                     </button>
                                    </td>
                             </tr>
                        <?php } ?>
              </table>
              </div>
            </div>
          </div>
        </div>

 <script>
 $(document).ready(function() {
        $(document).on('click', '#select', function() {
                      var pasien_id = $(this).data('id');
                       var kode_pasien = $(this).data('kode_pasien');
                        var nama_pasien = $(this).data('nama_pasien');
                        var alamat = $(this).data('alamat');
                       var nama_ruangan = $(this).data('nama_ruangan');
                       var penanganan = $(this).data('penanganan');
                       var nama_obat = $(this).data('nama_obat');
                       
                       $( '#pasien_id').val(pasien_id);
                       $( '#kode_pasien').val(kode_pasien);
                       $( '#nama_pasien').val(nama_pasien);
                       $( '#alamat').val(alamat);
                       $( '#nama_ruangan').val(nama_ruangan);
                       $( '#penanganan').val(penanganan);
                       $( '#nama_obat').val(nama_obat);
                       $( '#modal-transaksi').modal('hide');
        })
 }) 
</script>























