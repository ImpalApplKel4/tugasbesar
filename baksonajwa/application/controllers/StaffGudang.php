<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StaffGudang extends CI_Controller {	

	public function __construct(){
		parent::__construct();		
		$this->load->model('Userlog');
		$this->load->model('BahanModel');
		$this->load->model('ProdukModel');
		$this->load->model('PemesananModel');
	}
	public function index()
     {
          $this->load->view('Staff_Gudang/welcome_page_staffgudang', array());
     }
	public function welcome_page_staffgudang()
	{
		if ($this->session->userdata('status')!="login"){
			redirect('Auth');
		} else {
            $data = array(			
				'nama'=> $this->session->userdata('nama'),
				);
			$this->load->view('Staff_Gudang/welcome_page_staffgudang', $data);
		}	
	}
	 
	public function kelolaBahan(){
		if ($this->session->userdata('status')!="login"){
			redirect('Auth');
		} 
		else {
			$daftarbahan = $this->BahanModel->getDataBahan();
			$data = array(			
				'bahan' => $daftarbahan,
				'nama'=> $this->session->userdata('nama'),
				);
			$this->load->view('Staff_Gudang/bahan', $data,array());
		}
	}
	public function editBahan()
	{
		$data = $this->input->post(null,TRUE);
        $edit = $this->BahanModel->updateBahan($data);
        if($edit){
            $this->session->set_flashdata('alert', 'Edit data berhasil');
            redirect('StaffGudang/kelolaBahan');
        }else{
			$this->session->set_flashdata('alert', 'Edit data gagal');
            redirect('StaffGudang/kelolaBahan');        }
	}
	public function deleteBahan()
	{
		$idBahan = $this->input->post('idBahan');
        $hapus = $this->BahanModel->deleteBahan($idBahan);
        if($hapus){
            $this->session->set_flashdata('alert', 'Delete data berhasil');
            redirect('StaffGudang/kelolaBahan');
		}else{
			$this->session->set_flashdata('alert', 'Delete data gagal');
            redirect('StaffGudang/kelolaBahan');
		}
	}
	public function insertBahan(){
		$data = $this->input->post(null,TRUE);
        
        //Pass user data to model
        $insert = $this->BahanModel->insertBahan($data);
        if($insert){
            $this->session->set_flashdata('alert', 'Input data berhasil');
            redirect('StaffGudang/kelolaBahan');
		}else{
			$this->session->set_flashdata('alert', 'Input data gagal');
			redirect('StaffGudang/kelolaBahan');		
		} 
	}

	public function kelolaProduk(){
		if ($this->session->userdata('status')!="login"){
			redirect('Auth');
		} 
		else {
			$daftarProduk = $this->ProdukModel->getDataProduk();
			$data = array(			
				'produk' => $daftarProduk,
				'nama'=> $this->session->userdata('nama'),
				);
			$this->load->view('Staff_Gudang/Produk', $data,array());
		}
	}
	public function editProduk()
	{
		$data = $this->input->post(null,TRUE);
        $edit = $this->ProdukModel->updateProduk($data);
        if($edit){
			$this->session->set_flashdata('alert', 'Edit data berhasil');
            redirect('StaffGudang/kelolaProduk');
        }else{
			$this->session->set_flashdata('alert', 'Edit data gagal');
			redirect('StaffGudang/kelolaProduk');
        }
	}
	public function deleteProduk()
	{
		$idProduk = $this->input->post('idProduk');
        $hapus = $this->ProdukModel->deleteProduk($idProduk);
        if($hapus){
			$this->session->set_flashdata('alert', 'Delete data berhasil');
            redirect('StaffGudang/kelolaProduk');
		}else{
			$this->session->set_flashdata('alert', 'Delete data gagal');
            redirect('StaffGudang/kelolaProduk');		}
	}
	public function insertProduk(){
		$data = $this->input->post(null,TRUE);
        
        //Pass user data to model
        $insert = $this->ProdukModel->insertProduk($data);
        if($insert){
            $this->session->set_flashdata('alert', 'Input data berhasil');
            redirect('StaffGudang/kelolaProduk');
		}else{
			$this->session->set_flashdata('alert', 'Input data gagal');
            redirect('StaffGudang/kelolaProduk');		} 
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
			$this->load->view('Staff_Gudang/ViewPemesanan', $data,array());
		}
	}
}
