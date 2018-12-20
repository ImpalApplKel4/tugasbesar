<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {	

	public function __construct(){
		parent::__construct();		
		$this->load->model('Userlog'); 
		$this->load->model('ProdukModel');
		$this->load->model('PemesananModel');
		$this->load->library('form_validation');

	}
	public function index()
     {
          $this->load->view('Service/welcome_page_service', array());
     }
	public function welcome_page_service()
	{
		if ($this->session->userdata('status')!="login"){
			redirect('Auth');
		} else {
            $data = array(			
				'nama'=> $this->session->userdata('nama'),
				);
			$this->load->view('Service/welcome_page_service', $data);
		}	
	}
	 
	public function kelolaPemesanan(){
		if ($this->session->userdata('status')!="login"){
			redirect('Auth');
		} 
		else {
			$daftarPemesanan = $this->PemesananModel->getDataPemesanan();
			$data = array(			
				'pemesan' => $daftarPemesanan,
				'nama'=> $this->session->userdata('nama'),
				);
			$this->load->view('Service/Pemesanan', $data,array());
		}
	}
	public function editPemesanan()
	{
		$this->form_validation->set_rules('CP', 'CP', 'required|numeric');
		if($this->form_validation->run() == true) {
			$data = $this->input->post(null,TRUE);
			$edit = $this->PemesananModel->updatePemesanan($data);
            $this->session->set_flashdata('alert', 'Edit data berhasil');
            redirect('Service/kelolaPemesanan');
        }else{
			$this->session->set_flashdata('alert', 'Edit data gagal');
            redirect('Service/kelolaPemesanan');
        }
	}
	public function deletePemesanan()
	{
		$idPemesanan = $this->input->post('idPemesanan');
        $hapus = $this->PemesananModel->deletePemesanan($idPemesanan);
        if($hapus){
            $this->session->set_flashdata('alert', 'Hapus data berhasil');
            redirect('Service/kelolaPemesanan');
		}else{
			$this->session->set_flashdata('alert', 'Hapus data gagal');
            redirect('Service/kelolaPemesanan');
		}
	}
	public function insertPemesanan(){
		$this->form_validation->set_rules('CP', 'CP', 'required|numeric');
		if($this->form_validation->run() == true) {
			$data = $this->input->post(null,TRUE);
			
			//Pass user data to model
			$insert = $this->PemesananModel->insertPemesanan($data);
            $this->session->set_flashdata('alert', 'Input data berhasil');
            redirect('Service/kelolaPemesanan');
		}else{
			$this->session->set_flashdata('alert', 'Input data gagal');
            redirect('Service/kelolaPemesanan');		} 
	}

	public function ViewProduk(){
		if ($this->session->userdata('status')!="login"){
			redirect('Auth');
		} 
		else {
			$daftarproduk = $this->ProdukModel->getDataProduk();
			$data = array(			
				'produk' => $daftarproduk,
				'nama'=> $this->session->userdata('nama'),
				);
			$this->load->view('Service/viewproduk', $data,array());
		}
	}
}
