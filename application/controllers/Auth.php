<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('username','Username', 'trim|required',[
			'required'=>'Username harus diisi!'
		]);
		$this->form_validation->set_rules('password','Password', 'trim|required|min_length[4]',[
			'required'=>'Password harus diisi!',
			'min_length'=>'Password terlalu pendek!'
		]);

		if($this->form_validation->run()==FALSE){
			$this->load->view('auth/login');			
		}else{
			$this->proses_login();
		}
	}

	public function proses_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user',['username'=>$username])->row_array();

		if($user){
			if($user['aktif']==1){
				if(password_verify($password,$user['password'])){
					$data = [
						'logged_in' => TRUE,
						'username' => $user['username'],
						'password' => $user['password'],
					];
					$this->session->set_userdata($data);
					if($user['id_level']==1){
						redirect('admin');
					}else{
						redirect('customer');
					}
				}else{
					$this->session->set_flashdata('flash','<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <i class="fa fa-lock"></i> Password Salah!
                    </div>');
                    redirect('auth');
			}
			}
		}else{
			$this->session->set_flashdata('flash','<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <i class="fa fa-times-circle"></i> Akun Tidak Ditemukan!
            </div>');
            redirect('auth');
		}
	}

	public function registration(){
		$this->form_validation->set_rules('name','Full Name','trim|required',['required'=>'Nama lengkap harus diisi!']);
		$this->form_validation->set_rules('username','Username','trim|required|is_unique[user.username]',[
			'required' => 'Username harus diisi !',
			'is_unique' => 'Username sudah ada !'
		]);
		$this->form_validation->set_rules('password1','Password','trim|required|min_length[4]|matches[password2]',[
			'required' => 'Password harus diisi!',
			'matches'=>'Password tidak sesuai!',
			'min_length'=>'Password terlalu pendek!'
		]);
		$this->form_validation->set_rules('password2','Password','trim|required|min_length[4]|matches[password1]');

		if($this->form_validation->run()==FALSE){
			
			$this->load->view('auth/registration');
		} else{
			$data = [
				'nama' => $this->input->post('name'), 
				'username' => $this->input->post('username'), 
				'password' => password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
				'id_level' => 2 ,
				'aktif' => 1
			];
			$this->db->insert('user',$data);
			$this->session->set_flashdata('flash','<div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <i class="fa fa-check-circle"></i> Your Account Has Been Created!
            </div>');
			redirect('auth');
		}
	}

	public function logout(){
		$this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('flash','<div class="alert alert-success" role="alert">
		<i class="fa fa-check-circle"></i> You have been logged out! </div>');
            redirect('auth');
	}
}
