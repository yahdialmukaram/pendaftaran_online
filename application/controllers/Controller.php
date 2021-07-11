<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model','model');
        date_default_timezone_set('Asia/Jakarta');
        //ini pnting untuk ke amanan login
        if ($this->session->userdata('level') !== 'admin' or 
            $this->session->userdata('logged_in') !== true
            ) {
        $this->session->set_flashdata('error', 'Anda tidak punya akses untuk menu admin');
        redirect('c_login');
        }
    }
    

    public function index()
    {
        $data['title']= 'beranda';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }
    public function v_data_user()
    {
        $data['title']= 'halaman user';
        $data ['user'] = $this->model->get_user();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/v_data_user', $data);
        $this->load->view('admin/footer');    
    }       
    public function v_data_siswa()
    {
        $data['title']= 'halaman siswa';
        // $data ['no_registrasi'] = $this->model->no_registrasi();
        $data ['siswa'] = $this->model->get_siswa();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/v_data_siswa', $data);
        $this->load->view('admin/footer');    
    }       
    public function v_details_siswa($id)
    {
        $data['title']= 'halaman details siswa';
        $data ['details'] = $this->model->details_siswa($id);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/v_details_siswa', $data);
        $this->load->view('admin/footer');    
    }       
    public function v_jadwal()
    {
        $data['title']= 'halaman jadwal';
        $data['jadwal']= $this->model->get_jadwal();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/v_jadwal', $data);
        $this->load->view('admin/footer');        
    }

    public function save_jadwal()
    {
        $jadwal_awal = $this->input->post('jadwal_awal');
        $jadwal_akhir = $this->input->post('jadwal_akhir');
        $data = [
                'jadwal'=> $jadwal_awal.' sampai '.$jadwal_akhir,
                'kouta'=>$this->input->post('kouta'),
                'kouta_terisi'=>0,
        ];
        $this->model->save_jadwal('table_jadwal', $data);
        $this->session->set_flashdata('success', 'jadwal di tambahkan');
        
        redirect('controller/v_jadwal');
        // echo json_encode($data);
        
        
    }

    public function add_admin()
    {
        $data = [
            'username'=> $this->input->post('username'),
            'password'=> md5($this->input->post('password')),
            'email'=> $this->input->post('email'),
            'waktu' => date('d-m-Y, H:i:s'),
            'level'=> $this->input->post('level'),  
        ];
        $this->model->add_admin($data);
        $this->session->set_flashdata('success', 'admin sistem berhasil di tambah');
        
        redirect('controller/v_data_user');

    }

    public function delete_admin()
    {
        $id = $this->input->post('id');
        $this->model->delete_admin($id);
        $this->model->delete_user($id);
        $this->session->set_flashdata('error', 'data user telah di hapus');
        
        redirect('controller/v_data_user');
    }
    public function v_data_nilai(Type $var = null)
    {
        $data['title']= 'halaman nilai';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/v_data_nilai');
        $this->load->view('admin/footer');      
    }
    public function v_data_nilai_siswa(Type $var = null)
    {
        $data['title']= 'halaman nilai';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/v_data_nilai_siswa');
        $this->load->view('admin/footer');      
    }
    
}


?>