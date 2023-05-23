<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *	@property db $db
 *	@property session $session
*/

class Pengembangan extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Pengembangan Sistem 2023';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('pengembangan/index', $data);
		$this->load->view('layouts/footer', $data);
		
	}
}