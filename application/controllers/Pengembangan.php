<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *	@property db $db
 *	@property session $session
*/

class Pengembangan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('pengembangan/index', $data);
		
	}
}
