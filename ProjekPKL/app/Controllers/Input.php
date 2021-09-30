<?php

namespace App\Controllers;

use App\Models\SuratModel;


class Input extends BaseController
{

  public function __construct() {
 
    // Mendeklarasikan class ProductModel menggunakan $this->product
    $this->surat = new SuratModel();
    /* Catatan:
    Apa yang ada di dalam function construct ini nantinya bisa digunakan
    pada function di dalam class Product 
    */
    }


    public function index()
    {
      $who = session();
      $data['user'] = $who->get();
		  echo view('/navbar',$data);
		  echo view('/sidebar',$data);
		  echo view('Dashboard/input',$data);
    } 


    public function store()
    {
    $jumlah_kapal = $this->request->getPost('jumlah_kapal');


    if (($jumlah_kapal) != 1){
    $nama_kapal = $this->request->getPost('nama_kapal1');
    $nama_kapal2 = $this->request->getPost('nama_kapal2');
    $bendera = $this->request->getPost('bendera2');
    $gt1 = $this->request->getPost('gt1');
    $gt2 = $this->request->getPost('gt2');
    $loa1 = $this->request->getPost('loa1');
    $loa2 = $this->request->getPost('loa2');
    $tanggal_tiba = $this->request->getPost('tanggal_tiba');
    $bulan_tiba = $this->request->getPost('bulan_tiba');
    $tahun_tiba = $this->request->getPost('tahun_tiba');
    $pbm = $this->request->getPost('pbm');
    $jpt = $this->request->getPost('jpt');
    $agen = $this->request->getPost('agen');
    $asal = $this->request->getPost('asal');
    $tujuan = $this->request->getPost('tujuan');
    $nama_barang = $this->request->getPost('nama_barang');
    $jenis_barang = $this->request->getPost('jenis_barang');
    $bongkar = $this->request->getPost('bongkar');
    $muat = $this->request->getPost('muat');
    $dermaga = $this->request->getPost('dermaga');
  }
  else{
    $nama_kapal = $this->request->getPost('nama_kapal');
    $nama_kapal2 = "-";
    $bendera = $this->request->getPost('bendera1');
    $gt1 = $this->request->getPost('gt');
    $gt2 = 0;
    $loa1 = $this->request->getPost('loa');
    $loa2 = 0;
    $tanggal_tiba = $this->request->getPost('tanggal_tiba');
    $bulan_tiba = $this->request->getPost('bulan_tiba');
    $tahun_tiba = $this->request->getPost('tahun_tiba');
    $pbm = $this->request->getPost('pbm');
    $jpt = $this->request->getPost('jpt');
    $agen = $this->request->getPost('agen');
    $asal = $this->request->getPost('asal');
    $tujuan = $this->request->getPost('tujuan');
    $nama_barang = $this->request->getPost('nama_barang');
    $jenis_barang = $this->request->getPost('jenis_barang');
    $bongkar = $this->request->getPost('bongkar');
    $muat = $this->request->getPost('muat');
    $dermaga = $this->request->getPost('dermaga');
  }
    $data = [
    'nama_kapal' => $nama_kapal,
    'nama_kapal2' => $nama_kapal2,
    'jumlah_kapal' => $jumlah_kapal,
    'bendera' => $bendera,
    'gt1' => $gt1,
    'gt2' => $gt2,
    'loa1' => $loa1,
    'loa2' => $loa2,
    'tanggal_tiba' => $tanggal_tiba,
    'bulan_tiba' => $bulan_tiba,
    'tahun_tiba' => $tahun_tiba,
    'pbm' => $pbm,
    'jpt' => $jpt,
    'agen' => $agen,
    'asal' => $asal,
    'tujuan' => $tujuan,
    'nama_barang' => $nama_barang,
    'jenis_barang' => $jenis_barang,
    'bongkar' => $bongkar,
    'muat' => $muat,
    'dermaga' => $dermaga,
    ];
 
    /* 
    Membuat variabel simpan yang isinya merupakan memanggil function 
    insert_product dan membawa parameter data 
    */
    $simpan = $this->surat->insert_surat($data);
 
    // Jika simpan berhasil, maka ...
    if($simpan)
        {
        // Deklarasikan session flashdata dengan tipe success
        session()->setFlashdata('success', 'Created product successfully');
        // Redirect halaman ke product
        return redirect()->to(base_url('/Data')); 
        }
    }

    public function edit($id)
    {
      $who = session();
      $data['user'] = $who->get();
      $data['surat'] = $this->surat->getSurat($id);
      echo view('/navbar',$data);
      echo view('/sidebar',$data);
      echo view('Dashboard/edit', $data);    
    }

