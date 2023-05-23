<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *	@property db $db
 *	@property session $session
*/

class Report extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Report';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('report/index', $data);
		$this->load->view('layouts/footer', $data);
		
	}
}
