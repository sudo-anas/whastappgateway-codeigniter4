<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class AuthModel extends Model{
    protected $table = 'tbl_users';
    protected $allowedFields = ['nama','user','pass','mail','isonline','status','levelakses','create_dt','last_login'];
}