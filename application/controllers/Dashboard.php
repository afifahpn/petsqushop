<?php
defined('BASEPATH', 'https://localhost/petsqushop/') or exit('No direct script access allowed');
/**
 * 
 */
class Dashboard extends CI_Controller
{

	public function __construct()
	{
		ini_set('date.timezone', 'Asia/Jakarta');
		parent::__construct();
		$this->load->library(['ion_auth']);
	}

	public function index()
	{
		if (!$this->ion_auth->logged_in()) {
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		} else {
			$data['title'] = "Dashboard";
			$this->load->view('template/meta', $data);
			$this->load->view('template/sidebar');
			$this->load->view('template/header');
			$this->load->view('dashboard');
			$this->load->view('template/footer');
		}
	}
}
