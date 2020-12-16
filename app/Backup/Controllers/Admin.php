<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\WhatsappModel;
use App\Models\AdminModel;
 
class Admin extends BaseController
{
    public function index()
    {
        //return redirect()->to('../Auth/PeriksaSesi');       
        $WhatsappModel = new WhatsappModel();
        //$data['tbl_users']  = $WhatsappModel->getBot()->getResult();
        $data['tbl_whatsapp']  = $WhatsappModel->getBot()->getResult();
        echo view('Dashboard/Admin/Index', $data);
    } 
    
    public function Users()
    {
        $AdminModel = new AdminModel();
        $data['tbl_users']  = $AdminModel->getUsers()->getResult();
        echo view('Dashboard/Admin/Users', $data);  
    }
    
    public function WhatsappKontak()
    {
        $WhatsappModel = new WhatsappModel();
        $data['tbl_whatsapp']  = $WhatsappModel->getBot()->getResult();
        echo view('Dashboard/Admin/WhatsappKontak', $data);
        
    }
}
