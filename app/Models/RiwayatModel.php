<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwayatModel extends Model
{
    protected $table = "riwayat";
  //  protected $primaryKey = "kode_departemen";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['harga'];

    public function getRiwayat()
    {
        $builder = $this->db->table('riwayat');
        $builder->select('*');
        return $builder->get();
    }

    public function getMovies1($cari)
    {
        $builder = $this->db->table('movies');
        $builder->select('*')->like('movies.title',$cari);
        return $builder->get();
    }

    public function saveMovies($data){
        $builder = $this->db->table('Movies')->insert($data);
        return $builder;
    }

    public function saveRiwayat($data){
        $builder = $this->db->table('riwayat')->insert($data);
        return $builder;
    }

    public function updateMovies($data, $id)
    {
        $query = $this->db->table('Movies')->update($data, array('id' => $id));
        return $query;
    }

    public function deleteMovies($id)
    {
        $query = $this->db->table('Movies')->delete(array('id' => $id));
        return $query;
    } 
}