<?php


class Perumusan_model extends CI_Model {

	public function getView() {
		$this->db->select('perumusan.*, pengembangan.id as pengembangan_id');
		$this->db->from('perumusan');
		$this->db->join('pengembangan','pengembangan.no_ur = perumusan.no_ur');
		$query = $this->db->get();
		return $query->result();
	}

	public function insertPerumusan($data){

		$this->db->insert('perumusan', $data);
	}

	public function update($data, $id)
	{

		$this->db->where('id', $id);
		$this->db->update('perumusan', $data);
		
		/*$this->db->from('uat');
		$this->db->join('pengembangan', 'pengembangan.id = uat.id');
		$this->db->set($data);
		$this->db->where('uat.id',$id);
		$this->db->update('uat');*/
	}


	public function getById($id)
    {
        return $this->db->get_where('perumusan', ['id' => $id])->row_array();
    }

	public function delete($id)
	{
		return $this->db->delete('perumusan', ['id' => $id]);
	}


}

