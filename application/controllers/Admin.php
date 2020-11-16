<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __CONSTRUCT(){
		parent::__construct();
		$this->load->model('M_Admin','admin');
	}

	public function index()
	{
		$data['konten']= 'admin/dashboard';
		$this->load->view('admin/template',$data);
	}

	public function film(){
		$data['film']= $this->admin->show_film();
		$data['konten']= 'admin/film';
		$this->load->view('admin/template',$data);
	}

	public function add_film(){
		$this->admin->add_film();
	}

	public function user(){
		$data['user'] = $this->admin->show_user();
		$data['konten']= 'admin/data_user';
		$this->load->view('admin/template',$data);
	}

	public function delete_film($id_film){
    $this->admin->delete_film($id_film);
  }

	public function transaksi_masuk(){
		$data['konten'] = 'admin/transaksi_masuk';
		$this->load->view('admin/template',$data);
	}
}
