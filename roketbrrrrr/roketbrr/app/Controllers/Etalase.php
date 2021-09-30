<?php namespace App\Controllers;

class Etalase extends BaseController
{
    
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        $layanan = new \App\Models\LayananModel();
        $model = $layanan->findAll();
        return view('etalase/index', [
            'model' => $model,
        ]);
    }

    public function beli()
    {
        $id = $this->request->uri->getSegment(3);

        $modelLayanan = new \App\Models\LayananModel();

        $model = $modelLayanan->find($id);

        if($this->request->getPost())
		{
			$data = $this->request->getPost();
			$this->validation->run($data, 'transaksi');
			$errors = $this->validation->getErrors();

			if(!$errors){
				$transaksiModel = new \App\Models\TransaksiModel();
                $transaksi = new \App\Entities\Transaksi();
                
                $transaksi->fill($data);
                $transaksi->status = 0;
                $transaksi->created_by = $this->session->get('id');
                $transaksi->created_date = date("Y-m-d H:i:s");

                $transaksiModel->save($transaksi);

                $id = $transaksiModel->insertID();

                $segment = ['transaksi', 'invoice', $id];

                return redirect()->to(site_url($segment));

			}
		}

        return view('etalase/beli',[
            'model'=>$model,
        ]);
    }


}