    public function update($id)
    {
    // Mengambil value dari form dengan method POST
    $jumlah_kapal = $this->request->getPost('jumlah_kapal');
    if ( ($jumlah_kapal) == 1 ) {
      $nama_kapal = $this->request->getPost('nama_kapal');
      $nama_kapal2 ="-";
      $bendera = $this->request->getPost('bendera1');
      $gt1 = $this->request->getPost('gt');
      $gt2 = 0;
      $loa1 = $this->request->getPost('loa');
      $loa2 = 0;
    }else {
      $nama_kapal = $this->request->getPost('nama_kapal1');
      $nama_kapal2 = $this->request->getPost('nama_kapal2');
      $bendera = $this->request->getPost('bendera2');
      $gt1 = $this->request->getPost('gt1');
      $gt2 = $this->request->getPost('gt2');
      $loa1 = $this->request->getPost('loa1');
      $loa2 = $this->request->getPost('loa2');
    }
    $tanggal_tiba = $this->request->getPost('tanggal_tiba');
    $bulan_tiba = $this->request->getPost('bulan_tiba');
    $tahun_tiba = $this->request->getPost('tahun_tiba');
    $pbm = $this->request->getPost('pbm');
    $jpt = $this->request->getPost('jpt');
    $agen = $this->request->getPost('agen');
    $asal = $this->request->getPost('asal');
    $tujuan = $this->request->getPost('tujuan');
    $nama_barang = $this->request->getPost('nama_barang');
    $jenis_barang = $this->request->getPost('jenis_barang');
    $bongkar = $this->request->getPost('bongkar');
    $muat = $this->request->getPost('muat');
    $dermaga = $this->request->getPost('dermaga');
    $perusahaan = $this->request->getPost('perusahaan');
    $jumlah_buruh = $this->request->getPost('jumlah_buruh');
    $jumlah_gang = $this->request->getPost('jumlah_gang');
    $sistem = $this->request->getPost('sistem');
    $jenis_kegiatan = $this->request->getPost('jenis_kegiatan');
    $pengirim = $this->request->getPost('pengirim');
    $penerima = $this->request->getPost('penerima');
    $cara_kerja = $this->request->getPost('cara_kerja');
    $tanggal_mulai = $this->request->getPost('tanggal_mulai');
    $bulan_mulai = $this->request->getPost('bulan_mulai');
    $tahun_mulai = $this->request->getPost('tahun_mulai');
    $tanggal_selesai = $this->request->getPost('tanggal_selesai');
    $bulan_selesai = $this->request->getPost('bulan_selesai');
    $tahun_selesai = $this->request->getPost('tahun_selesai');
    $keterangan = $this->request->getPost('keterangan');
    $imo = $this->request->getPost('imo');
    $tanggal_etd = $this->request->getPost('tanggal_etd');
    $bulan_etd = $this->request->getPost('bulan_etd');
    $tahun_etd = $this->request->getPost('tahun_etd');
    $owner = $this->request->getPost('owner');
    $trayek = $this->request->getPost('trayek');
    $nama_nahkoda = $this->request->getPost('nama_nahkoda');
    
    // Membuat array collection yang disiapkan untuk insert ke table
    $data = [
        'nama_kapal' => $nama_kapal,
        'nama_kapal2' => $nama_kapal2,
        'jumlah_kapal' => $jumlah_kapal,
        'bendera' => $bendera,
        'gt1' => $gt1,
        'gt2' => $gt2,
        'loa1' => $loa1,
        'loa2' => $loa2,
        'tanggal_tiba' => $tanggal_tiba,
        'bulan_tiba' => $bulan_tiba,
        'tahun_tiba' => $tahun_tiba,
        'pbm' => $pbm,
        'jpt' => $jpt,
        'agen' => $agen,
        'asal' => $asal,
        'tujuan' => $tujuan,
        'nama_barang' => $nama_barang,
        'jenis_barang' => $jenis_barang,
        'bongkar' => $bongkar,
        'muat' => $muat,
        'dermaga' => $dermaga,
        'perusahaan' => $perusahaan,
        'jumlah_buruh' => $jumlah_buruh,
        'jumlah_gang' => $jumlah_gang,
        'sistem' => $sistem,
        'jenis_kegiatan' => $jenis_kegiatan,
        'pengirim' => $pengirim,
        'penerima' => $penerima,
        'cara_kerja' => $cara_kerja,
        'tanggal_mulai' => $tanggal_mulai,
        'bulan_mulai' => $bulan_mulai,
        'tahun_mulai' => $tahun_mulai,
        'tanggal_selesai' => $tanggal_selesai,
        'bulan_selesai' => $bulan_selesai,
        'tahun_selesai' => $tahun_selesai,
        'keterangan' => $keterangan,
        'imo' => $imo,
        'tanggal_etd' => $tanggal_etd,
        'bulan_etd' => $bulan_etd,
        'tahun_etd' => $tahun_etd,
        'owner' => $owner,
        'trayek' => $trayek,
        'nama_nahkoda' => $nama_nahkoda,
    ];
 
    $ubah = $this->surat->update_surat($data, $id);
     
    // Jika berhasil melakukan ubah
    if($ubah)
    {
        // Deklarasikan session flashdata dengan tipe info
        session()->setFlashdata('info', 'Updated product successfully');
        // Redirect ke halaman product
        return redirect()->to(base_url('/Data')); 
    }    
  }

  public function delete($id)
    {
    // Memanggil function delete_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus
    $hapus = $this->surat->delete_surat($id);
 
    // Jika berhasil melakukan hapus
    if($hapus)
      {
            // Deklarasikan session flashdata dengan tipe warning
        session()->setFlashdata('warning', 'Deleted product successfully');
        // Redirect ke halaman product
        return redirect()->to(base_url('/Data'));
      }
    }


    public function valid($id)
    {
    // Mengambil value dari form dengan method POST
    $session = session();
    $status = 'valid';
    $validator = $session->get('nama_lengkap');

    
    // Membuat array collection yang disiapkan untuk insert ke table
    $data = [
        'status' => $status,
        'validator' => $validator,

    ];
 
    $ubah = $this->surat->update_surat($data, $id);
     
    // Jika berhasil melakukan ubah
    if($ubah)
    {
        // Deklarasikan session flashdata dengan tipe info
        session()->setFlashdata('info', 'Updated product successfully');
        // Redirect ke halaman product
        return redirect()->to(base_url('/Data')); 
    }    
  }


}