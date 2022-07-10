<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function __construct()
	{	
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('keranjang_model');
		$this->load->model('keranjang_model');

		// if($this->session->userdata('status'!= 'login')){
		// 	redirect(base_url());
		// }
	}
	public function index()
		{
			if($this->session->userdata('status'=='login')){
				redirect(base_url()."index.php/shopping");
			}else{
				$this->load->view('shopping/login');
			}
			// $data['produk'] = $this->keranjang_model->get_produk_all();
			// $data['kategori'] = $this->keranjang_model->get_kategori_all();
			// $this->load->view('themes/header',$data);
			// $this->load->view('shopping/list_produk',$data);
			// $this->load->view('themes/footer');
		}
	public function tentang()
		{
			$data['kategori'] = $this->keranjang_model->get_kategori_all();
			$this->load->view('themes/header',$data);
			$this->load->view('pages/tentang',$data);
			$this->load->view('themes/footer');
		}	
	public function cara_bayar()
		{
			$data['kategori'] = $this->keranjang_model->get_kategori_all();
			$this->load->view('themes/header',$data);
			$this->load->view('pages/cara_bayar',$data);
			$this->load->view('themes/footer');
		}		
}
