<?php 
class Pelayanan_m extends Ci_model
{
   public function get($id = null)
   {
     $this->db->from('pelayanan');
      if ($id != null) {
           $this->db->where('pelayanan_id', $id);
      }
        $query = $this->db->get();
          return $query;
   }

   public function add($post)
   {
      $params = array(
               'penanganan' => $post ['penanganan'],
               'biaya' => $post ['biaya'],
                 );
                 $this->db->insert('pelayanan',$params);
   }


   public function edit($post)
   {
      $params = array(
               'penanganan' => $post ['penanganan'],
               'biaya' => $post ['biaya'],
                 );
                
                 $this->db->where('pelayanan_id', $post['id']);
                 $this->db->update('pelayanan',$params);
   }

   public function delete($id)
   {
       $this->db->where('pelayanan_id',$id);
       $this->db->delete('pelayanan');
   }
}



?>