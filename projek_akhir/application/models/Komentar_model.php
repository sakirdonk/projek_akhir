<?php
class Komentar_model extends CI_Model
{
    private $table = 'komentar';

    public function getAll()
    {
        $sql = 'select komentar.id, faskes.nama as nama_faskes, nilai_rating.nama as rating, count(komentar.isi) 
        as total_komentar from komentar left join faskes on komentar.faskes_id = faskes.id left join users on 
        komentar.users_id = users.id left join nilai_rating on komentar.nilai_rating_id = nilai_rating.id  group by nama_faskes order by id';
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    public function findById($id)
    {
        $sql = 'select komentar.id, users.username as nama_user, komentar.isi, komentar.faskes_id as faskes_id, faskes.nama as nama_faskes, 
        komentar.tanggal, nilai_rating.nama as rating from komentar left join nilai_rating on 
        komentar.nilai_rating_id = nilai_rating.id left join users on komentar.users_id = users.id left join 
        faskes on komentar.faskes_id = faskes.id where faskes.nama=?;';
        $query = $this->db->query($sql,$id);
        return $query->result();
    }

    public function getById($id)
    {
        $sql = 'select komentar.id, users.username as nama_user, komentar.isi, komentar.faskes_id as faskes_id, faskes.nama as nama_faskes, 
        komentar.tanggal, nilai_rating.nama as rating, komentar.nilai_rating_id as id_rating from komentar left join nilai_rating on 
        komentar.nilai_rating_id = nilai_rating.id left join users on komentar.users_id = users.id left join 
        faskes on komentar.faskes_id = faskes.id where komentar.id=?;';
        $query = $this->db->query($sql,$id);
        return $query->row();
    }

    public function showById($id)
    {
        $sql = 'select komentar.id, users.id as user_id, users.username as nama_user, komentar.isi, komentar.faskes_id, faskes.nama as nama_faskes, 
        komentar.tanggal, nilai_rating.nama as rating from komentar left join nilai_rating on 
        komentar.nilai_rating_id = nilai_rating.id left join users on komentar.users_id = users.id left join 
        faskes on komentar.faskes_id = faskes.id where komentar.faskes_id=? order by id desc;';
        $query = $this->db->query($sql,$id);
        return $query->result();
    }

    public function delete($data)
    {
        $sql = 'delete from komentar where id=?';
        $this->db->query($sql, array($data));
        
    }

    public function edit($data)
    {
        $sql = 'update komentar set isi=?, nilai_rating_id=? where id=?';
        $this->db->query($sql, $data);
    }

    public function create($data)
    {
        $sql = 'insert into komentar(id, tanggal, isi, users_id, faskes_id, nilai_rating_id) values(default, now(), ?, ?, ?, ?)';
        $this->db->query($sql, $data);
    }
}