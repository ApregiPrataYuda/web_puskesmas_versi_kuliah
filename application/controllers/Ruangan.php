<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller {

  function __construct(){
      parent::__construct();
			check_not_login();
       $this->load->model('Ruangan_m');
  }

	public function index()
	{
    $data['row'] = $this->Ruangan_m->get();
		$this->template->load('template','Ruangan/Ruangan_data',$data);
	}


  
  public function add()
  {
      $Ruangan = new stdClass(); 
        $Ruangan->ruangan_id = null;
        $Ruangan->kode_ruangan = null;
        $Ruangan->nama_ruangan = null;
        $Ruangan->biaya_ruangan = null;
         $data = array(
                'page' => 'add',
                'row'  =>  $Ruangan
            );
             $this->template->load('Template','Ruangan/Ruangan_form',$data);
  }

  public function proses()
	{
		$post =  $this->input->post(null,  TRUE);
		   if (isset($_POST['add'])) {
			     $this->Ruangan_m->add($post);
		   }else if (isset($_POST['edit'])) {
			      $this->Ruangan_m->edit($post);
		   }if ( $this->db->affected_rows() > 0 ) {
			      $this->session->set_flashdata('pesan','data berhasil di simpan!');
		   }
		    redirect('Ruangan');
	}



	public function delete($id)
	{
		     	$this->Ruangan_m->delete($id);
			if ( $this->db->affected_rows() > 0 ) {
			      $this->session->set_flashdata('pesan','data berhasil di hapus!');
		   }
		    redirect('Ruangan');
	}



  public function edit($id)
	{
		$query = $this->Ruangan_m->get($id);
		if ($query->num_rows() > 0) {
			 $Ruangan = $query->row();
			   $data = array(
							   'page' => 'edit',
							   'row'  =>  $Ruangan
						 );
						 $this->template->load('Template','Ruangan/Ruangan_form',$data);
	   }
	}


	public function exportexcel()
	{
		 $data['title'] = 'exportexcel';
			$data['row'] = $this->Ruangan_m->get();
			$this->load->view('ruangan/exportexcel',$data);
	}



	 public function exportpdf()
		{

				$data['row'] = $this->Ruangan_m->gets();
				$html = $this->load->view('ruangan/exportpdf', $data, true);
				$this->fungsi->Pdf_generator($html,'data-ruangan','A4','potrait');
		}




		}

			  
   
  


