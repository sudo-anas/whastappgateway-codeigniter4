<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class AdminModel extends Model
{
     
    public function getWebUser()
    {   
        //$db = \Config\Database::connect();
        $builder = $this->db->table('web_user');
        return $builder->get();
    }
    
    public function getDataByID()
    {
      $session = session();
      $waID = $session->get('sesid');
      $waUSER = $session->get('sesuser');
      $waNO = $session->get('seswano');
      $db = \Config\Database::connect();
      $TestQueryModal = $db->query("SELECT * FROM web_user WHERE id='".$waID."' AND wa_no='".$waNO."'");
      //$ResultQueryModal = $TestQueryModal->getResult(); 
      return $TestQueryModal;
    }
 
   
}