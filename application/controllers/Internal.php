<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *	@property db $db
 *	@property session $session
 *	@property upload $upload
  *	@property input $input
 *	@property Internal_model $Internal_model
 *	@property form_validation $form_validation
*/

class Internal extends CI_Controller {

	function __construct()
	{
	parent::__construct();
	$this->load->model('Internal_model', '', TRUE);
	$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['title'] = 'UAT Internal';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		// query memanggil function duatable di model
		$data['internal'] = $this->Internal_model->getViewInternal();

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('internal/index',$data);  
		$this->load->view('layouts/footer', $data);
	} 

	public function submit_insert()
	{

		$data = [
			"no_ur"=>$this->input->post('no_ur', true),
			"no_dok"=>$this->input->post('no_dok', true),
			"tgl_mulai"=>$this->input->post('tgl_mulai', true),
			"tgl_selesai"=>$this->input->post('tgl_selesai', true),
			"hasil"=>$this->input->post('hasil', true),
			"status"=>$this->input->post('status', true),
			"pic_test"=>$this->input->post('pic_test', true)
		];
		
		$this->form_validation->set_rules('no_ur', 'No UR', 'required');

		if( $this->form_validation->run() == false ){
			$this->session->set_flashdata('flash', '<div class="alert alert-warning" role="alert"> Insert Failed</div>');
		}else{
			$this->Internal_model->insertUat($data);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Insert Success</div>');
			redirect('internal');
		}
	}

	public function insert()
	{
		$data['title'] = 'Form Insert UAT Internal';
		$data['user'] = $this->db->get_where('user', ['email' =>
						$this->session->userdata('email')])->row_array();

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('internal/insert', $data);
		$this->load->view('layouts/footer', $data);
	}

	public function submit_update($id){
		// echo 'test';
		// exit;
		$data = [
			"no_ur"=>$this->input->post('no_ur', true),
			"no_dok"=>$this->input->post('no_dok', true),
			"tgl_mulai"=>$this->input->post('tgl_mulai', true),
			"tgl_selesai"=>$this->input->post('tgl_selesai', true),
			"hasil"=>$this->input->post('hasil', true),
			"status"=>$this->input->post('status', true),
			"pic_test"=>$this->input->post('pic_test', true)
		];

			$this->Internal_model->updateInternal($data, $id);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Update Success</div>');
			redirect('internal');
		
		}

	public function update($id)
	{

		$data['title'] = 'Form Update UAT Internal';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['internal'] = $this->Internal_model->getbyId($id);
		$data['id'] = $id;
		
			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar', $data);
			$this->load->view('layouts/topbar', $data);
			$this->load->view('internal/update', $data);
			$this->load->view('layouts/footer', $data);

	}

	public function delete($id)
	{
		$this->Internal_model->delete($id);
		$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Delete Success</div>');
		redirect('internal');
	}


}
