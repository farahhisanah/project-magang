<?php 

class Report_model extends CI_Model {

	private $table = 'report';

	public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id", "asc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by IdMhsw desc
    }

	public function insertReport($data)
	{
		$this->db->insert('report', $data);
	}

	public function deleteReport($id)
	{
		return $this->db->delete($this->table, ['id' => $id]);
	}

	public function updateReport($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('report', $data);

	}

	public function getById($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row_array();
    }

	public function hitungJumlah()
	{   
		$query = $this->db->get('report');
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
