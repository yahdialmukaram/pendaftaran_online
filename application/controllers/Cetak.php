<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }
    
    public function index()
    {
        $this->load->view('admin/dpt');        
    }

    public function print_data_siswa()
    {
        $data['title'] = 'Print data siswa';
        
        $data ['siswa'] = $this->model->get_siswa(); //manggil data di controller 
        $mpdf = new Mpdf\Mpdf(['format'=>'Legal']);
        $mpdf->AddPage('L');
        $cetak= $this->load->view('admin/v_print_data_siswa',$data, true);
        $mpdf->WriteHtml($cetak);
        $mpdf->Output();
    }

}

?>