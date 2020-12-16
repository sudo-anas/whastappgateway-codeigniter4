<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class WhatsappModel extends Model
{
     
    public function getBot()
    {
        $builder = $this->db->table('tbl_whatsapp');
        return $builder->get();
    }
    
    public function getDetail()
    {
        $builder = $this->db->table('tbl_whatsapp');
        $builder->select('*');
        $builder->join('tbl_users', 'wid = owner','');
        return $builder->get();
    }
 
   
}