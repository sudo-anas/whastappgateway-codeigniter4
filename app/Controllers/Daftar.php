<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AuthModel;

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
            'user'      => 'required|min_length[3]|max_length[20]|is_unique[web_user.wa_user]',
            'mail'      => 'required|min_length[6]|max_length[50]|valid_email|is_unique[web_user.email]',
            'pass'      => 'required|min_length[6]|max_length[200]',
            'nohp'      => 'required|min_length[13]|max_length[30]|is_unique[web_user.wa_no]',
            'confpass'  => 'matches[pass]'
        ];
         
        if($this->validate($rules)){
            $model = new AuthModel();
            $data = [
                'nama'     => $this->request->getVar('nama'),
                'wa_user'     => $this->request->getVar('user'),
                'wa_no'     => $this->request->getVar('nohp'),
                'password' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
                'email'    => $this->request->getVar('mail'),
                'isonline'    => 'FALSE',
                'status'    => 'Y',
                'levelakses'    => 'Admin' // Jika online ganti ke Users sebagai default role
            ];
            $model->save($data);
            return redirect()->to('../Login');
        }else{
            $data['validation'] = $this->validator;
            echo view('Auth/Daftar', $data);
        }
  }
}