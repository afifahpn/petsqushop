<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Pembelian_model extends CI_Model
	{
		
		public function tampilHome() {
			return $this->db->query('SELECT * FROM pembelian ');
		}
		public function find($id)
		{
			$result = $this->db->where('id_produk', $id)
								->limit(1)
								->get('produk');
			if($result->num_rows() > 0) {
				return $result->row();
			} else {
				return array();
			}
		}
    }
?>