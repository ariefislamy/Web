<?php 
 
namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\SuratModel;
use App\Models\UserModel;


 
class Data extends Controller
{

    public function __construct() {
 
        // Mendeklarasikan class ProductModel menggunakan $this->product
        $this->surat = new SuratModel();
        $this->user = new UserModel();
        /* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Product 
        */
    }


    public function index()
    {
        $who = session();
		$data['user'] = $who->get();
        $data['surat'] = $this->surat->getSurat();
        $data['tahun']  = $this->surat->getTahun()->getResult();
        echo view('/navbar',$data);
        echo view('/sidebar',$data);
		echo view('/Dashboard/data',$data);

    } 

    public function search()
    {
        $tahun = $this->request->getVar('tahun');
        return redirect()->to(base_url('/Data/tahun/'.$tahun));
    }

    public function tahun($tahun)
    {
        $who = session();
		$data['user'] = $who->get();
        $data['surat'] = $this->surat->getSurat();
        $data['januari']  = $this->surat->getJan($tahun)->getResult();
        $data['februari']  = $this->surat->getFeb($tahun)->getResult();
        $data['maret']  = $this->surat->getMar($tahun)->getResult();
        $data['april']  = $this->surat->getApr($tahun)->getResult();
        $data['mei']  = $this->surat->getMei($tahun)->getResult();
        $data['juni']  = $this->surat->getJun($tahun)->getResult();
        $data['juli']  = $this->surat->getJul($tahun)->getResult();
        $data['agustus']  = $this->surat->getAgs($tahun)->getResult();
        $data['september']  = $this->surat->getSep($tahun)->getResult();
        $data['oktober']  = $this->surat->getOkt($tahun)->getResult();
        $data['november']  = $this->surat->getNov($tahun)->getResult();
        $data['desember']  = $this->surat->getDes($tahun)->getResult();
        $data['tahun']  = $tahun;
        echo view('/navbar',$data);
        echo view('/sidebar',$data);
		echo view('/Dashboard/tahun',$data);

    } 

    public function view($id)
    {
      $who = session();
      $data['user'] = $who->get();
      $data['surat'] = $this->surat->getSurat($id);
      echo view('/navbar',$data);
      echo view('/sidebar',$data);
      echo view('Dashboard/view',$data);    
    }
}