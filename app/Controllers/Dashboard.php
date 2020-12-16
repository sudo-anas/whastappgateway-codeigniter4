<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class Dashboard extends BaseController
{
    public function index()
    {
        return redirect()->to('../Auth/PeriksaSesi');
    } 
    
    public function Admin()
    {
        $session = session();
        $WAGW = $session->get('sesilogin');
        if($WAGW == "WAGWMEMBER2021"){
         return redirect()->to('../Dashboard/Member');
        }else{
        return view('Dashboard/Admin/Index');
        }
    }
}