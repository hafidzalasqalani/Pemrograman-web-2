<?php
class M_mhs extends CI_Model
{
    public function getAll($table)
    {
        return $this->db->get($table);
    }
}
