<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\QRISModel;
 
class QRIS extends BaseController
{
    public function index()
    {
     $QR = new QRISModel();
     $data = $QR->getQris();
     return view('QRIS/Index', compact('data'));
     
    }
    
    public function RunWAGW()
    {
     pclose(popen('start /B cmd /C "D://Website2020/WAGW-CI/public/wagw-engine/app/w-agent.exe >NUL 2>NUL"', 'r'));
     return view('QRIS/Index');
     
    }  
}
