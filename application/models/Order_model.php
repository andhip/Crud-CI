<?php
class Order_model extends CI_Model
{
    public function get_all()
    {
        return $this->db->query('SELECT * FROM tb_siswa ORDER BY noinduk');
    }
	
}
