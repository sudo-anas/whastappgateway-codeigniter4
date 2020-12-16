<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class WidgetModel extends Model
{
     
    public function WidgetUsers()
    {
        $builder = $this->db->table('tbl_users');
        return $builder->countAllResults();
    } 
    
    public function WidgetWhatsappNum()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_whatsapp'); 
        $WidgetWANum = $builder->countAllResults();
        return $WidgetWANum; 
    }
 
   
}