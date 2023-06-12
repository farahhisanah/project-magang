<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *	@property db $db
 *	@property session $session
 *	@property Komplain_model $Komplain_model
 *	@property form_validation $form_validation
*/

class Komplain extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Komplain_model');

	}
	

	public function index()
	{
		$data['title'] = 'Handling Komplain';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data["komplain"] = $this->Komplain_model->getAll();

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('komplain/index', $data);
		$this->load->view('layouts/footer', $data);

		
	}

	public function insert()
	{
		$data['title'] = 'Form Insert Handling Komplain';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('npp', 'NPP', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('permasalahan', 'Permasalahan', 'required');

		if( $this->form_validation->run() == FALSE ){
			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar', $data);
			$this->load->view('layouts/topbar', $data);
			$this->load->view('komplain/insert', $data);
			$this->load->view('layouts/footer', $data);
		}else{
			$this->Komplain_model->insertKomplain();
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Insert Success</div>');
			redirect('komplain');
		}
	}

	public function delete($id)
	{
		$this->Komplain_model->deleteKomplain($id);
		$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Delete Success</div>');
		redirect('komplain');
	}

	public function update($id)
	{

		$data['title'] = 'Form Update Handling Komplain';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['komplain'] = $this->Komplain_model->getbyId($id);
		$data['nama_aplikasi'] = ['Smarter','m-BNISmarter','DigiHC'];
		$data['status'] = ['on_progress','done','pending','cancel'];
		
		$this->form_validation->set_rules('npp', 'NPP', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		

		if( $this->form_validation->run() == false ){
			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar', $data);
			$this->load->view('layouts/topbar', $data);
			$this->load->view('komplain/update', $data);
			$this->load->view('layouts/footer', $data);
		}else{
			$this->Komplain_model->updateKomplain();
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Update Success</div>');
			redirect('komplain');
		}
	}
}
