<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * 
  */
 class Pembelian extends CI_Controller
 {
 	
 	public function __construct()
	{
		ini_set('date.timezone', 'Asia/Jakarta');
		parent::__construct();
		$this->load->library(['ion_auth']);
		$this->load->library('upload');
		$this->load->model('Pembelian_model');
	}

	public function index(){
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		} else {
			$data['title'] = "Pembelian";
			$this->load->view('template/meta',$data);
			$this->load->view('template/sidebar');
			$this->load->view('template/header');
			$dbase['tampil'] = $this->Pembelian_model->tampilHome();
			$this->load->view('pembelian',$dbase);
			$this->load->view('template/footer');
		}
	}
}
?>