<section class="content-header">
      <h1>
       Stock in
        <small>form data stock</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">stock</a></li>
        <li><a href="<?=site_url('')?>">Dashboard</a></li>
      </ol>
    </section>



 <section class="content">
    <div class="box">
    <div class="box-header">
      <h4 style="color:blue;" class="box-title">Stock in</h4>
      <div class="pull-right">
      <a href="<?=site_url('Stock/in')?>" class="btn btn-danger btn-xs"><i class="fa fa-undo">back</i></a>
      </div>
    </div>
      <div class="box-body">
          <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <?php echo form_open_multipart('stock/proses')?>
              <div class="form-group">
              <label style="color:blue;" for="date">date*</label>
              <input type="date" name="date"  value="<?=date('Y-m-d')?>" class="form-control" placeholder="date" required>
              </div>

              <div>
                   <label style="color:blue;" for="barcode">kode obat*</label>
              </div>
                <div class="form-group input-group">
                  <input type="hidden" name="obat_id" id="obat_id"  required> 
                  <input type="text" name="kode_obat" id="kode_obat"  class="form-control"  required autofocus>
                   <span class="input-group-btn ">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-obat">
                         <i class="fa fa-search"></i>
                      </button>
                   </span> 
                </div>
                <div class="form-group">
              <label style="color:blue;" for="nama_obat">nama obat*</label>
              <input type="text" name="nama_obat" id="nama_obat"  class="form-control"  readonly>
              </div>


              <div class="form-group"> 
               <div class="row">
                   <div class="col-md-4">
                    <label for="stock">initial stock</label>
                       <input type="text" name="stock"  id="stock" class="form-control" value="-" readonly >
                  </div>
               </div>
              </div>


                   <div class="form-group">
              <label style="color:blue;" for="detail">detail*</label>
              <input type="text" name="detail"  class="form-control" placeholder="kulakan / tambahan / etc" required>
              </div>

              
                 <div class="form-group">
              <label style="color:blue;" for="qty">qty*</label>
              <input type="varchar" name="qty"  class="form-control" required>
              </div>

               <div class="form-group">
                  <button type="submit"  name="in_add" class="btn btn-primary"><i class="fa fa-paper-plane"></i> save </button>
                   <button type="reset" class="btn btn-warning"><i class="fa fa-undo"></i> reset</button>
               </div>
         <?php echo form_close() ?>
          </div>
          </div>
            </div>  
         </div>
    </section>
   

    <div class="modal fade" id="modal-obat">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">select stock obat</h4>
              </div>
              <div class="modal-body table-responsive">
                  <table class="table table-bordered table-striped" id="table1">
                <thead>
                <tr>
                  <th style="width:5%;">#NO</th>
                  <th>kode obat</th>
                  <th>nama obat</th>
                  <th>harga</th>
                   <th>stock</th>
                   <th>aksi</th>
                </tr>
                     </thead>
                        <?php   $no=1;
                        foreach ($obat as $i => $data) {  ?>
                             <tr>
                                <td><?=$no++?>.</td> 
                                <td><?=$data->kode_obat?></td>
                                 <td><?=$data->nama_obat?></td>
                                   <td class="text-right"><?=indo_currency($data->harga)?></td>
                                    <td class="text-right"><?=$data->stock?></td>
                                    <td>
                                   <button class="btn btn-primary btn-xs" id="select"
                                    data-id="<?=$data->obat_id?>"
                                    data-kode_obat="<?=$data->kode_obat?>"
                                    data-nama_obat="<?=$data->nama_obat?>"
                                    data-stock="<?=$data->stock?>">
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
                       var obat_id = $(this).data('id');
                       var kode_obat = $(this).data('kode_obat');
                        var nama_obat = $(this).data('nama_obat');
                        var harga = $(this).data('harga');
                       var stock = $(this).data('stock');
                       $( '#obat_id').val(obat_id);
                       $( '#kode_obat').val(kode_obat);
                       $( '#nama_obat').val(nama_obat);
                       $( '#stock').val(stock);
                       $( '#modal-obat').modal('hide');
        })
 }) 
</script>