<?php
class Order_model extends CI_Model
{
    public function get_all()
    {
        return $this->db->get("tb_siswa");
    }
 
    public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }
}
