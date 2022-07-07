<?php
class User_model extends CI_Model
{

    public function getAll()
    {
        $query = $this->db->get('users');
        return $query->result();
    }
    
    public function findById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        return $query->row();
    }

    public function update($data)
    {
        $sql = 'update users set username=?, password=md5(?), email=?, role=? where id=?';
        $this->db->query($sql, $data);
    }

    public function save($data)
    {
        $sql = 'insert into users (id, username, password, email, created_at, last_login, status, role) values(?, ?, MD5(?), ?, now(), now(), 1, ?)';
        $this->db->query($sql,$data);
    }
    
    public function countID()
    {
        $sql = 'select count(id) as jumlah from users';
        $query = $this->db->query($sql);
        return $query->row();
    }

    public function delete($id)
    {
        $sql = 'delete from users where id=?';
        $query = $this->db->query($sql, array($id));
    }

    public function login($user, $pass)
    {
        $sql = 'select id, username, password, email, DATE(created_at) as date, role from users where username=? and password=MD5(?)';
        $data = [$user, $pass];
        $query = $this->db->query($sql, $data);
        return $query->row();
    }
    
    public function register($data)
    {
        $sql = 'insert into users (id, username, password, email, created_at, last_login, status, role) values(default, ?, MD5(?), ?, now(), now(), 1, ?)';
        $this->db->query($sql,$data);
    }

    public function login2($user, $pass, $email, $role)
    {
        $sql = 'select id, username, password, email, DATE(created_at) as date, role from users where username=? and password=MD5(?) and email=? and role=?';
        $data = [$user, $pass, $email, $role];
        $query = $this->db->query($sql, $data);
        return $query->row();
    }
}
