<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\WhatsappModel;
use App\Models\AdminModel;
 
class Admin extends BaseController
{
    public function index()
    {
        //return redirect()->to('../Auth/PeriksaSesi');       
        $AdminModel = new AdminModel();
        $data['web_user']  = $AdminModel->getWebUser()->getResult();
        echo view('Dashboard/Admin/Index', $data);
    } 
    
    public function Users()
    {
        $AdminModel = new AdminModel();
        $data['web_user']  = $AdminModel->getWebUser()->getResult();
        echo view('Dashboard/Admin/Users', $data);  
    }
    
    public function WhatsappKontak()
    {
        $AdminModel = new AdminModel();
        $data['web_user']  = $AdminModel->getWebUser()->getResult();
        echo view('Dashboard/Admin/WhatsappKontak', $data);
        
    } 
    
    public function MyWhatsapp()
    {
        $AdminModel = new AdminModel();
        $data['web_user']  = $AdminModel->getDataByID()->getResult();
        echo view('Dashboard/Admin/MyWhatsapp', $data);
        
    }
    
    public function OpenAgent(){
      $AgentPath = "D://Website2020/WAGW-CI/public/wagw-engine/app";
      $AgentEXE = "w-agent.exe"; 
      $waitRun = $AgentPath."/".$AgentEXE;
      pclose(popen('start /B cmd /C "'.$waitRun.' >NUL 2>NUL"', 'r'));
    }
    
    public function TestQris()
    {     
      $session = session();
      $waID = $session->get('sesid');
      $waUSER = $session->get('sesuser');
      $waNO = $session->get('seswano'); 
      $now = date('Y-m-d H:i:s') ;
      $db = \Config\Database::connect(); 
      $status00 = "";
      //$query = $db->query("SELECT * FROM web_user WHERE id ='$waID' AND wa_user='$waUSER'");
      $query = $db->query("SELECT 
      (SELECT tmp_val FROM tmp WHERE tmp_cd = 'status000000' ) status, 
      (SELECT tmp_val FROM tmp WHERE tmp_cd = 'wagent' ) wagent, 
      (SELECT qr from web_user where id = '$waID') qr,
      tmp_val app_name FROM tmp	WHERE tmp_cd = 'appname'");
      $results = $query->getResult();
      foreach ($results as $row)
      {
        $status = $row->status;
        $qr = $row->qr;
      }       
      if ($status == '' ) 
      { 
      $status = 'Not Connect' ;
      } 
      $ms = round(microtime(true) * 100);  
      if($qr == ''){
        $qrimg = "/wa-qris/qr000000.jpg?t=".$ms ;        
      }else{
        $qrimg = "http://wa-gw.com/files/about-img.png" ;
      }
      echo "<img name='capture' src='".$qrimg."'/>";
    }
}
