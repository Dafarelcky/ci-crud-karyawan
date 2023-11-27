<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model{
    protected $table = 'users';
    protected $allowedFields = ['user_name','user_email','user_password','user_created_at'];

    public function getUser($cari)
    {
        $builder = $this->db->table('users');
        $builder->select('*')->like('users.user_name',$cari);
        return $builder->get();
    }
}