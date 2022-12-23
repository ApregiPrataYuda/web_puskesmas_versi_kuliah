<?php
class Stock extends CI_Controller

{
      function __construct()
      {
        parent::__construct();
        check_not_login();
        $this->load->model(['Obat_m','Stock_m',]);
      }
     


   public function stock_in_data()
   {
      $data['row'] = $this->Stock_m->get_stock_in()->result();
      $this->template->load('Template', 'Stock/Stock_in/Stock_in_data',$data);
   }


   public function stock_in_add()
   {
           $obat =$this->Obat_m->get()->result();
           $data = ['obat' => $obat];
	     $this->template->load('Template','stock/stock_in/stock_in_form',$data);
          
   }




      
   public function stock_in_delete()
   {
       $stock_id = $this->uri->segment(4);
          $obat_id = $this->uri->segment(5);
            $qty =  $this->Stock_m->get($stock_id)->row()->qty;
              $data = ['qty' => $qty,  'obat_id' => $obat_id ];
                   $this->Obat_m->update_stock_out($data);
                   $this->Stock_m->delete($stock_id);
                     if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('pesan','data stock-in berhasil di hapus');
                        redirect('Stock/in');
               }
   }




   public function proses()
   {
         if (isset($_POST['in_add'])) {
               $post = $this->input->post(null, TRUE);
               $this->Stock_m->add_stock_in($post);
                 $this->Obat_m->update_stock_in($post);
                   
               if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('pesan','data stock-in berhasil di simpan');
                        redirect('Stock/in');
               }
         }
   }


   public function exportexcel()
   {
      $data['title'] = 'exportExcel';
       $data['row'] = $this->Stock_m->gets();
       $this->load->view('Stock/stock_in/exportexcel',$data);
   }


   
   public function exportpdf()
   {
       $data['row'] = $this->Stock_m->gets();
       $html = $this->load->view('Stock/stock_in/exportPdf', $data, true);
       $this->fungsi->Pdf_generator($html,'data-inventory','A4','potrait');
   }









// batas in/out
   
   public function stock_out_data()
   {
              $data['row'] = $this->Stock_m->get_stock_out()->result();
              $this->template->load('Template','stock/stock_out/stock_out_data',$data);
   }


   public function stock_out_add()
   {
           $obat =$this->Obat_m->get()->result();
           $data = ['obat' => $obat];
           $this->template->load('Template','stock/stock_out/stock_out_form',$data);
         
   }



   
   public function prosess()
   {
         if (isset($_POST['out_add'])) {
               $post = $this->input->post(null, TRUE);
               $this->Stock_m->add_stock_out($post);
               $this->Obat_m->update_stock_out($post);
               if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('pesan','data stock-out berhasil di simpan');
                        redirect('Stock/out');
               }
         }
   }




        
   public function stock_out_delete()
   {
       $stock_id = $this->uri->segment(4);
          $obat_id = $this->uri->segment(5);
            $qty =  $this->Stock_m->get($stock_id)->row()->qty;
              $data = ['qty' => $qty,  'obat_id' => $obat_id ];
                   $this->Obat_m->updated_stock_out($data);
                   $this->Stock_m->delete($stock_id);
                     if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('pesan','data stock-out berhasil di hapus');
                        redirect('Stock/out');
               }
   }


   public function xportExcel()
   {
      $data['title'] = 'exportExcel';
       $data['row'] = $this->Stock_m->getz();
       $this->load->view('Stock/stock_out/xportExcel',$data);
   }



}


?>