<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *	@property form_validation $form_validation
 *	@property input $input
 *	@property db $db
 *	@property session $session
*/

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');


		if($this->form_validation->run() == false){
			$this->load->view('login/login');
		} else{
			// validasinya sukses
			$this->_login();
		}
		
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();
			
		// jika usernya ada
		if($user){
			if(password_verify($password, $user['password'])){
				$data = [
					'email' => $user['email'],
					'role_id' => $user['role_id']
				];
				$this->session->set_userdata($data);
				
				if($user['role_id'] ==1){
					redirect('admin');
				}else {
				redirect('user');
				}

			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">  Wrong password! </div>');
			redirect('login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">  Email is not registered! </div>');
			redirect('login');
		}
	}

	public function register()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', 
		[ 
			'matches'=>'password dont match!',
			'min_length'=>'password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[6]|matches[password1]');

		if ($this->form_validation->run() == false){
			$this->load->view('login/register');
		} else {
			$data = [
				'username' => htmlspecialchars($this->input->post('username', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password1'),
				PASSWORD_DEFAULT),
				'role_id' => 2,
				'date_created' => time()
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your account has been created. </div>');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> You have been logout! </div>');
		redirect('login');
	}
}
