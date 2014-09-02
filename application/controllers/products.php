<?php 
	class Products extends CI_Controller {
		public function index() {
			$data['name'] = 'Mike';
			$this->load->view('products', $data);
		}
	}
 ?>