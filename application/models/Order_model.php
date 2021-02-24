<?php
class Order_model extends CI_Model
{
    public function get_all()
    {
        return $this->db->get("tb_siswa");
    }
	
}
?>
