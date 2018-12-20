<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan extends CI_Controller {	

	public function __construct(){
		parent::__construct();		
		$this->load->model('Userlog'); 
		$this->load->model('KaryawanModel');
		$this->load->model('PemesananModel');
		$this->load->model('PengeluaranModel');
		$this->load->library('form_validation');

	}
	public function index()
     {
          $this->load->view('Keuangan/welcome_page_keuangan', array());
     }
	public function welcome_page_keuangan()
	{
		if ($this->session->userdata('status')!="login"){
			redirect('Auth');
		} else {
            $data = array(			
				'nama'=> $this->session->userdata('nama'),
				);
			$this->load->view('Keuangan/welcome_page_keuangan', $data);
		}	
	}
	 
	public function kelolaPengeluaran(){
		if ($this->session->userdata('status')!="login"){
			redirect('Auth');
		} 
		else {
			$daftarPengeluaran = $this->PengeluaranModel->getDataPengeluaran();
			$data = array(			
				'pengeluaran' => $daftarPengeluaran,
				'nama'=> $this->session->userdata('nama'),
				);
			$this->load->view('Keuangan/Pengeluaran', $data,array());
		}
	}
	public function editPengeluaran()
	{
		$data = $this->input->post(null,TRUE);
        $edit = $this->PengeluaranModel->updatePengeluaran($data);
        if($edit){
            $this->session->set_flashdata('alert', 'Edit data berhasil');
            redirect('Keuangan/kelolaPengeluaran');
        }else{
			$this->session->set_flashdata('alert', 'Edit data gagal');
            redirect('Keuangan/kelolaPengeluaran');
        }
	}
	public function deletePengeluaran()
	{
		$idPengeluaran = $this->input->post('idPengeluaran');
        $hapus = $this->PengeluaranModel->deletePengeluaran($idPengeluaran);
        if($hapus){
            $this->session->set_flashdata('alert', 'Delete data berhasil');
            redirect('Keuangan/kelolaPengeluaran');
		}else{
			$this->session->set_flashdata('alert', 'Delete data gagal');
            redirect('Keuangan/kelolaPengeluaran');
		}
	}
	public function insertPengeluaran(){
		$data = $this->input->post(null,TRUE);
        
        //Pass user data to model
        $insert = $this->PengeluaranModel->insertPengeluaran($data);
        if($insert){
            $this->session->set_flashdata('alert', 'Input data berhasil');
            redirect('Keuangan/kelolaPengeluaran');
		}else{
			$this->session->set_flashdata('alert', 'Input data gagal');
			redirect('Keuangan/kelolaPengeluaran');
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
			$this->load->view('Keuangan/Pemesanan', $data,array());
		}
	}

	public function editPemesanan()
	{
		$this->form_validation->set_rules('CP', 'CP', 'required|numeric');
		if($this->form_validation->run() == true) {
			$data = $this->input->post(null,TRUE);
			$edit = $this->PemesananModel->updatePemesanan($data);
            $this->session->set_flashdata('alert', 'Edit data berhasil');
            redirect('Keuangan/ViewPemesanan');
        }else{
			$this->session->set_flashdata('alert', 'Edit data gagal');
            redirect('Keuangan/ViewPemesanan');
        }
	}

	public function ViewKaryawan(){
		if ($this->session->userdata('status')!="login"){
			redirect('Auth');
		} 
		else {
			$daftarKaryawan = $this->KaryawanModel->getDataKaryawan();
			$data = array(			
				'karyawan' => $daftarKaryawan,
				'nama'=> $this->session->userdata('nama'),
				);
			$this->load->view('Keuangan/viewKaryawan', $data,array());
		}
	}
}
