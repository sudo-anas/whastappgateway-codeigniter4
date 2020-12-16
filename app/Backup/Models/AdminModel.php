<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class AdminModel extends Model
{
     
    public function getUsers()
    {   
        //$db = \Config\Database::connect();
        $builder = $this->db->table('tbl_users');
        return $builder->get();
    }
 
   
}