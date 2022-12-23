<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	 function __construct()
	 {
		  parent::__construct();
			check_not_login();
			$this->load->model(['Pasien_m','Ruangan_m','Pelayanan_m','Obat_m']);
	 }

	public function index()
	{
		$data['row'] = $this->Pasien_m->get();
		$data2['row'] = $this->Pasien_m->total_transaksi();
		$this->template->load('template','Pasien/Pasien_data', $data, $data2);
	}


		public function add()
		{
				 $Pasien = new stdclass();
				 $Pasien->pasien_id = null;
					$Pasien->kode_pasien = null;
					  $Pasien->nama_pasien = null;
						$Pasien->alamat = null;
				   	$Pasien->ruangan_id = null;
						 $Pasien->pelayanan_id = null;
						 $Pasien->obat_id = null;
						 $Ruangan = $this->Ruangan_m->get();
						 $Pelayanan = $this->Pelayanan_m->get();
						 $Obat = $this->Obat_m->get();


			   	   $data = array(
										   		'page' => 'add',
													'row' => $Pasien,
													'Ruangan' => $Ruangan,
													'Pelayanan' => $Pelayanan,
													'Obat'=> $Obat
			          		);
					$this->template->load('Template','pasien/pasien_form', $data);
		}
	


		public function edit($id)
		{   
				 $query = $this->Pasien_m->get($id);
					 if ($query->num_rows() > 0 ) {
								$Pasien = $query->row();
								$Ruangan = $this->Ruangan_m->get();
								$Pelayanan = $this->Pelayanan_m->get();
								$Obat = $this->Obat_m->get();

								 $data = array(
													 'page' => 'edit',
													 'row' =>  $Pasien,
													 'Ruangan' => $Ruangan,
													 'Pelayanan' => $Pelayanan,
													 'Obat'=> $Obat
												 );
												 $this->template->load('Template', 'Pasien/Pasien_form', $data );
					 }else {
									$this->session->set_flashdata('pesan','data tidak ada di database!');
										redirect('Pasien');
						 
					 }
		}

		public function proses()
		{
				$post = $this->input->post(null, TRUE);
				if (isset($_POST['add'])) {
								$this->Pasien_m->add($post);
				}elseif (isset($_POST['edit'])) {
							 $this->Pasien_m->edit($post);
				}if ($this->db->affected_rows() > 0 ) {
						 $this->session->set_flashdata('pesan','data berhasil disimpan');
				}
				redirect('Pasien');
				
		}

		public function delete($id)
		{
		       $this->Pasien_m->delete($id);
					 if ($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('pesan','data berhasil di hapus');
					 }
					 redirect('Pasien');
		}



		public function print_data($id)
		{
		 $data['row'] = $this->Pasien_m->get($id)->row();
			$html = $this->load->view('pasien/print_data', $data, true);
			$this->fungsi->Pdf_generator($html,'data-'.$data['row']->kode_pasien,'A6','potrait');
		 }


    
     public function exportexcel()
     {
        $data['title'] = 'exportexcel';
         $data['row'] = $this->Pasien_m->get();
         $this->load->view('Pasien/exportexcel',$data);
     }



      public function exportpdf()
       {

           $data['row'] = $this->Pasien_m->gets();
           $html = $this->load->view('pasien/exportpdf', $data, true);
           $this->fungsi->Pdf_generator($html,'data-Pasien','A4','potrait');
       }

        


	
}

	
	 

