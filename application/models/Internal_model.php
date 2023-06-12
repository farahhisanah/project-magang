<?php


class Internal_model extends CI_Model {

	public function getViewInternal() {
		$this->db->select('internal.*, pengembangan.id as pengembangan_id');
		$this->db->from('internal');
		$this->db->join('pengembangan','pengembangan.no_ur = internal.no_ur');
		$query = $this->db->get();
		return $query->result();
	}

	public function insertUat($data){

		$this->db->insert('internal', $data);
	}

	public function updateInternal($data, $id)
	{
		
		$this->db->where('id', $id);
		$this->db->update('internal', $data);

	}

	public function getById($id)
    {
        return $this->db->get_where('internal', ['id' => $id])->row_array();
    }

	public function delete($id)
	{
		return $this->db->delete('internal', ['id' => $id]);
	}


}

