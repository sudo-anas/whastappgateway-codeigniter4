<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class AuthModel extends Model{
    protected $table = 'web_user';
    protected $allowedFields = ['nama','wa_user','wa_no','email','password','qr','bot_mode','bot_url','disable_read','isonline','status','levelakses','create_dt','last_login'];
}