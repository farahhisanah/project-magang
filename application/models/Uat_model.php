<?php


class Uat_model extends CI_Model {

	private $table = 'uat';

	public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id", "asc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by IdMhsw desc
    }
	
	public function getViewUAT() {
		$this->db->select('uat.*, pengembangan.id as pengembangan_id');
		$this->db->from('uat');
		$this->db->join('pengembangan','pengembangan.no_ur = uat.no_ur');
		$query = $this->db->get();
		return $query->result();
	}

	/*public function getViewPengembangan() {
		$this->db->select('pengembangan.*');
		$this->db->from('uat');
		$this->db->join('pengembangan','pengembangan.no_ur = uat.no_ur');
		$query = $this->db->get();
		return $query->result();
	}*/

	public function insertUat($data){

		$this->db->insert($this->table, $data);
	}

	public function update($data, $id)
	{

		$this->db->where('id', $id);
		$this->db->update('uat', $data);
		
		/*$this->db->from('uat');
		$this->db->join('pengembangan', 'pengembangan.id = uat.id');
		$this->db->set($data);
		$this->db->where('uat.id',$id);
		$this->db->update('uat');*/
	}


	public function getById($id)
    {
        return $this->db->get_where('uat', ['id' => $id])->row_array();
    }

	public function delete($id)
	{
		return $this->db->delete('uat', ['id' => $id]);
	}


}

