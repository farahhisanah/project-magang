<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *	@property db $db
 *	@property session $session
 *	@property upload $upload
  *	@property input $input
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

	
	public function submit_insert()
	{
		// print_r('<pre>');
		// print_r($this->input->post());
		// print_r($this->input->file());
		// die;

		$file_notin_name = "";
		if(isset($_FILES['file_notin'])) {
			
			$config['upload_path'] = './uploads/'; 
			$config['allowed_types'] = 'jpg|jpeg|png|pdf'; 
			$config['max_size'] = '10000'; // max_size in kb 
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('file_notin')) {
				$file_notin = $this->upload->data();
				$file_notin_name = $file_notin['file_name'];
			}
			
		}
		
		$file_ur_name = "";
		if(isset($_FILES['file_ur'])) {
			
			$config['upload_path'] = './uploads/'; 
			$config['allowed_types'] = 'jpg|jpeg|png|pdf'; 
			$config['max_size'] = '10000'; // max_size in kb 
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('file_ur')) {
				$file_ur = $this->upload->data();
				$file_ur_name = $file_ur['file_name'];
			}
			
		}

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

			$data = [
				"jenispeng"=>$this->input->post('jenispeng', true),
				"perihal"=>$this->input->post('perihal', true),
				"source"=>$this->input->post('source', true),
				"unit"=>$this->input->post('unit', true),
				"pic"=>$this->input->post('pic', true),
				"no_notin"=>$this->input->post('no_notin', true),
				"file_notin"=> $file_notin_name,
				"tgl_notin"=>$this->input->post('tgl_notin', true),
				"no_ur"=>$this->input->post('no_ur', true),
				"file_ur"=>$file_ur_name,
				"tgl_ur"=>$this->input->post('tgl_ur', true),
				"tgl_terima"=>$this->input->post('tgl_terima', true),
				"skala_prio"=>$this->input->post('skala_prio', true),
				"short_deskripsi"=>$this->input->post('short_deskripsi', true),
				"pic_programmer"=>$this->input->post('pic_programmer', true)
			];

			$this->Pengem_model->insertPengembangan($data);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Insert Success</div>');
			redirect('pengembangan');
		}

		/*if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Insert Success</div>');
		} else {
			$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert"> Insert Failed</div>');
		}
		redirect('pengembangan');*/

	}

	public function insert()
	{

		$data['title'] = 'Form Insert Pengembangan Sistem';
		$data['user'] = $this->db->get_where('user', ['email' =>
						$this->session->userdata('email')])->row_array();

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('pengembangan/insert', $data);
		$this->load->view('layouts/footer', $data);
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
