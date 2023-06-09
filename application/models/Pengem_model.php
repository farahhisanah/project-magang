<?php 

class Pengem_model extends CI_Model {

	private $table = 'pengembangan';

	public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id", "asc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by IdMhsw desc
    }

	public function getView($id) {
		$this->db->select('*');
		$query = $this->db->get_where('pengembangan', ['id' => $id]);
		$this->db->join('final', 'pengembangan.status = pengembangan.final');
		return $query->result();
	}

	public function insertPengembangan($data)
	{
		$this->db->insert('pengembangan', $data);
	}

	public function deletePengembangan($id)
	{
		return $this->db->delete($this->table, ['id' => $id]);
	}

	public function updatePengembangan($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('pengembangan', $data);

	}

	public function getById($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row_array();
    }

	public function hitungJumlah()
	{   
		$query = $this->db->get('pengembangan');
		if($query->num_rows()>0)
		{
		return $query->num_rows();
		}
		else
		{
		return 0;
		}
	}

}


?>
