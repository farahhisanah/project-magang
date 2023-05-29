<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *	@property db $db
 *	@property session $session
 *	@property Pengem_model $Pengem_model
 *	@property form_validation $form_validation
*/

class Pengembangan extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengem_model');

	}

	public function index()
	{
		$data['title'] = 'Pengembangan Sistem 2023';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data["pengembangan"] = $this->Pengem_model->getAll();

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('pengembangan/index', $data);
		$this->load->view('layouts/footer', $data);

	}

	public function insert()
	{
		$data['title'] = 'Form Insert Pengembangan Sistem';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('perihal', 'Perihal', 'required');

		if( $this->form_validation->run() == FALSE ){
			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar', $data);
			$this->load->view('layouts/topbar', $data);
			$this->load->view('pengembangan/insert', $data);
			$this->load->view('layouts/footer', $data);
		}else{
			$this->Pengem_model->insertPengembangan();
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Insert Success</div>');
			redirect('pengembangan');
		}
	}

	public function delete($id)
	{
		$this->Pengem_model->deletePengembangan($id);
		$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Delete Success</div>');
		redirect('pengembangan');
	}

	public function update($id)
	{

		$data['title'] = 'Form Update Pengembangan Sistem';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['pengembangan'] = $this->Pengem_model->getbyId($id);
		$data['jenispeng'] = ['Assign By Pimkel','Enchancement','Fix Issue & Performance','New Initiation'];
		$data['skala_prio'] = ['Low','Medium','High'];
		
		$this->form_validation->set_rules('perihal', 'Perihal', 'required');

		if( $this->form_validation->run() == false ){
			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar', $data);
			$this->load->view('layouts/topbar', $data);
			$this->load->view('pengembangan/update', $data);
			$this->load->view('layouts/footer', $data);
		}else{
			$this->Pengem_model->updatePengembangan();
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Update Success</div>');
			redirect('pengembangan');
		}
	}

}
