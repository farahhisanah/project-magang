<?php 

class Komplain_model extends CI_Model {

	private $table = 'komplain';

	public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id", "asc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by IdMhsw desc
    }

	public function insertKomplain()
	{
		$data = [
			"tgl_laporan"=>$this->input->post('tgl_laporan', true),
			"npp"=>$this->input->post('npp', true),
			"nama"=>$this->input->post('nama', true),
			"nama_aplikasi"=>$this->input->post('nama_aplikasi', true),
			"permasalahan"=>$this->input->post('permasalahan', true),
			"pic_perbaikan"=>$this->input->post('pic_perbaikan', true),
			"cara_perbaikan"=>$this->input->post('cara_perbaikan', true),
			"status"=>$this->input->post('status', true),
			"keterangan"=>$this->input->post('keterangan', true),
			"tgl_update"=>$this->input->post('tgl_update', true)
		];

		$this->db->insert('komplain', $data);
	}

	public function deleteKomplain($id)
	{
		return $this->db->delete($this->table, ['id' => $id]);
	}

	public function updateKomplain()
	{
		$data = [
			"tgl_laporan"=>$this->input->post('tgl_laporan', true),
			"npp"=>$this->input->post('npp', true),
			"nama"=>$this->input->post('nama', true),
			"nama_aplikasi"=>$this->input->post('nama_aplikasi', true),
			"permasalahan"=>$this->input->post('permasalahan', true),
			"pic_perbaikan"=>$this->input->post('pic_perbaikan', true),
			"cara_perbaikan"=>$this->input->post('cara_perbaikan', true),
			"status"=>$this->input->post('status', true),
			"keterangan"=>$this->input->post('keterangan', true),
			"tgl_update"=>$this->input->post('tgl_update', true)
		];
		
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('komplain', $data);

	}

	public function getById($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row_array();
    }

}


?>
