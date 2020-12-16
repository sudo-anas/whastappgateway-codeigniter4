<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class QRISModel extends Model{
    protected $table = 'tbl_waconfig';   
    
    public function getQris()
    {
        return $this->findAll();
    }
}