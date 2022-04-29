<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

		$this->load->model('Produk_model');
	}

	public function index()
	{
		$data['title'] = "Home";

		$this->load->view('template/home/header', $data);
		$this->load->view('template/home/body', $data);
		$this->load->view('template/home/home', $data);
	}

	public function produk()
	{
		$data['title'] = "Produk";
		$dbase['anjing'] = $this->Produk_model->anjing();
		$dbase['kucing'] = $this->Produk_model->kucing();
		$dbase['ikan'] = $this->Produk_model->ikan();
		$dbase['burung'] = $this->Produk_model->burung();
		$this->load->view('template/home/header', $data);
		$this->load->view('template/home/body', $data);
		$this->load->view('template/home/produk', $dbase);
	}
}
