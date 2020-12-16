<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AuthModel;

class Login extends BaseController
{    
  public function index()
  {
    return view('Auth/Login');
  }
  
  public function Auth()
  {
        $session = session();
        $model = new AuthModel();
        $username = $this->request->getVar('username');
        //$username = $username;
        $password = $this->request->getVar('password');
        //$password = $password;
        $data = $model->where('wa_user', $username)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'sesid'       => $data['id'],
                    'sesname'     => $data['nama'],
                    'sesuser'     => $data['wa_user'],
                    'seswano'     => $data['wa_no'],
                    'sesmail'     => $data['email'],
                    'sesiakses'     => $data['levelakses'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('../Login/PeriksaSesi');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('../Login');
            }
        }else{
            $session->setFlashdata('msg', 'Username not Found');
            return redirect()->to('../Login');
        }
  } 
  
  public function PeriksaSesi()
  {
      $session = session();
      $levelakses = $session->get('sesiakses');
      
      //echo $levelakses; 

      if($levelakses == "Admin"){
         return redirect()->to('../Admin');
      }elseif($levelakses == "Users"){
         return redirect()->to('../Dashboard/Member');
      }else{
        return redirect()->to('/Login');
      }
  }
  
  public function Keluar()
  {
    $session = session();
    $session->destroy();
    return redirect()->to('../Login');
  }
}