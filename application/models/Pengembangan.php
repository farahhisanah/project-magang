<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengembangan extends CI_Model {
 
public function duatable() {
 $this->db->select('*');
 $this->db->from('pengembangan');
 $this->db->join('jenis_pengembangan','pengembangan.id=jenis_pengembangan.id');
 $query = $this->db->get();
 return $query->result();
}

}

/* End of file model_keuangan.php */
/* Location: ./application/model/model_keuangan.php */
