<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *	@property db $db
 *	@property session $session
*/

class User extends CI_Controller {

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('user/index');
		$this->load->view('layouts/footer');
		
	}



}
