<?php
class Jenis_Faskes_model extends CI_Model
{

    public function getAll()
    {
        $query = $this->db->get('jenis_faskes');
        return $query->result();
    }
}
