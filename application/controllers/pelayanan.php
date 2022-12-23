<?php
    class Pelayanan extends Ci_controller
    {
       function __construct()
       {
         parent::__construct();
         check_not_login();
         $this->load->model('Pelayanan_m');
       }
      public function index()
      {
           $data['row'] = $this->Pelayanan_m->get();
           $this->template->load('template','Pelayanan/Pelayanan_data', $data);
      }


      public function add()
      {
          $Pelayanan = new stdClass();
          $Pelayanan->pelayanan_id = null;
          $Pelayanan->penanganan = null;
          $Pelayanan->biaya = null;
          $data = array(
                      'page' => 'add',
                      'row' => $Pelayanan
                     );
                     $this->template->load('template','Pelayanan/Pelayanan_form', $data);
      }
    

    public function proses()
    {
      $post = $this->input->post(null, TRUE);
       if (isset($_POST['add'])) {
          $this->Pelayanan_m->add($post);
       }elseif (isset($_POST['edit'])) {
         $this->Pelayanan_m->edit($post);
       }if ($this->db->affected_rows() > 0) {
           $this->session->set_flashdata('pesan','data berhasil di simpan!');
        }
         redirect('Pelayanan');
       
    }
    

    
		public function edit($id)
		{   
				 $query = $this->Pelayanan_m->get($id);
					 if ($query->num_rows() > 0 ) {
								$Pelayanan = $query->row();
								 $data = array(
													 'page' => 'edit',
													 'row' =>  $Pelayanan,
												 );
												 $this->template->load('Template', 'Pelayanan/Pelayanan_form', $data );
					 }else {
									$this->session->set_flashdata('pesan','data tidak ada di database!');
										redirect('Pelayanan');
				    	 }
	        	}


            public function delete($id)
            {
                   $this->Pelayanan_m->delete($id);
                   if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('pesan','data berhasil di hapus');
                   }
                   redirect('Pelayanan');
            }
  }



?> 