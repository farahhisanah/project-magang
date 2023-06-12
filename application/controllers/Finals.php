<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *	@property db $db
 *	@property session $session
  *	@property upload $upload
  *	@property input $input
 *	@property Final_model $Final_model
 *	@property form_validation $form_validation
*/

class Finals extends CI_Controller {

	function __construct()
	{
	parent::__construct();
	$this->load->model('Final_model', '', TRUE);
	$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['title'] = 'Final';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		// query memanggil function duatable di model
		$data['final'] = $this->Final_model->getView();

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('final/index',$data);  
		$this->load->view('layouts/footer', $data);
	} 

	public function submit_insert()
	{

		$data = [
			"no_ur"=>$this->input->post('no_ur', true),
			"tgl_promote"=>$this->input->post('tgl_promote', true),
			"status"=>$this->input->post('status', true),
			"dok_juknis"=>$this->input->post('dok_juknis', true),
			"pic_juknis"=>$this->input->post('pic_juknis', true)
		];

		$this->form_validation->set_rules('no_ur', 'No UR', 'required');

		if( $this->form_validation->run() == false ){
			echo 'FAILED';
		}else{
			$this->Final_model->insertFinal($data);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Insert Success</div>');
			redirect('finals');
		}
	}

	public function insert()
	{
		$data['title'] = 'Form Insert Final';
		$data['user'] = $this->db->get_where('user', ['email' =>
						$this->session->userdata('email')])->row_array();

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('final/insert', $data);
		$this->load->view('layouts/footer', $data);
	}

	public function update($id)
	{

		$data['title'] = 'Form Update Final';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['final'] = $this->Final_model->getbyId($id);
		$data['id'] = $id;
		
			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar', $data);
			$this->load->view('layouts/topbar', $data);
			$this->load->view('final/update', $data);
			$this->load->view('layouts/footer', $data);

	}

	public function submit_update($id){
		// echo 'test';
		// exit;

		$data = [
			"no_ur"=>$this->input->post('no_ur', true),
			"tgl_promote"=>$this->input->post('tgl_promote', true),
			"status"=>$this->input->post('status', true),
			"dok_juknis"=>$this->input->post('dok_juknis', true),
			"pic_juknis"=>$this->input->post('pic_juknis', true)
		];

			$this->Final_model->updateFinal($data, $id);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Update Success</div>');
			redirect('finals');
		
	}

	public function delete($id)
	{
		$this->Final_model->delete($id);
		$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Delete Success</div>');
		redirect('finals');
	}


}

