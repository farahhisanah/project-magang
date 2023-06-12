<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *	@property db $db
 *	@property session $session
 *	@property upload $upload
  *	@property input $input
 *	@property Uat_model $Uat_model
 *	@property form_validation $form_validation
*/

class Uat extends CI_Controller {

	function __construct()
	{
	parent::__construct();
	$this->load->model('Uat_model', '', TRUE);
	$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['title'] = 'UAT User';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		// query memanggil function duatable di model
		$data['uat'] = $this->Uat_model->getViewUAT();
		//$data['uat'] = $this->Uat_model->getAll();

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('uat/index',$data);  
		$this->load->view('layouts/footer', $data);
	} 

	public function submit_insert()
	{
		$data = [
			"no_ur"=>$this->input->post('no_ur', true),
			"tgl_mulai"=>$this->input->post('tgl_mulai', true),
			"tgl_selesai"=>$this->input->post('tgl_selesai', true),
			"status"=>$this->input->post('status', true),
			"hasil"=>$this->input->post('hasil', true),
			"ba_uat"=>$this->input->post('ba_uat', true),
			"pic_uat"=>$this->input->post('pic_uat', true)
		];

		$this->form_validation->set_rules('no_ur', 'No UR', 'required');
		
		if( $this->form_validation->run() == false ){
			echo 'FAILED';
		}else{
			$this->Uat_model->insertUat($data);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Insert Success</div>');
			redirect('uat');
		}
	}
	
	public function insert()
	{
		$data['title'] = 'Form Insert UAT User';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();


		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('uat/insert', $data);
		$this->load->view('layouts/footer', $data);
	}

	public function submit_update($id){
		// echo 'test';
		// exit;
		$data = [
			"no_ur"=>$this->input->post('no_ur', true),
			"tgl_mulai"=>$this->input->post('tgl_mulai', true),
			"tgl_selesai"=>$this->input->post('tgl_selesai', true),
			"status"=>$this->input->post('status', true),
			"hasil"=>$this->input->post('hasil', true),
			"ba_uat"=>$this->input->post('ba_uat', true),
			"pic_uat"=>$this->input->post('pic_uat', true)
		];
		
		//print_r('<pre>');
		//print_r($data);die;

			$this->Uat_model->update($data, $id);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Update Success</div>');
			redirect('uat');
		
		}

	public function update($id)
	{
		$data['title'] = 'Form Update UAT User';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['uat'] = $this->Uat_model->getbyId($id);
		$data['id'] = $id;

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('uat/update', $data);
		$this->load->view('layouts/footer', $data);

	}

	public function delete($id)
	{
		$this->Uat_model->delete($id);
		$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Delete Success</div>');
		redirect('uat');
	}

	/*public function update($id)
	{

		$data['title'] = 'Form Update UAT User';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['uat'] = $this->Uat_model->getbyId($id);

		$this->form_validation->set_rules('no_ur', 'No UR', 'required');

		if( $this->form_validation->run() == false ){
			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar', $data);
			$this->load->view('layouts/topbar', $data);
			$this->load->view('uat/update', $data);
			$this->load->view('layouts/footer', $data);
		}else{
		
			$this->Uat_model->updateUat();
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Update Success</div>');
			redirect('uat');
		}
		
	}*/


}
