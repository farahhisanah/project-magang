<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *	@property db $db
 *	@property session $session
 *	@property upload $upload
  *	@property input $input
 *	@property Perumusan_model $Perumusan_model
 *	@property form_validation $form_validation
*/

class Perumusan extends CI_Controller {

	function __construct()
	{
	parent::__construct();
	$this->load->model('Perumusan_model', '', TRUE);
	$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['title'] = 'Perumusan';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		// query memanggil function duatable di model
		$data['perumusan'] = $this->Perumusan_model->getView();

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('perumusan/index',$data);  
		$this->load->view('layouts/footer', $data);
	} 

	public function submit_insert()
	{

		$data = [
			"no_ur"=>$this->input->post('no_ur', true),
			"tgl_dis"=>$this->input->post('tgl_dis', true),
			"diskusi"=>$this->input->post('diskusi', true),
			"bulan"=>$this->input->post('bulan', true)
		];
		
		$this->form_validation->set_rules('no_ur', 'No UR', 'required');

		if( $this->form_validation->run() == false ){
			echo 'FAILED!';
		}else{
			$this->Perumusan_model->insertPerumusan($data);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Insert Success</div>');
			redirect('perumusan');
		}
	}

	public function insert()
	{
		$data['title'] = 'Form Insert Pengembangan Sistem';
		$data['user'] = $this->db->get_where('user', ['email' =>
						$this->session->userdata('email')])->row_array();

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('perumusan/insert', $data);
		$this->load->view('layouts/footer', $data);
	}

	public function submit_update($id){
		$data = [
			"no_ur"=>$this->input->post('no_ur', true),
			"tgl_dis"=>$this->input->post('tgl_dis', true),
			"diskusi"=>$this->input->post('diskusi', true),
			"bulan"=>$this->input->post('bulan', true)
		];
		
		//print_r('<pre>');
		//print_r($data);die;

			$this->Perumusan_model->update($data, $id);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Update Success</div>');
			redirect('perumusan');
		
		}

	public function update($id)
	{
		$data['title'] = 'Form Update UAT User';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['perumusan'] = $this->Perumusan_model->getbyId($id);
		$data['id'] = $id;

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('perumusan/update', $data);
		$this->load->view('layouts/footer', $data);
	}

	public function delete($id)
	{
		$this->Perumusan_model->delete($id);
		$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Delete Success</div>');
		redirect('perumusan');
	}

}
