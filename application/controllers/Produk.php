<?php
defined('BASEPATH', 'https://localhost/petsqushop/') or exit('No direct script access allowed');
/**
 * 
 */
class Produk extends CI_Controller
{

	public function __construct()
	{
		ini_set('date.timezone', 'Asia/Jakarta');
		parent::__construct();
		$this->load->helper('url');
		$this->load->library(['ion_auth']);
		$this->load->library('upload');
		$this->load->model('Produk_model');
	}

	public function index()
	{
		if (!$this->ion_auth->logged_in()) {
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		} else {
			$data['title'] = "Produk";
			$this->load->view('template/meta', $data);
			$this->load->view('template/sidebar');
			$this->load->view('template/header');
			$dbase['tampil'] = $this->Produk_model->tampilHome();
			$this->load->view('produk', $dbase);
			$this->load->view('template/footer');
		}
	}

	public function prosesTambah()
	{
		if (!$this->ion_auth->logged_in()) {
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		} else {
			$foto = $_FILES['userfile']['name'];
			if (!empty($foto)) {
				$config['upload_path']          = $_SERVER['DOCUMENT_ROOT'] . './assets/images/';
				$config['allowed_types']        = 'gif|jpg|png';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('userfile')) {
					$imageName = $this->upload->data('file_name');
					$data = [
						'nama_produk' => $this->input->post('nama'),
						'deskripsi_produk' => $this->input->post('deskripsi'),
						'gambar_produk' => $imageName,
						'harga_produk' => $this->input->post('harga'),
					];

					//kalau form diisi dengan benar maka simpan data ke table user
					$this->Produk_model->insert_data($data);
				} else {
					$this->session->set_flashdata('status', $this->upload->display_errors());
					redirect('produk');
				}
			} else {
				$dataPesan = [
					'alert' => 'alert-danger',
					'pesan' => 'Foto gagal Ditambah'
				];

				$this->session->set_flashdata($dataPesan);
				redirect('produk');
			}
			//untuk notifikasi
			$dataPesan = [
				'alert' => 'alert-success',
				'pesan' => 'Data Berhasil Ditambah'
			];

			$this->session->set_flashdata($dataPesan);

			//pindahkan ke halaman login
			redirect('produk');
		}
	}

	public function prosesEdit($id_produk)
	{
		if (!$this->ion_auth->logged_in()) {
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		} else {
			$foto = $_FILES['userfile']['name'];
			if (!empty($foto)) {

				$config['upload_path']          = $_SERVER['DOCUMENT_ROOT'] . './assets/images/';
				$config['allowed_types']        = 'gif|jpg|png';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('userfile')) {
					$imageName = $this->upload->data('file_name');
					$data = [
						'nama_produk' => $this->input->post('nama'),
						'deskripsi_produk' => $this->input->post('deskripsi'),
						'gambar_produk' => $imageName,
						'harga_produk' => $this->input->post('harga'),
					];

					//kalau form diisi dengan benar maka simpan data ke table user
					$this->Produk_model->update_data($id_produk, $data);
				} else {
					$this->session->set_flashdata('status', $this->upload->display_errors());
					redirect('produk');
				}
			} else {
				$data = [
					'nama_produk' => $this->input->post('nama'),
					'deskripsi_produk' => $this->input->post('deskripsi'),
					'harga_produk' => $this->input->post('harga'),
				];
				//kalau form diisi dengan benar maka simpan data ke table user
				$this->Produk_model->update_data($id_produk, $data);
			}
			//untuk notifikasi
			$dataPesan = [
				'alert' => 'alert-success',
				'pesan' => 'Data Berhasil Diubah'
			];
			$this->session->set_flashdata($dataPesan);

			//pindahkan ke halaman login
			redirect('produk');
		}
	}

	public function hapus($id_produk)
	{

		if (!$this->ion_auth->logged_in()) {
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		} else {
			$this->Produk_model->delete_data($id_produk);

			if ($this->db->affected_rows() > 0) {

				$dataPesan = [
					'alert' => 'alert-success',
					'pesan' => 'Data Berhasil Diubah'
				];
				$this->session->set_flashdata($dataPesan);

				redirect('produk');
			}
		}
	}
}
