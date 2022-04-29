<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
	
	public function __construct()
	{
		ini_set('date.timezone', 'Asia/Jakarta');
		parent::__construct();
		$this->load->library(['ion_auth']);
		$this->load->model('Produk_model');
		$this->load->model('Pembelian_model');
	}

	public function index(){
		$data['title'] = "Home";
		$this->load->view('template/home/header',$data);
		$this->load->view('user/body',$data);
		$this->load->view('template/home/home',$data);
	}

	public function produk() {
		$data['title'] = "Produk";
		$dbase['anjing'] = $this->Produk_model->anjing();
		$dbase['kucing'] = $this->Produk_model->kucing();
		$dbase['ikan'] = $this->Produk_model->ikan();
		$dbase['burung'] = $this->Produk_model->burung();
		$this->load->view('template/home/header',$data);
		$this->load->view('user/body',$data);
		$this->load->view('template/home/produk',$dbase);
	}
	
	public function tambah_keranjang($id) {
		$barang = $this->Pembelian_model->find($id);
		$data = ['id' => $barang -> id_produk,
				'qty' => 1,
				'price'   => $barang->harga_produk,
        		'name'    => $barang->nama_produk,
				'gambar'  => $barang->gambar_produk,];
		$this->cart->insert($data);
		redirect('user/produk');
	}

	public function beli(){
		$data['title'] = "Keranjang";
		$this->load->view('template/home/header',$data);
		$this->load->view('user/body',$data);
		$this->load->view('user/beli',$data);
	}
	
	public function hapus_keranjang(){
		$this->cart->destroy();
		redirect('user');
	}
	
	public function checkout(){
		$data['title'] = "Checkout";
		$this->load->view('template/home/header',$data);
		$this->load->view('user/body',$data);
		$this->load->view('user/checkout',$data);
	}

	public function prosesCheckout() {
		$this->cart->destroy();
		redirect('user/produk');
	}
}
?>