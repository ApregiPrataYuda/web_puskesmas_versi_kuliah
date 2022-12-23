<?php


 Class Fungsi
{
    protected $ci;

    function __construct()
    {
        $this->ci =&  get_instance();
    }

    function user_login() 
    {
           $this->ci->load->model('User_m');
           $user_id = $this->ci->session->userdata('user_id');
           $user_data = $this->ci->User_m->get($user_id)->row();
           return $user_data;

    }


     public function count_pasien()
    {
     $this->ci->load->model('Pasien_m');
       return $this->ci->Pasien_m->get()->num_rows();
    }

     public function count_ruangan()
    {
     $this->ci->load->model('Ruangan_m');
       return $this->ci->Ruangan_m->get()->num_rows();
    }

      public function count_user()
    {
     $this->ci->load->model('User_m');
       return $this->ci->User_m->get()->num_rows();
    }


    
    public function Pdf_generator($html, $filename, $paper , $orentation)
    {
     // instantiate and use the dompdf class
       $dompdf = new  Dompdf\Dompdf();
       $dompdf->loadHtml($html);

       // (Optional) Setup the paper size and orientation
        $dompdf->setPaper($paper, $orentation);

       // Render the HTML as PDF
        $dompdf->render();

       // Output the generated PDF to Browser
          $dompdf->stream($filename, array('attachment' => 0));
    
    }
}