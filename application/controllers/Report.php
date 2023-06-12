<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *	@property db $db
 *	@property session $session
 *	@property upload $upload
 *	@property input $input
 *  @property Report_model $Report_model
 *	@property form_validation $form_validation
*/

class Report extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Report_model');

	}

	public function index()
	{
		$data['title'] = 'Report';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data["report"] = $this->Report_model->getAll();

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('report/index', $data);
		$this->load->view('layouts/footer', $data);
		
	}

	public function submit_insert()
	{
		// print_r('<pre>');
		// print_r($this->input->post());
		// print_r($this->input->file());
		// die;

		
		$capture_name = "";
		if(isset($_FILES['capture'])) {
			
			$config['upload_path'] = './uploads/'; 
			$config['allowed_types'] = 'jpg|jpeg|png|pdf|'; 
			$config['max_size'] = '10000'; // max_size in kb 
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('capture')) {
				$capture = $this->upload->data();
				$capture_name = $capture['file_name'];
			}
			
		}

		$query_name = "";
		if(isset($_FILES['query'])) {
			
			$config['upload_path'] = './uploads/'; 
			$config['allowed_types'] = 'pdf|sql|doc|docx|xlsx'; 
			$config['max_size'] = '10000'; // max_size in kb 
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('query')) {
				$query = $this->upload->data();
				$query_name = $query['file_name'];
			}
			
		}

		$data['title'] = 'Form Insert Report';
		$data['user'] = $this->db->get_where('user', ['email' =>
						$this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama_report', 'Nama Report', 'required');

		if( $this->form_validation->run() == FALSE ){
			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar', $data);
			$this->load->view('layouts/topbar', $data);
			$this->load->view('report/insert', $data);
			$this->load->view('layouts/footer', $data);
		}else{

			$data = [
			"nama_report"=>$this->input->post('nama_report', true),
			"npp"=>$this->input->post('npp', true),
			"nama"=>$this->input->post('nama', true),
			"unit"=>$this->input->post('unit', true),
			"via"=>$this->input->post('via', true),
			"nomor_email"=>$this->input->post('nomor_email', true),
			"tgl_permintaan"=>$this->input->post('tgl_permintaan', true),
			"capture"=>$capture_name,
			"pic"=>$this->input->post('pic', true),
			"query"=>$query_name,
			"tgl_diberikan"=>$this->input->post('tgl_diberikan', true),
			"status"=>$this->input->post('status', true)
			];

			$this->Report_model->insertReport($data);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Insert Success</div>');
			redirect('report');
		}

		/*if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Insert Success</div>');
		} else {
			$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert"> Insert Failed</div>');
		}
		redirect('report');*/

	}

	public function insert()
	{
		$data['title'] = 'Form Insert Report';
		$data['user'] = $this->db->get_where('user', ['email' =>
						$this->session->userdata('email')])->row_array();

			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar', $data);
			$this->load->view('layouts/topbar', $data);
			$this->load->view('report/insert', $data);
			$this->load->view('layouts/footer', $data);
		
	}

	public function delete($id)
	{
		$this->Report_model->deleteReport($id);
		$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Delete Success</div>');
		redirect('report');
	}



	public function submit_update($id){

		// echo 'test';
		// exit;

		$data = [
			"nama_report"=>$this->input->post('nama_report', true),
			"npp"=>$this->input->post('npp', true),
			"nama"=>$this->input->post('nama', true),
			"unit"=>$this->input->post('unit', true),
			"via"=>$this->input->post('via', true),
			"nomor_email"=>$this->input->post('nomor_email', true),
			"tgl_permintaan"=>$this->input->post('tgl_permintaan', true),
			// "capture"=>$capture_name,
			"pic"=>$this->input->post('pic', true),
			// "query"=>$query_name,
			"tgl_diberikan"=>$this->input->post('tgl_diberikan', true),
			"status"=>$this->input->post('status', true)
		];

		if(isset($_FILES['capture'])) {
			// $data['capture'] = $upload[;file]
			// $file_name = $strin_filename;

			$config['upload_path'] = './uploads/'; 
			$config['allowed_types'] = 'jpg|jpeg|png|pdf|'; 
			$config['max_size'] = '10000'; // max_size in kb 
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('capture')) {
				$capture = $this->upload->data();
				$capture_name = $capture['file_name'];
				$data['capture'] = $capture_name;
			}
		}

		if(isset($_FILES['query'])) {
				// $data['capture'] = $upload[;file]
				// $file_name = $strin_filename;
	
				$config['upload_path'] = './uploads/'; 
				$config['allowed_types'] = 'pdf|sql|doc|docx|xlsx'; 
				$config['max_size'] = '10000'; // max_size in kb 
				$config['encrypt_name'] = TRUE;
	
				$this->load->library('upload', $config);
	
				if ($this->upload->do_upload('query')) {
					$upload_query = $this->upload->data();
					$file_query_name = $upload_query['file_name'];
					$data['query'] = $file_query_name;
				}
		}

		// print_r('<pre>');
		// print_r($data);
		// die;

		$this->Report_model->updateReport($data, $id);
		$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Update Success</div>');
		redirect('report');

		// $data['title'] = 'Form Update Report';
		// $data['user'] = $this->db->get_where('user', ['email' =>
		// 				$this->session->userdata('email')])->row_array();

		// $this->form_validation->set_rules('nama_report', 'nama_report', 'required');

		// if( $this->form_validation->run() == FALSE ){
		// 	$this->load->view('layouts/header', $data);
		// 	$this->load->view('layouts/sidebar', $data);
		// 	$this->load->view('layouts/topbar', $data);
		// 	$this->load->view('report/update', $data);
		// 	$this->load->view('layouts/footer', $data);
		// }else{
			
		
		// $this->Report_model->updateReport($data);
		
		// }
	}

	
	public function update($id)
	{
		$data['title'] = 'Form Update Report';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['report'] = $this->Report_model->getbyId($id);
		$data['via'] = ['WhatsApp','Email','Notin','Memo','On The Sport'];
		$data['status'] = ['On Progress','Done','Cancel'];
		$data['id'] = $id;

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('report/update', $data);
		$this->load->view('layouts/footer', $data);

		// if( $this->form_validation->run() == false ){
		// 	$this->load->view('layouts/header', $data);
		// 	$this->load->view('layouts/sidebar', $data);
		// 	$this->load->view('layouts/topbar', $data);
		// 	$this->load->view('report/update', $data);
		// 	$this->load->view('layouts/footer', $data);
		// }else{
		// 	$this->Report_model->updateReport();
		// 	$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Update Success</div>');
		// 	redirect('report');
		// }

	}

}
