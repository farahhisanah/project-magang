<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *	@property db $db
 *	@property session $session
  *	@property upload $upload
  *	@property input $input
 *	@property Develop_model $Develop_model
 *	@property form_validation $form_validation
*/

class Develop extends CI_Controller {

	
	function __construct()
	{
	parent::__construct();
	$this->load->model('Develop_model', '', TRUE);
	$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['title'] = 'Development';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		// query memanggil function duatable di model
		$data['develop'] = $this->Develop_model->getView();

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('develop/index',$data);  
		$this->load->view('layouts/footer', $data);
	} 

	public function submit_insert()
	{

		$data['title'] = 'Form Insert Development';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		$this->form_validation->set_rules('no_ur', 'No UR', 'required');

		if( $this->form_validation->run() == false ){
			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar', $data);
			$this->load->view('layouts/topbar', $data);
			$this->load->view('develop/insert', $data);
			$this->load->view('layouts/footer', $data);
		}else{
			$this->Develop_model->insertDev();
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Insert Success</div>');
			redirect('develop');
		}
	}

	public function insert()
	{
		$data['title'] = 'Form Insert Development';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('develop/insert', $data);
		$this->load->view('layouts/footer', $data);
	}

	public function update($id)
	{

		$data['title'] = 'Form Update Develop';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['develop'] = $this->Develop_model->getbyId($id);
		$data['id'] = $id;
		
			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar', $data);
			$this->load->view('layouts/topbar', $data);
			$this->load->view('develop/update', $data);
			$this->load->view('layouts/footer', $data);

	}

	public function submit_update($id){
		// echo 'test';
		// exit;

		$data = [
			"no_ur"=>$this->input->post('no_ur', true),
			"tgl_mulai"=>$this->input->post('tgl_mulai', true),
			"tgl_selesai"=>$this->input->post('tgl_selesai', true),
			"timeline"=> (int)$this->input->post('timeline', true),
			"waktu"=>(int)$this->input->post('waktu', true),
			"selisih"=>(int)$this->input->post('selisih', true),
			"tgl_promote"=>$this->input->post('tgl_promote', true)
		];

			$this->Develop_model->update($data, $id);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Update Success</div>');
			redirect('develop');
		
	}

	public function delete($id)
	{
		$this->Develop_model->delete($id);
		$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Delete Success</div>');
		redirect('develop');
	}
	
}
