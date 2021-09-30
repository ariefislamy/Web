<?php namespace App\Controllers;

class Layanan extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        $layananModel = new \App\Models\LayananModel();
        $layanans = $layananModel->findAll();

        return view('layanan/index', [
            'layanans'=>$layanans,
        ]);
    }

    public function view()
    {
        $id = $this->request->uri->getSegment(3);

        $layananModel = new \App\Models\LayananModel();

        $layanan = $layananModel->find($id);

        return view('layanan/view.php',[
            'layanan' => $layanan,
        ]);
    }

    public function create()
    {
        if($this->request->getPost()){
            //jika ada data yang dipost
            $data = $this->request->getPost();
            $this->validation->run($data, 'layanan');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                //simpan datanya
                $layananModel = new \App\Models\LayananModel();

                $layanan = new \App\Entities\Layanan();

                $layanan->fill($data);
                $layanan->gambar = $this->request->getFile('gambar');
                $layanan->created_by = $this->session->get('id');
                $layanan->created_date = date("Y-m-d H:i:s");

                $layananModel->save($layanan);

                $id = $layananModel->insertID();

                $segments = ['layanan', 'view', $id];
                //barang/view/$id
                return redirect()->to(site_url($segments));
            }

        }
        return view('layanan/create');
    }

    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $layananModel = new \App\Models\LayananModel();

        $layanan = $layananModel->find($id);

        if($this->request->getPost()){
            $data = $this->request->getPost();
            $this->validation->run($data, 'layananupdate');
            $errors = $this->validation->getErrors();

            if(!$errors){
                $b = new \App\Entities\Layanan();
                $b->id = $id;
                $b->fill($data);

                if($this->request->getFile('gambar')->isValid()){
                    $b->gambar = $this->request->getFile('gambar');
                }

                $b->updated_by = $this->session->get('id');
                $b->updated_date = date("Y-m-d H:i:s");

                $layananModel->save($b);

                $segments = ['Layanan','view',$id];

                return redirect()->to(site_url($segments));
            }
        }

        return view('layanan/update',[
            'layanan' => $layanan,
        ]);
    }

    public function delete()
    {
        $id = $this->request->uri->getSegments(3);

        $modelLayanan = new \App\Models\LayananModel();
        $delete = $modelLayanan->delete($id);

        return redirect()->to(site_url('layanan/index'));
    }
}