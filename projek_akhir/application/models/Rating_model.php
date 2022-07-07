<?php
class Rating_model extends CI_Model
{

    public function getAll()
    {
        $query = $this->db->get('nilai_rating');
        return $query->result();
    }
}
