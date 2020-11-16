<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Customer','customer');
	}
	
	public function index()
	{
        $data['user']=$this->db->get_where('user',['username'=>
		$this->session->userdata('username')])->row_array();
		$data['film']=$this->customer->show_film();
		$data['count']=$this->customer->count_film();
		$this->load->view('customer/index',$data);
	}

	public function datafilm($id){
		$data['user']=$this->db->get_where('user',['username'=>
		$this->session->userdata('username')])->row_array();
		// ambil id_user
		$data['film']=$this->customer->show_detail_film($id);
		$this->load->view('customer/datafilm',$data);
	}

	public function cart(){
		$data['data']= $this->customer->cart_user();
		$this->load->view('customer/cart',$data);
	}

	public function clear()
	{
		$id = $this->db->get_where('user', ['nama' => $_SESSION['username']])->result_array();
		foreach ($this->cart->contents() as $d) {
			$data = [
				'id_film' => $d['id'],
				'nama_film' => $d['nama_film'],
				'harga' => "Rp 50,000",
			];

			$this->db->insert('cart', $data);
		}
		$this->cart->destroy();
		
		redirect('index','refresh');
		
	}

	public function transaksi(){
		$this->customer->book_film();
	}

	public function hapus_cart($id){
		$this->customer->hapus_cart($id);
	}
}
