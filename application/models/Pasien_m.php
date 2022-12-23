<?php 
class Pasien_m extends Ci_model
{
  public function get($id = null)
  {
      $this->db->select('pasien.*,ruangan.nama_ruangan as nama_ruangan');
      $this->db->select('pasien.*,ruangan.biaya_ruangan as biaya_ruangan');

      $this->db->select('pasien.*,pelayanan.penanganan as penanganan');
      $this->db->select('pasien.*,pelayanan.biaya as biaya');

      $this->db->select('pasien.*,obat.nama_obat as nama_obat');
      $this->db->select('pasien.*,obat.harga as harga');
      $this->db->from('pasien');
      $this->db->join('ruangan','ruangan.ruangan_id = pasien.ruangan_id');
      $this->db->join('pelayanan','pelayanan.pelayanan_id = pasien.pelayanan_id');
      $this->db->join('obat','obat.obat_id = pasien.obat_id');
    
     
      
     
     
      if ($id != null) {
          $this->db->where('pasien_id', $id);
      };
      $query = $this->db->get();
       return $query;
  }



  public function add($post)
  {
        $params = [
                    'kode_pasien' => $post['kode_pasien'],
                    'nama_pasien' => $post['nama_pasien'],
                    'alamat' => $post['alamat'],
                    'ruangan_id' => $post['ruangan_id'],
                    'pelayanan_id' => $post['pelayanan_id'],
                    'obat_id' => $post['obat_id'],
                ];
                $this->db->insert('pasien',$params);
  }


  
  public function edit($post)
  {
        $params = [
                    'kode_pasien' => $post['kode_pasien'],
                    'nama_pasien' => $post['nama_pasien'],
                    'alamat' => $post['alamat'],
                    'ruangan_id' => $post['ruangan_id'],
                    'pelayanan_id' => $post['pelayanan_id'],
                    'obat_id' => $post['obat_id'],
                ];
                $this->db->where('pasien_id', $post['id']);
                $this->db->update('pasien',$params);
  }



  public function delete($id)
  {
      $this->db->where('pasien_id', $id);
       $this->db->delete('pasien');
  }




  public function total_transaksi($id = null)
  {
      $this->db->select('pasien.*,ruangan.nama_ruangan as nama_ruangan');
      $this->db->select('pasien.*,ruangan.biaya_ruangan as biaya_ruangan');

      $this->db->select('pasien.*,pelayanan.penanganan as penanganan');
      $this->db->select('pasien.*,pelayanan.biaya as biaya');

      $this->db->select('pasien.*,obat.nama_obat as nama_obat');
      $this->db->select('pasien.*,obat.harga as harga');
      $this->db->from('pasien');
      $this->db->join('ruangan','ruangan.ruangan_id = pasien.ruangan_id');
      $this->db->join('pelayanan','pelayanan.pelayanan_id = pasien.pelayanan_id');
      $this->db->join('obat','obat.obat_id = pasien.obat_id');
     
     
     
      if ($id != null) {
          $this->db->where('pasien_id', $id);
      };
      $query = $this->db->get();
       return $query;
  }


  public function gets($id = null)
  {
      $this->db->select('pasien.*,ruangan.nama_ruangan as nama_ruangan');
      $this->db->select('pasien.*,ruangan.biaya_ruangan as biaya_ruangan');

      $this->db->select('pasien.*,pelayanan.penanganan as penanganan');
      $this->db->select('pasien.*,pelayanan.biaya as biaya');

      $this->db->select('pasien.*,obat.nama_obat as nama_obat');
      $this->db->select('pasien.*,obat.harga as harga');
      $this->db->from('pasien');
      $this->db->join('ruangan','ruangan.ruangan_id = pasien.ruangan_id');
      $this->db->join('pelayanan','pelayanan.pelayanan_id = pasien.pelayanan_id');
      $this->db->join('obat','obat.obat_id = pasien.obat_id');
    
     
      
     
     
      if ($id != null) {
          $this->db->where('pasien_id', $id);
      };
      $query = $this->db->get();
       return $query;
  }




}


 
?>