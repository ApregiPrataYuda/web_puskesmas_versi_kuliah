<?php 
class Stock_m extends CI_model
{


  public function get($id = null)
  {
      $this->db->from('stock');
      if ($id != null) {
                  $this->db->where('stock_id', $id);
      }
             $query =  $this->db->get();
             return  $query;
  }



    public function delete($id)
    {
           $this->db->where('stock_id', $id);
           $this->db->delete('stock');
    }




    public function add_stock_in($post)
      {
          $params = [
            'obat_id' => $post['obat_id'],
              'type' =>'in',
                'detail' => $post['detail'],
                   'qty' => $post['qty'],
                    'date' => $post['date'],
                   
      ];
       $this->db->insert('stock',$params);
      }



  
      public function get_stock_in()
      { 
                  $this->db->select('stock.stock_id,obat.kode_obat,obat.nama_obat as nama_obat, qty,date,detail,obat.obat_id');
                  $this->db->from('stock');
                  $this->db->join('obat','stock.obat_id = obat.obat_id');
                  $this->db->where('type','in');
                  $this->db->order_by('stock_id','desc');
                   $query = $this->db->get();
                      return  $query;
   
      }


      public function gets()
      { 
                  $this->db->select('stock.stock_id,obat.kode_obat,obat.nama_obat as nama_obat, qty,date,type,detail,obat.obat_id');
                  $this->db->from('stock');
                  $this->db->join('obat','stock.obat_id = obat.obat_id');
                  $this->db->where('type','in');
                  $this->db->order_by('stock_id','desc');
                   $query = $this->db->get();
                      return  $query;
   
      }









      // batas model stock in/out
   
    
      public function get_stock_out()
      { 
                  $this->db->select('stock.stock_id,obat.kode_obat,obat.nama_obat as nama_obat, qty,date,detail,obat.obat_id');
                  $this->db->from('stock');
                  $this->db->join('obat','stock.obat_id = obat.obat_id');
                  $this->db->where('type','out');
                  $this->db->order_by('stock_id','desc');
                   $query = $this->db->get();
                      return  $query;
   
      }



      public function add_stock_out($post)
      {
          $params = [
            'obat_id' => $post['obat_id'],
              'type' =>'out',
                'detail' => $post['detail'],
                   'qty' => $post['qty'],
                    'date' => $post['date'],
                    
      ];
       $this->db->insert('stock',$params);
      }



      public function getz()
      { 
                  $this->db->select('stock.stock_id,obat.kode_obat,obat.nama_obat as nama_obat, qty,date,type,detail,obat.obat_id');
                  $this->db->from('stock');
                  $this->db->join('obat','stock.obat_id = obat.obat_id');
                  $this->db->where('type','out');
                  $this->db->order_by('stock_id','desc');
                   $query = $this->db->get();
                      return  $query;
   
      }

  }