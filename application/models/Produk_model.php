<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Produk_model extends CI_Model
	{
		
		public function tampilHome() {
			return $this->db->query('SELECT * FROM produk ');
		}
		public function anjing() {
			return $this->db->query('SELECT * FROM produk WHERE deskripsi_produk LIKE "Makanan Anjing" ');
		}
		
		public function kucing() {
			return $this->db->query('SELECT * FROM produk WHERE deskripsi_produk LIKE "Makanan Kucing" ');
		}
		
		public function ikan() {
			return $this->db->query('SELECT * FROM produk WHERE deskripsi_produk LIKE "Makanan Ikan" ');
		}
		public function burung() {
			return $this->db->query('SELECT * FROM produk WHERE deskripsi_produk LIKE "Makanan Burung" ');
		}
		
		public function insert_data($data) {
			$query = $this->db->insert('produk',$data);
			return $query;
		}
		public function update_data($id_produk, $data) {
			$query = $this->db->where('id_produk', $id_produk);
			$query = $this->db->update('produk',$data);
			return $query;
		}
		public function delete_data($id_produk) {
			$query = $this->db->where('id_produk', $id_produk);
			$query = $this->db->delete('produk');
			return $query;
		}
	}
?>