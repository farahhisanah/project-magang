<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *	@property db $db
 *	@property session $session
*/

class User extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Profile';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('layouts/footer', $data);
		
	}
}
