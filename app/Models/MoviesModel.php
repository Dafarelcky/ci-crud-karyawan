<?php

namespace App\Models;

use CodeIgniter\Model;

class MoviesModel extends Model
{
    protected $table = "movies";
  //  protected $primaryKey = "kode_departemen";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['title', 'description', 'release_date', 'duration_minutes','harga', 'cover_image'];

    public function getMovies()
    {
        $builder = $this->db->table('movies');
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
        $builder = $this->db->table('Movies')->insert($data);
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