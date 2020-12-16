<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModel;

class Auth extends BaseController
{
	public function index()
	{
		helper(['form']);
		return view('Login');
	}  
  
  public function MasukAdmin()
	{
		helper(['form']);
		return view('Auth/Admin/Masuk');
	}  
  
  public function SesiAdmin()
	{
		    $session = session();
        $model = new AdminModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('wa_user', $username)->first();
        if($data){
            $pass = $data['wa_pass'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'sesid'       => $data['wa_id'],
                    'sesname'     => $data['wa_name'],
                    'sesuser'     => $data['wa_user'],
                    'sesmail'     => $data['wa_mail'],
                    'sesilogin'     => 'WAGWADMIN2021',
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('../Dashboard/Admin');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('../Auth/MasukAdmin');
            }
        }else{
            $session->setFlashdata('msg', 'Username not Found');
            return redirect()->to('../Auth/MasukAdmin');
        }
	} 
  
  public function TutupSesiAdmin()
	{
		$session = session();
    $session->destroy();
    return redirect()->to('../Auth/MasukAdmin');
	} 
  
  public function BuatIDAdmin()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('Auth/Admin/Daftar', $data);
    }    
    
    public function BuatIDAdminPanel()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'nama'          => 'required|min_length[3]|max_length[20]',
            'user'          => 'required|min_length[3]|max_length[20]',
            'mail'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'pass'      => 'required|min_length[6]|max_length[200]',
            'confpass'  => 'matches[pass]'
        ];
         
        if($this->validate($rules)){
            $model = new AdminModel();
            $data = [
                'wa_name'     => $this->request->getVar('nama'),
                'wa_user'     => $this->request->getVar('user'),
                'wa_mail'    => $this->request->getVar('mail'),
                'wa_pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('../Auth/MasukAdmin');
        }else{
            $data['validation'] = $this->validator;
            echo view('Auth/Admin/Daftar', $data);
        }
         
    }  
    
    public function PeriksaSesi()
    {
      $session = session();
      $WAGW = $session->get('sesilogin');
      if($WAGW == "WAGWADMIN2021"){
         return redirect()->to('../Dashboard/Admin');
      }elseif($WAGW == "WAGWMEMBER2021"){
         return redirect()->to('../Dashboard/Member');
      }
     
    }
 
}
