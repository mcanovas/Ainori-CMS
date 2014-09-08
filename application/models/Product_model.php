<?php 
	class Product_model extends CI_Model {
		/*
		 * Get All Products
 		 */
		public function get_products() {
			$this->db->select('*');
			$this->db->from('products');
			$query = $this->db->get();
			return $query->result();
		}

		/*
		 *
		 */
		public function get_product_details($id) {
			$this->db->select('*');
			$this->db->from('products');
			$this->db->where('id', $id);

			$query = $this->db->get();
			return $query->row();
		}
	}
 ?>