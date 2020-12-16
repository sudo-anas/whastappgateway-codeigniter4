<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;

class Daftar extends BaseController
{    
  public function index()
  {
    //return view('Auth/Daftar');
    helper(['form']);
    $data = [];
    echo view('Auth/Daftar', $data);
  }
  
  public function BuatID()
  {
       //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'nama'      => 'required|min_length[3]|max_length[50]',
            'user'      => 'required|min_length[3]|max_length[20]|is_unique[tbl_users.user]',
            'mail'      => 'required|min_length[6]|max_length[50]|valid_email|is_unique[tbl_users.mail]',
            'pass'      => 'required|min_length[6]|max_length[200]',
            'confpass'  => 'matches[pass]'
        ];
         
        if($this->validate($rules)){
            $model = new AuthModel();
            $data = [
                'nama'     => $this->request->getVar('nama'),
                'user'     => $this->request->getVar('user'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
                'mail'    => $this->request->getVar('mail'),
                'isonline'    => 'OFFLINE',
                'status'    => 'N',
                'levelakses'    => 'Users' // Jika online ganti ke Users sebagai default role
            ];
            $model->save($data);
            return redirect()->to('../Login');
        }else{
            $data['validation'] = $this->validator;
            echo view('Auth/Daftar', $data);
        }
  }
}