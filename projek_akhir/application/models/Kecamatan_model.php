<?php
class Kecamatan_model extends CI_Model
{

    public function getAll()
    {
        $query = $this->db->get('kecamatan');
        return $query->result();
    }

    public function save($data)
    {
        $sql = 'insert into kecamatan values(default, ?)';
        $this->db->query($sql, $data);
    }
}
