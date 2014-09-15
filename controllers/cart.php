<?php 
	class Cart extends CI_Controller {
		public $paypal_data = '';
		public $tax;
		public $shipping;
		public $total = 0;
		public $grand_total;

		/*
			Cart Index
		*/
		public function index() {
			//Load View
			$data['main_content'] = 'cart';
			$this->load->view('layouts/main', $data);
		}

		/*
			Add to Cart
		*/
		public function add() {
			//Item Data
			$data = array(
				'id' => $this->input->post('item_number'),
				'qty' => $this->input->post('qty'),
				'price' => $this->input->post('price'),
				'name' => $this->input->post('title')
			);
			//print_r($data);die();

			//Insert Into Cart
			$this->cart->insert($data);
			redirect('products');
		}

		/*
			Update Cart
		*/
		public function update($in_cart = null) {
			$data = $_POST;
			$this->cart->update($data);

			//Show Cart Page
			redirect('cart', 'refresh');
		}

		/*

		*/
		public function process() {
			if ($_POST) {
				print_r($this->input->post('item_name')); die();
				foreach ($this->input->post('item_name') as $key => $value) {
					$item_id = $this->input->post('item_code')[$key];
					$product = $this->Product_model->get_product_details($item_id);

					$this->paypal_data .= '&L_PAYMENTREQUEST_0_NAME'.$key. '=' .urlencode($product);
					$this->paypal_data .= '&L_PAYMENTREQUEST_0_NUMBER'.$key. '=' .urlencode($item_);
					$this->paypal_data .= '&L_PAYMENTREQUEST_0_AMT'.$key. '=' .urlencode($product-);
					$this->paypal_data .= '&L_PAYMENTREQUEST_0_QTY'.$key. '=' .urlencode($this->);
				}
			}
		}
	}
 ?>