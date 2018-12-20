<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilik extends CI_Controller {	

	public function __construct(){
		parent::__construct();		
		$this->load->model('Userlog'); 
		$this->load->model('KaryawanModel');
		$this->load->model('BahanModel');
		$this->load->model('ProdukModel');
		$this->load->model('PemesananModel');
		$this->load->model('PengeluaranModel');
		$this->load->library('form_validation');
	}
	public function index()
     {
          $this->load->view('Pemilik/welcome_page_pemilik', array());
     }
	public function welcome_page_pemilik()
	{
		if ($this->session->userdata('status')!="login"){
			redirect('Auth');
		} else {
            $data = array(			
				'nama'=> $this->session->userdata('nama'),
				);
			$this->load->view('Pemilik/welcome_page_pemilik', $data);
		}	
	}
	 
	public function kelolaKaryawan(){
		if ($this->session->userdata('status')!="login"){
			redirect('Auth');
		} 
		else {
			$daftarkaryawan = $this->KaryawanModel->getDataKaryawan();
			$data = array(			
				'karyawan' => $daftarkaryawan,
				'nama'=> $this->session->userdata('nama'),
				);
			$this->load->view('Pemilik/karyawan', $data,array());
		}
	}
	public function editKaryawan()
	{
		$this->form_validation->set_rules('noHP', 'noHP', 'required|numeric');
		if($this->form_validation->run() == true) {
			$data = $this->input->post(null,TRUE);
			$edit = $this->KaryawanModel->updateKaryawan($data);
            $this->session->set_flashdata('alert', 'Edit data berhasil');
            redirect('Pemilik/kelolaKaryawan');
        }else{
            $this->session->set_flashdata('alert', 'Edit data gagal');
            redirect('Pemilik/kelolaKaryawan');
        }
	}
	public function deleteKaryawan()
	{
		$NIK = $this->input->post('NIK');
        $hapus = $this->KaryawanModel->deleteKaryawan($NIK);
        if($hapus){
            $this->session->set_flashdata('alert', 'Hapus data berhasil');
            redirect('Pemilik/kelolaKaryawan');
		}else{
			$this->session->set_flashdata('alert', 'Hapus data gagal');
			redirect('Pemilik/kelolaKaryawan');		
		}
	}

	public function insertKaryawan(){
        $this->form_validation->set_rules('noHP', 'noHP', 'required|numeric');
		if($this->form_validation->run() == true) {
			$data = $this->input->post(null,TRUE);
        	$insert = $this->KaryawanModel->insertKaryawan($data);
            $this->session->set_flashdata('alert', 'Input data berhasil');
            redirect('Pemilik/kelolaKaryawan');
		}else{
			$this->session->set_flashdata('alert', 'Input data gagal');
			redirect('Pemilik/kelolaKaryawan');		
		} 
	}

	public function ViewBahan(){
		if ($this->session->userdata('status')!="login"){
			redirect('Auth');
		} 
		else {
			$daftarbahan = $this->BahanModel->getDataBahan();
			$data = array(			
				'bahan' => $daftarbahan,
				'nama'=> $this->session->userdata('nama'),
				);
			$this->load->view('Pemilik/viewbahan', $data,array());
		}
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
			$this->load->view('Pemilik/viewproduk', $data,array());
		}
	}

	public function ViewPemesanan(){
		if ($this->session->userdata('status')!="login"){
			redirect('Auth');
		} 
		else {
			$daftarPemesanan = $this->PemesananModel->getDataPemesanan();
			$data = array(			
				'pemesan' => $daftarPemesanan,
				'nama'=> $this->session->userdata('nama'),
				);
			$this->load->view('Pemilik/viewPemesanan', $data,array());
		}
	}

	public function ViewPengeluaran(){
		if ($this->session->userdata('status')!="login"){
			redirect('Auth');
		} 
		else {
			$daftarPengeluaran = $this->PengeluaranModel->getDataPengeluaran();
			$data = array(			
				'pengeluaran' => $daftarPengeluaran,
				'nama'=> $this->session->userdata('nama'),
				);
			$this->load->view('Pemilik/viewPengeluaran', $data,array());
		}
	}
}
