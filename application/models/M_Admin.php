<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

	public function show_film()
	{
        $film = $this->db->query("SELECT * FROM film");
        return $film;
	}

	public function add_film(){
	    $data = [
		'nama_film' => $this->input->post('nama'),
		'gambar' => $this->input->post('gambar'),
		'genre' => $this->input->post('genre'),
		'durasi' => $this->input->post('durasi'),
		'sutradara' => $this->input->post('sutradara'),
		'rating' => $this->input->post('rating'),
	    ];
		$this->db->insert('film',$data);
		$this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <i class="fa fa-check-circle"></i> Data Film Telah Ditambahkan!
        </div>');
	    redirect('admin/film');
	}

	public function delete_film($id_film){
		$this->db->where('id_film',$id_film);
		$this->db->delete('film');
		$this->session->set_flashdata('notif','<div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <i class="fa fa-check-circle"></i> Data Film Telah Dihapus!
        </div>');
	    redirect('admin/film');
	}

	public function show_user(){
		$data = $this->db->query("SELECT * FROM user JOIN level ON level.id_level = user.id_level");
		return $data->result_array();
	}
}
