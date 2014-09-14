<?php 
	class install extends CI_Controller {
		public function index() {
			$data = array();
			$this->load->view('install', $data);
		}
	}
?>