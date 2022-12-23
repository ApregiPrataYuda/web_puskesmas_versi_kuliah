<?php 
class Obat extends CI_Controller
{
   function __construct()
   {
     parent::__construct();
     check_not_login();
     $this->load->model('Obat_m');
   }
  public function index()
  {
       $data['row'] = $this->Obat_m->get();
       $this->template->load('template','Obat/Obat_data',$data);
  }

  public function add()
  {
     $Obat = new stdClass();
     $Obat->obat_id = null;
     $Obat->nama_obat  = null;
     $Obat->kode_obat  = null;
     $Obat->harga = null;
     $Obat->experied = null;
     $data = array(
                    'page' => 'add',
                     'row' =>  $Obat,
                  );
    $this->template->load('template','Obat/Obat_form',$data);
  }


  public function proses()
       {
              $post = $this->input->post(null, TRUE);
              if (isset($_POST['add'])) {
                    $this->Obat_m->add($post);
              }elseif (isset($_POST['edit'])) 
              {
                 $this->Obat_m->edit($post);
              }if ($this->db->affected_rows() > 0 ) {
                    $this->session->set_flashdata('pesan','data berhasil di simpan!');                             
                  }
                  redirect('Obat');
              }




              public function edit($id)
              {
                $query =  $this->Obat_m->get($id);
                  if ($query->num_rows() > 0) {
                           $Obat = $query->row();
                           $data = array(
                            'page' => 'edit',
                             'row' =>  $Obat,
                          );
                     $this->template->load('template','Obat/Obat_form',$data);
                  }
              }




              public function delete($id)
              {
                 $this->Obat_m->delete($id);
                 if ($this->db->affected_rows() > 0) {
                  $this->session->set_flashdata('pesan','data berhasil di hapus!');  
                 }
                 redirect('obat');
              }




      public function exportexcel()
     {
        $data['title'] = 'exportexcel';
         $data['row'] = $this->Obat_m->get();
         $this->load->view('obat/exportexcel',$data);
     }



      public function exportpdf()
       {

           $data['row'] = $this->Obat_m->gets();
           $html = $this->load->view('obat/exportpdf', $data, true);
           $this->fungsi->Pdf_generator($html,'data-obat','A4','potrait');
       }

        

}















?>