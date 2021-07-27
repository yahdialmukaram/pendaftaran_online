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
        $data ['data_user'] = $this->model->find_data_user();
        $data ['data_siswa'] = $this->model->find_data_siswa();
        $data ['laki_laki'] = $this->model->find_data('table_siswa','jenis_kelamin','laki laki');
        $data ['perempuan'] = $this->model->find_data('table_siswa','jenis_kelamin','perempuan');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }
    public function diagram(Type $var = null)
	{
        
        $data ['data_user'] = $this->model->find_data_user();
        $data ['data_siswa'] = $this->model->find_data_siswa();
	    $data['laki_laki'] = $this->model->find_data('table_siswa','jenis_kalamin','laki Laki');
        $data['perempuan'] = $this->model->find_data('table_siswa','jenis_kelamin','perempuan');
		$response=[$data['data_user'],$data['data_siswa'],$data['laki_laki'], $data['perempuan']];
		echo json_encode($response);
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
        $this->model->delete_nilai($id);
        $this->model->delete_pendaftaran($id);
        $this->model->delete_peringkat($id);
        $this->session->set_flashdata('error', 'data user telah di hapus');
        
        redirect('controller/v_data_user');
    }

    public function v_data_nilai_siswa(Type $var = null)
    {
        $data['title']= 'halaman nilai';
        $data['nilai']= $this->model->get_nilai();
        $data['limit_lulus']=3;
        $this->load->view('admin/header', $data);
        $this->load->view('admin/v_data_nilai_siswa', $data);
        $this->load->view('admin/footer');     
        // echo json_encode($data); 
    }
   
    public function v_data_pendaftaran(Type $var = null)
    {
        $data['title']= 'data pendaftaran';
        $data['pendaftaran']= $this->model->get_pendaftaran_siswa();
       
        $this->load->view('admin/header', $data);
        $this->load->view('admin/v_data_pendaftaran', $data);
        $this->load->view('admin/footer');      
    }
    public function save_nilai(Type $var = null)
    {   
        $id_user = $this->input->post('id');
        $check_id_user = $this->model->check_id_user($id_user);
        if ($check_id_user > 0) {
            $this->session->set_flashdata('error', 'Data Nilai Siswa Sudah di Input');
            redirect('controller/v_data_pendaftaran');
        }


        $data = [
            'id_user'=>  $this->input->post('id'),
            'qiroah'=>$this->input->post('qiroah'),
            'wawancara_ortu'=>$this->input->post('wawancara_ortu'),
            'paquyuban'=>$this->input->post('paquyuban'),
            'nilai_akhir'=>$this->input->post('nilai_akhir'),
            'status_sms'=>0,

        ];
        
        $this->model->save_nilai('table_nilai', $data);
        $this->buat_ranking();
        // echo json_encode($data);
        $this->session->set_flashdata('success', 'data nilai success di input');
        
        redirect('controller/v_data_pendaftaran');
        
    }
    public function buat_ranking(Type $var = null)
    {
        $checkRanking=$this->model->getNIlai();
        if ($checkRanking!==null) {
            $no=1;
            foreach ($checkRanking as $key => $value) {
                $result[]=[
                    'id_user'=>$value['id_user'],
                    'peringkat'=>$no++,
                    // 'score'=>$value['nilai_akhir']
                ];
            }
            $this->model->updateScore($result);
        }
        echo json_encode($result);
    }

    public function v_saran()
    {
        $data['title'] = 'data kritik $ saran';
        $data['saran'] =$this->model->get_saran();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/v_saran');
        $this->load->view('admin/footer');
        
    }
    public function delete_saran(Type $var = null)
    {
        $id = $this->input->post('id');
        $this->model->delete_saran($id);
        $this->session->set_flashdata('error', 'Data Saran Success Di Delete');
        
        redirect('controller/v_saran');
        
        
    }
    public function update_status($jenis)
	{
		$id=$this->input->post('id');
		
		if ($jenis=='verifikasi') {
			$this->model->update_status($id,['status_sms'=>1]);
			$this->session->set_flashdata('success', ' Verifikasi SMS Berhasil Terkirim');
		} 
        // elseif ($jenis=='cancel') {
		// 	$this->model->update_status($id,['status_sms'=>0]);
		// 	$this->session->set_flashdata('error', 'Verifikasi berhasil di batalkan');
		// }
		redirect('controller/v_data_nilai_siswa');
	}
    
    
}


?>