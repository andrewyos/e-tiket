<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Customer extends CI_Model {

	public function show_film()
	{
        $film = $this->db->query("SELECT * FROM film");
        return $film;
	}

	public function show_detail_film($id){
		$film = $this->db->query("SELECT * FROM film WHERE id_film = $id");
		return $film;
	}

	public function book_film(){
		$cart = [
			'id_film' => $this->input->post('id_film'),
			'username' => $this->input->post('id_user'),
			'tanggal' => time()
		];
		$this->db->insert('cart',$cart);
		$this->session->set_flashdata('notif','<div class="alert alert-info alert-dismissible mt-4" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <i class="fa fa-check-circle"></i> <b>Pesanan Telah Dibuat!</b>
        </div>');
		redirect('customer');
		
	}
	// menampilkan cart user

	public function cart_user(){
		$data = $this->db->query("SELECT * FROM cart INNER JOIN film ON cart.id_film = film.id_film INNER JOIN user ON user.username = cart.username WHERE user.username = '".$this->session->username."'");
		return $data;
	}

	public function hapus_cart($id){
		$this->db->where('id_cart',$id);
        $this->db->delete('cart');
		$this->session->set_flashdata('notif','<div class="alert alert-danger alert-dismissible mt-4" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <i class="fa fa-check-circle"></i> <b>Pesanan Telah Dihapus Dari Keranjang</b>
        </div>');
		redirect('customer/cart');
	}

	public function count_film(){
		$count = $this->db->query("SELECT COUNT(*) FROM cart where username = '".$this->session->username."'");
		return $count;
	}
}
