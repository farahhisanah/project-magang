<?php


class Final_model extends CI_Model {

	private $table = 'final';

	public function getView() {
		$this->db->select('final.*, pengembangan.id as pengembangan_id');
		$this->db->from('final');
		$this->db->join('pengembangan','pengembangan.no_ur = final.no_ur', 'pengembangan.status = final.status ');
		$query = $this->db->get();
		return $query->result();
	}

	public function insertFinal($data){
		$this->db->insert('final', $data);
	}

	public function updateFinal($data, $id)
	{
		
		$this->db->where('id', $id);
		$this->db->update('final', $data);

	}

	public function getById($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row_array();
    }

	public function delete($id)
	{
		return $this->db->delete('final', ['id' => $id]);
	}


}

