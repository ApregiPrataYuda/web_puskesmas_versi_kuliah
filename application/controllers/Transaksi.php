<?php 
class Transaksi extends Ci_controller
{
  function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model(['Obat_m','Pasien_m','Ruangan_m','Pelayanan_m','User_m','Transaksi_m']);
  }
 


public function transaksi_data()
{
  $data['row'] = $this->Transaksi_m->get_transaksi()->result();
  $this->template->load('Template', 'Transaksi/transaksi_data',$data);
}


public function transaksi_add()
{
  $pasien =$this->Pasien_m->get()->result();
  $user =$this->User_m->get()->result();
  $data = ['pasien' => $pasien, 'user' => $user,];


  $this->template->load('Template','Transaksi/transaksi_form',$data);
      
}



public function proses()
   {
         if (isset($_POST['add_trans'])) {
               $post = $this->input->post(null, TRUE);
               $this->Transaksi_m->add($post);
               if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('pesan','data transaksi berhasil di simpan');
                        redirect('Transaksi/transaksi_data');
               }
         }
   }



   
	public function delete($id)
	{
		     	$this->Transaksi_m->delete($id);
			if ( $this->db->affected_rows() > 0 ) {
			      $this->session->set_flashdata('pesan','data berhasil di hapus!');
		   }
       redirect('Transaksi/transaksi_data');
	}



}








?>