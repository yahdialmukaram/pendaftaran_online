<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_siswa extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->library('upload');
        $this->load->Model('Model_siswa','model_siswa');
        $this->load->Model('Model','model');
        date_default_timezone_set('Asia/Jakarta'); 
        
    }

    public function index()
    {
        $data['title']= 'isi data diri';
        $data ['no_registrasi'] = $this->model_siswa->no_registrasi();
        $check = $this->model_siswa->check_data_diri();
        if ($check > 0) {
            redirect('c_siswa/dashboard');
        }else {
            $this->load->view('siswa/v_isi_data_diri', $data);   
        }
    }
      
    public function save_data_diri()
    {
        $data['title'] = 'halaman isi data diri calon siswa';
        
        $nik = $this->input->post('nik');
        $check_nik = $this->model_siswa->check_nik($nik);
        if ($check_nik > 0) {
            $this->session->set_flashdata('error', 'Nik anda sudah terdaftar di sistem');
            
            redirect('c_siswa');
            
        }
        $insert = [
            'id_user' => $this->session->userdata('id_user'),
            'no_registrasi' => $this->input->post('no_registrasi'),
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'anak_ke' => $this->input->post('anak_ke'),
            'jumlah_keluarga' => $this->input->post('jumlah_keluarga'),
            'bahasa_dirumah' => $this->input->post('bahasa_dirumah'),
            'jarak_tempuh' => $this->input->post('jarak_tempuh'),
            'golongan_darah' => $this->input->post('golongan_darah'),
            'keadaan_fisik' => $this->input->post('keadaan_fisik'),
            'penyakit' => $this->input->post('penyakit'),
            'penyakit_diderita' => $this->input->post('penyakit_diderita'),
            'bakat' => $this->input->post('bakat'),
            'hafalan' => $this->input->post('hafalan'),
            'kewarganegaraan' => $this->input->post('kewarganegaraan'),
            'kemampuan_baca' => $this->input->post('kemampuan_baca'),
            'nama_ayah' => $this->input->post('nama_ayah'),
            'no_hp_ortu' => $this->input->post('no_hp_ortu'),
            'agama' => $this->input->post('agama'),
            'status_perkawinan' => $this->input->post('status_perkawinan'),
            'alamat_orang_tua' => $this->input->post('alamat_orang_tua'),
            'status_rumah' => $this->input->post('status_rumah'),
            'pendidikan_ayah' => $this->input->post('pendidikan_ayah'),
            'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
            'penghasilan_ayah' => $this->input->post('penghasilan_ayah'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
            'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
            'penghasilan_ibu' => $this->input->post('penghasilan_ibu'),
            
        ];
        $this->model_siswa->save_siswa('table_siswa', $insert);
        $this->session->set_flashdata('success', 'data anda success di save');
        
        redirect('c_siswa/dashboard');
            // echo json_encode($insert);

    }
    public function dashboard()
    {
        $data['title'] = 'pendaftaran';
		$data['status_daftar']=$this->model_siswa->find_data('table_sekolah','id_user',$this->session->userdata('id_user'))->row_array()['id_user'];
        // $id = $this->input->post('id_user');	
		
		// use for register date
		
		$t      =time();
		$day    =20;   
		$month  =7;
		$year   =2021;
		$days   =(int)((mktime (0,0,0,$month,$day,$year) - time())/86400);
		// echo "Pendaftaran tutup <b>$days</b> hari lagi, sampai tanggal $day/$month/$year";
        // echo json_encode($days);
		$data['date_close']=[
                            'day'=>$day,
                            'month'=>$month,
                            'year'=>$year,
                            ];
		if ($days > 0) {
			$data['state_register']=true;
			$data['time_remaining']=$days;            
        }elseif ($days == 0) {
			$data['state_register']=true;
			$data['time_remaining']=$days;           
        } else {
			$data['state_register']=false;
		}
        $this->load->view('siswa/header',$data);
        $this->load->view('siswa/dashboard', $data);
        $this->load->view('siswa/footer');   
    }
    
    public function v_sdit1()
    {
        $data['title'] ='SDIT Qurrata Ayun Batusangkar';
        $data['profil_siswa'] = $this->model_siswa->get_profil_siswa();
        $this->load->view('siswa/header',$data);
        $this->load->view('siswa/v_sdit1');
        $this->load->view('siswa/footer');    
    }
    public function v_sdit2()
    {
        $data['title'] ="SDIT Qurrata A'yun 2 Lintau";
        $data['profil_siswa'] = $this->model_siswa->get_profil_siswa();
        $this->load->view('siswa/header',$data);
        $this->load->view('siswa/v_sdit2');
        $this->load->view('siswa/footer');    
    }
    public function v_sdit3()
    {
        $data['title'] ='SDIT Qurrata Ayun 3 Batusangkar';
        $data['profil_siswa'] = $this->model_siswa->get_profil_siswa();
        $this->load->view('siswa/header',$data);
        $this->load->view('siswa/v_sdit3');
        $this->load->view('siswa/footer');    
    }
   // tambah kan fungsi upload  untuk semua
   public function upload($name)
   {
       $config['upload_path'] = './uploads/original_image/'; //path folder
       $config['allowed_types'] = 'pdf'; //type pdf 
       $config['encrypt_name'] = true; //nama yang terupload nantinya
       

       $this->upload->initialize($config);
       if (!empty($_FILES[$name]['name'])) {
           if ($this->upload->do_upload($name)) {
               $gbr = $this->upload->data();
              
               $response['data'] = $gbr['file_name'];
               $response['status'] = 'success';
               return $response;
           } else {
               $response['status'] = 'error';
               return $response;
               // redirect('c_admin/V_berita');
           }

       } else {
           return $response['status'] = 'image not found';
       }
      }

    public function save_pendaftaran()
    {
        $id_user =    $this->session->userdata('id_user');
        $check_id_user=$this->model->check_user($id_user);
        if ($check_id_user>0) {
        $this->session->set_flashdata('error', 'Anda Hanya Bisa Mendaftar 1 Sekolah Yang Anda Minati Terimakasih !!');

        redirect('c_siswa/dashboard');    
    }

        $image  = $this->upload('akta_kelahiran');
        $image1  = $this->upload('sk_domisili');
        if ($image ['status']=='success' and $image1['status']=='success') {
        $data =[
            'id_user' => $this->session->userdata('id_user'),
            'nama_sekolah'=>$this->input->post('nama_sekolah'),
            'akta_kelahiran'=>$image['data'],
            'sk_domisili'=>$image1['data'],
        ];
        // logik ambil jadwal
        $check_kuata=$this->model->check_kuata();
        if ($check_kuata!==null) {
            foreach ($check_kuata as $key => $value) {
                if ($value['kouta']>$value['kouta_terisi']) {
                    $result[]=[
                        'id_jadwal'=>$value['id_jadwal'],
                        'jadwal'=>$value['jadwal']
                    ];
                }
            }
        }
        $data =[
            'id_user' => $this->session->userdata('id_user'),
            'nama_sekolah'=>$this->input->post('nama_sekolah'),
            'akta_kelahiran'=>$image['data'],
            'sk_domisili'=>$image1['data'],
            'id_jadwal'=>$result[0]['id_jadwal'],
        ];
        
        $check_number = $this->model->check_number($id_user);
        $list_jadwal=$this->model->ambil_jadwal($result[0]['id_jadwal']);
        $this->model->update_jadwal($result[0]['id_jadwal'],['kouta_terisi'=>$list_jadwal['kouta_terisi']+1]);
        // echo json_encode($data);
        $this->model_siswa->save_pendaftaran('table_sekolah', $data);
        
        $message='Terimakasih Sudah Mendaftar, nomor Pendaftaran anda :'.$check_number['no_registrasi'].' berikut jadwal ujian anda :'.$result[0]['jadwal'];
        // $send_message=$this->sms($check_number['no_hp_ortu'],$message);
        $this->session->set_flashdata('success', 'Pendaftaran anda telah berhasil');
        // echo json_encode($message);
        
        redirect('c_siswa/dashboard');

        }else {
            $this->session->set_flashdata('error', 'type file upload anda salah');
            
            redirect('c_siswa/v_sdit1');
   
        }       
        
    }


    public function sms($nohp,$sms)
    {
        
        $userkey = '3b5371593b81';
        $passkey = '5bc86e097300c9279c10fb00';
        $telepon = $nohp;
        $message = $sms;
        $url = 'https://console.zenziva.net/reguler/api/sendsms/';
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
            'userkey' => $userkey,
            'passkey' => $passkey,
            'to' => $telepon,
            'message' => $message
        ));
        return $results = json_decode(curl_exec($curlHandle), true);
        curl_close($curlHandle);
    }

}

