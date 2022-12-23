<?php
 class Obat_m extends CI_Model
 {
    public function get($id = null)
    {
      $this->db->from('obat');
      if ($id != null) {
        $this->db->where('obat_id', $id);
      }
      $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
       $params = [
           'nama_obat' => $post['nama_obat'],
           'kode_obat' => $post['kode_obat'],
           'harga' => $post['harga'],
           'experied' => $post['experied'],

       ];
          $this->db->insert('obat',$params);
    }


    public function delete($id)
  {
       $this->db->where('obat_id',$id);
         $this->db->delete('obat');
  }

  public function edit($post)
  {
              $params = [
                'nama_obat' => $post['nama_obat'],
                'kode_obat' => $post['kode_obat'],
                'harga' => $post['harga'],
               
            ];
            if($post['experied'] != null) {
              $params['experied'] = $post['experied'];
        }
        $this->db->where('obat_id',$post['id']);
        $this->db->update('obat',$params);
  }



  public function update_stock_in($data)
  {
         $qty = $data['qty'];
         $id = $data['obat_id'];
          $sql = "UPDATE obat SET stock = stock + '$qty' WHERE obat_id  = '$id' ";
          $this->db->query($sql);
 
   }


   public function update_stock_out($data)
 {
        $qty = $data['qty'];
        $id = $data['obat_id'];
         $sql = "UPDATE obat SET stock = stock - '$qty' WHERE obat_id  = '$id' ";
         $this->db->query( $sql);
}


public function updated_stock_out($data)
{
       $qty = $data['qty'];
       $id = $data['obat_id'];
        $sql = "UPDATE obat SET stock = stock + '$qty' WHERE obat_id  = '$id' ";
        $this->db->query( $sql);

 }


 public function gets($id = null)
    {
      $this->db->from('obat');
      if ($id != null) {
        $this->db->where('obat_id', $id);
      }
      $query = $this->db->get();
        return $query;
    }



   
 }

?>