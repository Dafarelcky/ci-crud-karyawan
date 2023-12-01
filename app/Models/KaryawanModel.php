<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $table = "karyawan";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'nama', 'umur', 'divisi'];

    public function getkaryawan()
    {
        $builder = $this->db->table('karyawan');
        $builder->select('*');
        return $builder->get();
    }

    public function getkaryawan1($cari)
    {
        $builder = $this->db->table('karyawan');
        $builder->select('*')->like('karyawan.nama',$cari);
        return $builder->get();
    }

    public function savekaryawan($data){
        $builder = $this->db->table('karyawan')->insert($data);
        return $builder;
    }

    public function updatekaryawan($data, $id)
    {
        $query = $this->db->table('karyawan')->update($data, array('id' => $id));
        return $query;
    }

    public function deletekaryawan($id)
    {
        $query = $this->db->table('karyawan')->delete(array('id' => $id));
        return $query;
    } 
}