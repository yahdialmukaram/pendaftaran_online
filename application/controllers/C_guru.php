<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_guru extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_guru','model_guru');    
        $this->load->model('Model','model');
        
    }
    
    public function index()
    {
        $username=$this->session->userdata('username');
        $data['title']='Halam guru';
        $data['jenis_guru']=$this->model_guru->find_data('table_user','username',$username)->row_array()['verifikator'];
        $data['pendaftaran']= $this->model->get_nilai();
        $this->load->view('guru/header', $data);
        $this->load->view('guru/dashboard', $data);
        $this->load->view('guru/footer');
        // echo json_encode($data);
    }
    public function save_nilai(Type $var = null)
    {
        $jenis=$this->input->post('jenis');
        $id_user=$this->input->post('id_user');
        $nilai=$this->input->post('nilai');
        $insert=[
            $jenis=>$nilai
        ];
        $this->model_guru->update_data('table_nilai','id_user',$id_user,$insert);
        $this->updateScore($id_user);
        $this->buat_ranking();
        $this->session->set_flashdata('success', 'data berhasil di update');
        redirect('c_guru');
        // echo json_encode($insert);
    }
    public function updateScore($id_user)
    {
        $checkNilai=$this->model_guru->find_data('table_nilai','id_user',$id_user)->row_array();
        if ($checkNilai!==null) {
            if ($checkNilai['qiroah']!==null||$checkNilai['wawancara_ortu']!==null||$checkNilai['paquyuban']!==null) {
                $nilaiAkhir=($checkNilai['qiroah']+$checkNilai['wawancara_ortu']+$checkNilai['paquyuban'])/3;
                $this->model_guru->update_data('table_nilai','id_user',$id_user,['nilai_akhir'=>$nilaiAkhir]);
            }
        }
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
    }


}

/* End of file Controllername.php */


?>