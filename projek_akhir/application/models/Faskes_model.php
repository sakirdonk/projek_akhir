<?php
class Faskes_model extends CI_Model
{
    private $table = 'faskes';

    public function getAll()
    {
        //Select * from mahasiswa;
        $sql = 'select faskes.id, faskes.nama as nama_faskes, faskes.alamat, faskes.latlong, jenis_faskes.nama as jenis_faskes, faskes.deskripsi, 
        faskes.skor_rating as skor_rating, faskes.foto1, faskes.foto2, faskes.foto3, kecamatan.nama as kecamatan, 
        faskes.website, faskes.jumlah_dokter, faskes.jumlah_pegawai from faskes left join 
        kecamatan on faskes.kecamatan_id = kecamatan.id left join jenis_faskes on faskes.jenis_id = jenis_faskes.id;';
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function findById($id)
    {
        $sql = 'select faskes.id, faskes.nama as nama_faskes, faskes.alamat, faskes.latlong, jenis_faskes.nama as jenis_faskes, faskes.deskripsi, 
        faskes.skor_rating as skor_rating, faskes.foto1, faskes.foto2, faskes.foto3, kecamatan.nama as kecamatan, 
        faskes.website, faskes.jumlah_dokter, faskes.jumlah_pegawai from faskes left join 
        kecamatan on faskes.kecamatan_id = kecamatan.id left join jenis_faskes on faskes.jenis_id = jenis_faskes.id where faskes.id=?;';
        $query = $this->db->query($sql,$id);
        return $query->row();
    }

    public function save($data)
    {
        $sql = 'insert into faskes (id, nama, alamat, latlong, jenis_id, deskripsi, skor_rating, kecamatan_id, website, jumlah_dokter, jumlah_pegawai) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $this->db->query($sql,$data);
    }

    public function update($data)
    {
        $sql = 'update faskes set nama=?, alamat=?, latlong=?, jenis_id=?, deskripsi=?, skor_rating=?, kecamatan_id=?, website=?, jumlah_dokter=?, jumlah_pegawai=? where id=?';
        $this->db->query($sql,$data);
    }

    public function countID()
    {
        $sql = 'select count(id) as jumlah from faskes';
        $query = $this->db->query($sql);
        return $query->row();
    }

    public function delete($data)
    {
        $sql = 'delete from faskes where id=?';
        $this->db->query($sql, array($data));
    }

    public function uploadFoto1($data)
    {
        $sql = 'update faskes set foto1=? where id=?';
        $this->db->query($sql,$data);
    }

    public function uploadFoto2($data)
    {
        $sql = 'update faskes set foto2=? where id=?';
        $this->db->query($sql,$data);
    }

    public function uploadFoto3($data)
    {
        $sql = 'update faskes set foto3=? where id=?';
        $this->db->query($sql,$data);
    }

    public function getRS()
    {
        //Select * from mahasiswa;
        $sql = 'select faskes.id, faskes.nama as nama_faskes, faskes.alamat, faskes.latlong, jenis_faskes.nama as jenis_faskes, faskes.deskripsi, 
        faskes.skor_rating as skor_rating, faskes.foto1, faskes.foto2, faskes.foto3, kecamatan.nama as kecamatan, 
        faskes.website, faskes.jumlah_dokter, faskes.jumlah_pegawai from faskes left join 
        kecamatan on faskes.kecamatan_id = kecamatan.id left join jenis_faskes on faskes.jenis_id = jenis_faskes.id where faskes.jenis_id=1';
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getKG()
    {
        //Select * from mahasiswa;
        $sql = 'select faskes.id, faskes.nama as nama_faskes, faskes.alamat, faskes.latlong, jenis_faskes.nama as jenis_faskes, faskes.deskripsi, 
        faskes.skor_rating as skor_rating, faskes.foto1, faskes.foto2, faskes.foto3, kecamatan.nama as kecamatan, 
        faskes.website, faskes.jumlah_dokter, faskes.jumlah_pegawai from faskes left join 
        kecamatan on faskes.kecamatan_id = kecamatan.id left join jenis_faskes on faskes.jenis_id = jenis_faskes.id where faskes.jenis_id=2';
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getKU()
    {
        //Select * from mahasiswa;
        $sql = 'select faskes.id, faskes.nama as nama_faskes, faskes.alamat, faskes.latlong, jenis_faskes.nama as jenis_faskes, faskes.deskripsi, 
        faskes.skor_rating as skor_rating, faskes.foto1, faskes.foto2, faskes.foto3, kecamatan.nama as kecamatan, 
        faskes.website, faskes.jumlah_dokter, faskes.jumlah_pegawai from faskes left join 
        kecamatan on faskes.kecamatan_id = kecamatan.id left join jenis_faskes on faskes.jenis_id = jenis_faskes.id where faskes.jenis_id=3';
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getPS()
    {
        //Select * from mahasiswa;
        $sql = 'select faskes.id, faskes.nama as nama_faskes, faskes.alamat, faskes.latlong, jenis_faskes.nama as jenis_faskes, faskes.deskripsi, 
        faskes.skor_rating as skor_rating, faskes.foto1, faskes.foto2, faskes.foto3, kecamatan.nama as kecamatan, 
        faskes.website, faskes.jumlah_dokter, faskes.jumlah_pegawai from faskes left join 
        kecamatan on faskes.kecamatan_id = kecamatan.id left join jenis_faskes on faskes.jenis_id = jenis_faskes.id where faskes.jenis_id=4';
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getAP()
    {
        //Select * from mahasiswa;
        $sql = 'select faskes.id, faskes.nama as nama_faskes, faskes.alamat, faskes.latlong, jenis_faskes.nama as jenis_faskes, faskes.deskripsi, 
        faskes.skor_rating as skor_rating, faskes.foto1, faskes.foto2, faskes.foto3, kecamatan.nama as kecamatan, 
        faskes.website, faskes.jumlah_dokter, faskes.jumlah_pegawai from faskes left join 
        kecamatan on faskes.kecamatan_id = kecamatan.id left join jenis_faskes on faskes.jenis_id = jenis_faskes.id where faskes.jenis_id=5';
        $query = $this->db->query($sql);
        return $query->result();
    }
}