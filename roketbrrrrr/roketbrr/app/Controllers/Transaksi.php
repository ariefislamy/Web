<?php namespace App\Controllers;

use TCPDF;

class Transaksi extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    
    }

    public function view()
    {
        $id = $this->request->uri->getSegment(3);

        $transaksiModel = new \App\Models\TransaksiModel();
                
        $transaksi = $transaksiModel->select('*, transaksi.id AS id_trans')->join('layanan', 'layanan.id=transaksi.id_layanan')
                     ->join('user', 'user.id=transaksi.id_pembeli')
                     ->where('transaksi.id', $id)
                     ->first();

        return view('transaksi/view',[
            'transaksi'=>$transaksi,
        ]);
    }

    public function index(){
        $transaksiModel = new \App\Models\TransaksiModel();
		$model = $transaksiModel->findAll();
		return view('transaksi/index',[
			'model' => $model,
		]);
	}

    public function invoice(){
        $id = $this->request->uri->getSegment(3);

        $transaksiModel = new \App\Models\TransaksiModel();
        $transaksi = $transaksiModel->find($id);

        $userModel = new \App\Models\UserModel();
		$pembeli = $userModel->find($transaksi->id_pembeli);

		$layananModel = new \App\Models\LayananModel();
        $layanan = $layananModel->find($transaksi->id_layanan);
        
        $html = view('transaksi/invoice',[
            'transaksi'=>$transaksi,
            'pembeli'=>$pembeli,
            'layanan'=>$layanan,
        ]);

        $pdf = new TCPDF('L', PDF_UNIT, 'A5', true, 'UTF-8', false);

        $pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Admin');
		$pdf->SetTitle('Invoice');
        $pdf->SetSubject('Invoice');
        
        $pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);

        $pdf->addPage();
        
        // output the HTML content
		$pdf->writeHTML($html, true, false, true, false, '');
		//line ini penting
		$this->response->setContentType('application/pdf');
		//Close and output PDF document
		$pdf->Output('invoice.pdf', 'I');
    }


    public function konfirmasi()
    {

        $id = $this->request->uri->getSegment(3);

    	$transaksiModel = new \App\Models\TransaksiModel();

        $transaksi = $transaksiModel->find($id);
        
        unset($transaksi->status);
        if (isset($transaksi->status)){
            $transaksi->status = 1;
        };
        
        $transaksiModel->save($transaksi);
	

	    $segment = ['Transaksi', 'index', $id];

    	return redirect()->to(site_url($segment));
    }
}