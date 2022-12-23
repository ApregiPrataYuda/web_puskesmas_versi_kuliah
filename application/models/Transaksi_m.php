<?php 
class Transaksi_m extends CI_model
{

  public function get($id = null)
  {
    
      $this->db->from('transaksi');
      if ($id != null) {
       $this->db->where('transaksi_id', $id);
      }
             $query =  $this->db->get();
             return  $query;
  }



    public function delete($id)
    {
           $this->db->where('transaksi_id', $id);
           $this->db->delete('transaksi');
    }


    public function add($post)
    {
        $params = [
          'pasien_id' => $post['pasien_id'],
              // 'kode_transaksi' => $post['kode_transaksi'],
                  'tanggal' => $post['tanggal'],
                    'user_id' => $this->session->userdata('user_id'),
    ];
     $this->db->insert('transaksi',$params);
    }

    


      public function get_transaksi()
      { 
                  $this->db->select('transaksi.transaksi_id,pasien.kode_pasien,pasien.nama_pasien as nama_pasien, kode_transaksi,tanggal,user.name as name,pasien.pasien_id');
                  $this->db->from('transaksi');
                  $this->db->join('pasien','transaksi.pasien_id = pasien.pasien_id');
                  $this->db->join('user','transaksi.user_id = user.user_id');
                  $this->db->order_by('transaksi_id','desc');
                   $query = $this->db->get();
                      return  $query;
      }

     



    }