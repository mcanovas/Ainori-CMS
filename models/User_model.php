<?php 
	class User_model extends CI_Model {
		public function register() {
			$data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password'))
			);
			return $this->db->insert('users', $data);;
		}

		public function login($username, $password) {

			//Validate
			$this->db->where('username',$username);
			$this->db->where('password',$password);

			$result = $this->db->get('users');
			if($result->num_rows() == 1) {
				return $result->row(0)->id;
			} else {
				return false;
			}
		}
	}
?>