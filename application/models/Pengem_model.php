<?php 

class Pengem_model extends CI_Model {

	private $table = 'pengembangan';

	public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by IdMhsw desc
    }

	public function insertPengembangan()
	{
		$data = [
			"jenispeng"=>$this->input->post('jenispeng', true),
			"perihal"=>$this->input->post('perihal', true),
			"source"=>$this->input->post('source', true),
			"unit"=>$this->input->post('unit', true),
			"pic"=>$this->input->post('pic', true),
			"no_notin"=>$this->input->post('no_notin', true),
			"tgl_notin"=>$this->input->post('tgl_notin', true),
			"no_ur"=>$this->input->post('no_ur', true),
			"tgl_ur"=>$this->input->post('tgl_ur', true),
			"tgl_terima"=>$this->input->post('tgl_terima', true),
			"skala_prio"=>$this->input->post('skala_prio', true),
			"short_deskripsi"=>$this->input->post('short_deskripsi', true),
			"pic_programmer"=>$this->input->post('pic_programmer', true)
		];

		$this->db->insert('pengembangan', $data);
	}

	public function deletePengembangan($id)
	{
		return $this->db->delete($this->table, ['id' => $id]);
	}

	public function updatePengembangan()
	{
		$data = [
			"jenispeng"=>$this->input->post('jenispeng', true),
			"perihal"=>$this->input->post('perihal', true),
			"source"=>$this->input->post('source', true),
			"unit"=>$this->input->post('unit', true),
			"pic"=>$this->input->post('pic', true),
			"no_notin"=>$this->input->post('no_notin', true),
			"tgl_notin"=>$this->input->post('tgl_notin', true),
			"no_ur"=>$this->input->post('no_ur', true),
			"tgl_ur"=>$this->input->post('tgl_ur', true),
			"tgl_terima"=>$this->input->post('tgl_terima', true),
			"skala_prio"=>$this->input->post('skala_prio', true),
			"short_deskripsi"=>$this->input->post('short_deskripsi', true),
			"pic_programmer"=>$this->input->post('pic_programmer', true)
		];
		
		return $this->db->update($this->table, $data, array('id' => $this->input->post('id')));

	}

	public function getById($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row_array();
    }

}


?>
