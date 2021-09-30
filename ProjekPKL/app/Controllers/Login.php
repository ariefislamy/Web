<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login');
        
    } 
 
    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $name = $this->request->getVar('name');
        $password = $this->request->getVar('password');
        $data = $model->where('user_name', $name)->first();
        if($data){
            $pass = $model->where('user_password',$password);
            if($pass){
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_name'     => $data['user_name'],
                    'nama_lengkap'  => $data['nama_lengkap'],
                    'kapal'         => 1,
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to(base_url('/Home')); 
            }
            else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to(base_url('/login')); 
            }
        }
        else{
            $session->setFlashdata('msg', 'Username not Found');
            return redirect()->to(base_url('/login'));
        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/login'));
    }
} 