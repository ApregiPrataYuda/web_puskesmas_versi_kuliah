<section class="content-header">
      <h1>
     Stock in
        <small>Stock in data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Stock</a></li>
        <li><a href="<?=site_url('Dashboard')?>">dashboard</a></li>
      </ol>
    </section>


     <?php $this->load->view('flash_messages');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Stock</h3>
              <div class="pull-right">
                
              <a href="<?= site_url('Stock/exportexcel')?>" class="btn btn-success btn-sm"><i class="fa  fa-file-excel-o">  Export excel</i></a>
             
                 <a href="<?= site_url('Stock/in/add')?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"> add stock in</i></a>
              </div>
            </div>
            <div class="box-body table-responsive">
              <table class="table table-bordered table-striped" id="table1">
                <thead>
                <tr>
                  <th style="width:5%;">#NO</th>
                  <th>kode obat</th>
                  <th>nama obat</th>
                  <th>Qty/ Jumlah</th>
                  <th>date</th>
                  <th style="width:5%;">pilihan</th>
                </tr>
                     </thead>

                      <?php  $no=1;
                      foreach ($row as $key => $data) {  ?>
                      <tr>
                                 <td><?=$no++?></td>
                                  <td><?=$data->kode_obat?></td>
                                    <td class="text-center"><?=$data->nama_obat?></td>
                                       <td class="text-right"><?=$data->qty?></td>
                                          <td class="text-center"><?=indo_date($data->date)?></td>
                                       <td>
                                         <a id="set_dtl" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-obat"
                                            data-kode_obat="<?=$data->kode_obat?>"
                                                data-detail="<?=$data->detail?>"
                                                data-qty="<?=$data->qty?>"
                                         ><i class="fa fa-eye">detail</i> </a>
                                         <a href="<?=site_url('Stock/in/delete/'.$data->stock_id.'/'.$data->obat_id)?>" onclick="return confirm('yakin data akan di hapus?')" class="btn btn-warning btn-xs"><i class="fa fa-trash">delete</i> </a>
                                        </td>
                                        </tr>
                     <?php } ?>
                  
              </table>
            </div>  
          </div>
   </section>

  <div class="modal fade" id="modal-obat">
          <div class="modal-dialog modal-sm modal-info">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">detail stock in</h4>
              </div>
              <div class="modal-body table-responsive">
                 <table class="table table-bordered no-margin">
                   <tbody>
                   <tr>
                           <th>kode obat</th>
                           <td><span id="kode_obat"></span></td>
                   </tr>

                   <tr>
                           <th>jumlah inputan stock awal</th>
                           <td><span id="qty"></span></td>
                   </tr>

                    <tr>
                           <th>detail</th>
                           <td><span id="detail"></span></td>
                   </tr>
                   </tbody>
                 </table>
               
              </div>
            </div>
          </div>
        </div>
    



 


  <script>
 $(document).ready(function() {
        $(document).on('click', '#set_dtl', function() {
                       var kode_obat = $(this).data('kode_obat');
                       var qty = $(this).data('qty');
                         var detail = $(this).data('detail');
                       $( '#kode_obat').text(kode_obat);
                       $( '#qty').text(qty);
                        $( '#detail').text(detail);
        })
 }) 
</script>
