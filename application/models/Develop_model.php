<?php

class Develop_model extends CI_Model {

	private $table = 'develop';

	public function getView() {
		$this->db->select('develop.*, pengembangan.id as pengembangan_id');
		$this->db->from('develop');
		$this->db->join('pengembangan','pengembangan.no_ur = develop.no_ur');
		$query = $this->db->get();
		return $query->result();
	}

	public function insertDev(){

		// $timeline = (int)$this->input->post('timeline', true);
		// $waktu = (int)$this->input->post('waktu', true);
		// $selisih = $timeline - $waktu ;
		$data = [
			"no_ur"=>$this->input->post('no_ur', true),
			"tgl_mulai"=>$this->input->post('tgl_mulai', true),
			"tgl_selesai"=>$this->input->post('tgl_selesai', true),
			"timeline"=> (int)$this->input->post('timeline', true),
			"waktu"=>(int)$this->input->post('waktu', true),
			"selisih"=>(int)$this->input->post('selisih', true),
			"tgl_promote"=>$this->input->post('tgl_promote', true)
		];

		$this->db->insert('develop', $data);
	}

	public function update($data, $id)
	{
		
		$this->db->where('id', $id);
		$this->db->update('develop', $data);

	}

	public function getById($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row_array();
    }

	public function delete($id)
	{
		return $this->db->delete('develop', ['id' => $id]);
	}

}
