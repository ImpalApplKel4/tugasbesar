<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Userlog');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('Login/login_page');
	}
	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password,		
			);
		$cek = $this->Userlog->cek_login("user",$where)->num_rows();
		$dataUser = $this->Userlog->getDataUser($where);
		if($cek > 0){
			if($dataUser['level'] =='Pemilik'){
			$data_session = array(
					'username' => $username,
					'nama' => $dataUser['nama'],
					'level' => $dataUser['level'],
					'status' => "login"
				);
			$this->session->set_userdata($data_session); 			
			redirect("Pemilik/welcome_page_pemilik");

 			}else if ($dataUser['level'] =='Staff Gudang'){
 				$data_session = array(
					'username' => $username,
					'nama' => $dataUser['nama'],
					'level' => $dataUser['level'],
					'status' => "login"
				); 
			$this->session->set_userdata($data_session); 			
			redirect("StaffGudang/welcome_page_staffgudang");

 			}else if ($dataUser['level'] =='Service'){
				$data_session = array(
					'username' => $username,
					'nama' => $dataUser['nama'],
					'level' => $dataUser['level'],
					'status' => "login"
			   ); 
		   $this->session->set_userdata($data_session); 			
		   redirect("Service/welcome_page_service");

			}else if($dataUser['level'] =='Keuangan'){
				$data_session = array(
				'username' => $username,
				'nama' => $dataUser['nama'],
				'level' => $dataUser['level'],
				'status' => "login"
			   ); 
		   $this->session->set_userdata($data_session); 			
		   redirect("Keuangan/welcome_page_keuangan");
			}
		}else{
			$this->session->set_flashdata( 'message', 'Username atau password yang anda masukan tidak tepat' );
			redirect('Auth');
		}
	}
    public function logout(){
        //isi dengan sess_destroy
        $this->session->sess_destroy();
        redirect(site_url('Auth'));
    }
}