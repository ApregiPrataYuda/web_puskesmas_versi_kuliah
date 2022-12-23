<?php 

class Ruangan_m extends CI_model
{
      public function get($id = null)
      {
        $this->db->from('ruangan');
        if ($id != null) {
          $this->db->where('ruangan_id', $id);
        }
         $query = $this->db->get();
          return $query;
      }

      public function add($post)
      {
         $params = [
             'kode_ruangan' => $post['kode_ruangan'],
             'nama_ruangan' => $post['nama_ruangan'],
             'biaya_ruangan' => $post['biaya_ruangan'],

         ];
            $this->db->insert('ruangan',$params);
      }


      public function delete($id)
    {
         $this->db->where('ruangan_id',$id);
           $this->db->delete('ruangan');
    }

    public function edit($post)
    {
       $params = [
           'kode_ruangan' => $post['kode_ruangan'],
           'nama_ruangan' => $post['nama_ruangan'],
           'biaya_ruangan' => $post['biaya_ruangan'],

       ];
          $this->db->where('ruangan_id',$post['id']);
          $this->db->update('ruangan',$params);
    }
    

    public function gets($id = null)
      {
        $this->db->from('ruangan');
        if ($id != null) {
          $this->db->where('ruangan_id', $id);
        }
         $query = $this->db->get();
          return $query;
      }

}

?>