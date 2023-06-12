<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *	@property db $db
 *	@property session $session
 *	@property Pengem_model $Pengem_model
 *	@property Komplain_model $Komplain_model
 *	@property Report_model $Report_model
*/

class Admin extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->model('Pengem_model');
		$data['total_peng'] = $this->Pengem_model->hitungJumlah();

		$this->load->model('Komplain_model');
		$data['total_komp'] = $this->Komplain_model->hitungJumlah();

		$this->load->model('Report_model');
		$data['total_report'] = $this->Report_model->hitungJumlah();

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('layouts/footer', $data);
		
	}
}
