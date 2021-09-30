<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class SuratModel extends Model
{
    protected $table = "surat";

    public function insert_surat($data)
    {
        return $this->db->table($this->table)->insert($data);
    } 

    public function getTahun()
    {
        $builder = $this->db->table('surat');
        $builder->select('*')
                ->where(['tahun_tiba'=> '2021', 'bulan_tiba'=> 'Januari']);
        return $builder->get();
    }


    public function getSurat($id_surat = false)
    {
        if($id_surat === false){
            return $this->table('surat')
                        ->where('status', 'unvalid')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('surat')
                        ->where('id_surat', $id_surat)
                        ->get()
                        ->getRowArray();
        }   
    } 


    public function getJan($tahun)
    {
        $builder = $this->db->table('surat');
        $builder->select('*')
                ->where(['tahun_tiba'=> $tahun, 'bulan_tiba'=> 'Januari']);
        return $builder->get();
    }

    public function getFeb($tahun)
    {
        $builder = $this->db->table('surat');
        $builder->select('*')
                ->where(['tahun_tiba'=> $tahun, 'bulan_tiba'=> 'Februari']);
        return $builder->get();
    }
    public function getMar($tahun)
    {
        $builder = $this->db->table('surat');
        $builder->select('*')
                ->where(['tahun_tiba'=> $tahun, 'bulan_tiba'=> 'Maret']);
        return $builder->get();
    }
    public function getApr($tahun)
    {
        $builder = $this->db->table('surat');
        $builder->select('*')
                ->where(['tahun_tiba'=> $tahun, 'bulan_tiba'=> 'April']);
        return $builder->get();
    }
    public function getMei($tahun)
    {
        $builder = $this->db->table('surat');
        $builder->select('*')
                ->where(['tahun_tiba'=> $tahun, 'bulan_tiba'=> 'Mei']);
        return $builder->get();
    }
    public function getJun($tahun)
    {
        $builder = $this->db->table('surat');
        $builder->select('*')
                ->where(['tahun_tiba'=> $tahun, 'bulan_tiba'=> 'Juni']);
        return $builder->get();
    }
    public function getJul($tahun)
    {
        $builder = $this->db->table('surat');
        $builder->select('*')
                ->where(['tahun_tiba'=> $tahun, 'bulan_tiba'=> 'Juli']);
        return $builder->get();
    }
    public function getAgs($tahun)
    {
        $builder = $this->db->table('surat');
        $builder->select('*')
                ->where(['tahun_tiba'=> $tahun, 'bulan_tiba'=> 'Agustus']);
        return $builder->get();
    }
    public function getSep($tahun)
    {
        $builder = $this->db->table('surat');
        $builder->select('*')
                ->where(['tahun_tiba'=> $tahun, 'bulan_tiba'=> 'September']);
        return $builder->get();
    }
    public function getOkt($tahun)
    {
        $builder = $this->db->table('surat');
        $builder->select('*')
                ->where(['tahun_tiba'=> $tahun, 'bulan_tiba'=> 'Oktober']);
        return $builder->get();
    }
    public function getNov($tahun)
    {
        $builder = $this->db->table('surat');
        $builder->select('*')
                ->where(['tahun_tiba'=> $tahun, 'bulan_tiba'=> 'November']);
        return $builder->get();
    }
    public function getDes($tahun)
    {
        $builder = $this->db->table('surat');
        $builder->select('*')
                ->where(['tahun_tiba'=> $tahun, 'bulan_tiba'=> 'Desember']);
        return $builder->get();
    }

    public function getDetail($id)
    {
        $builder = $this->db->table('surat');
        $builder->select('*')
                ->where(['id_surat'=> $id]);
        return $builder->get();
    }


    public function update_surat($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_surat' => $id]);
    } 

    public function delete_surat($id)
    {
        return $this->db->table($this->table)->delete(['id_surat' => $id]);
    } 


    function get_total_biaya()
    {
        $builder = $this->db->table('surat');
        $builder->select('bongkar')
                ->where(['status'=> 'valid'])
                ;
        return $builder->get();    
    }

    public function get_bongkarbarangsum(){
        return $this->db->query("SELECT sum(bongkar) AS total from surat WHERE status='valid' AND bulan_tiba='Maret' AND tahun_tiba='2021' AND bendera='RI' ");
    }

    
    public function getKapalRi_jan($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='Januari' AND bendera='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalRi_feb($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='Februari' AND bendera='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalRi_mar($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='Maret' AND bendera='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalRi_apr($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='April' AND bendera='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalRi_mei($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='Mei' AND bendera='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalRi_jun($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='Juni' AND bendera='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalRi_jul($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='Juli' AND bendera='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalRi_ags($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='Agustus' AND bendera='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalRi_spt($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='September' AND bendera='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalRi_okt($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='Oktober' AND bendera='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalRi_nov($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='November' AND bendera='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalRi_des($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='Desember' AND bendera='RI' AND tahun_tiba=$tahun ");
    }



    public function getKapalAsing_jan($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='Januari' AND bendera!='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalAsing_feb($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='Februari' AND bendera!='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalAsing_mar($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='Maret' AND bendera!='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalAsing_apr($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='April' AND bendera!='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalAsing_mei($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='Mei' AND bendera!='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalAsing_jun($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='Juni' AND bendera!='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalAsing_jul($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='Juli' AND bendera!='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalAsing_ags($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='Agustus' AND bendera!='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalAsing_spt($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='September' AND bendera!='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalAsing_okt($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='Oktober' AND bendera!='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalAsing_nov($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='November' AND bendera!='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalAsing_des($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bulan_tiba='Desember' AND bendera!='RI' AND tahun_tiba=$tahun ");
    }



    public function getPenumpangRi_jan($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Januari' AND bendera='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangRi_feb($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Februari' AND bendera='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangRi_mar($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Maret' AND bendera='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangRi_apr($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='April' AND bendera='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangRi_mei($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Mei' AND bendera='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangRi_jun($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juni' AND bendera='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangRi_jul($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juli' AND bendera='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangRi_ags($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Agustus' AND bendera='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangRi_spt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='September' AND bendera='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangRi_okt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Oktober' AND bendera='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangRi_nov($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='November' AND bendera='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangRi_des($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Desember' AND bendera='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }


    public function getPenumpangAsing_jan($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Januari' AND bendera!='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangAsing_feb($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Februari' AND bendera!='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangAsing_mar($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Maret' AND bendera!='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangAsing_apr($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='April' AND bendera!='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangAsing_mei($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Mei' AND bendera!='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangAsing_jun($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juni' AND bendera!='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangAsing_jul($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juli' AND bendera!='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangAsing_ags($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Agustus' AND bendera!='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangAsing_spt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='September' AND bendera!='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangAsing_okt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Oktober' AND bendera!='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangAsing_nov($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='November' AND bendera!='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangAsing_des($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Desember' AND bendera!='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }


    public function getKemasRi_jan($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Januari' AND bendera='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasRi_feb($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Februari' AND bendera='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasRi_mar($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Maret' AND bendera='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasRi_apr($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='April' AND bendera='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasRi_mei($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Mei' AND bendera='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasRi_jun($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juni' AND bendera='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasRi_jul($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juli' AND bendera='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasRi_ags($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Agustus' AND bendera='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasRi_spt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='September' AND bendera='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasRi_okt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Oktober' AND bendera='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasRi_nov($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='November' AND bendera='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasRi_des($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Desember' AND bendera='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }


    public function getKemasAsing_jan($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Januari' AND bendera!='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasAsing_feb($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Februari' AND bendera!='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasAsing_mar($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Maret' AND bendera!='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasAsing_apr($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='April' AND bendera!='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasAsing_mei($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Mei' AND bendera!='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasAsing_jun($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juni' AND bendera!='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasAsing_jul($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juli' AND bendera!='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasAsing_ags($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Agustus' AND bendera!='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasAsing_spt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='September' AND bendera!='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasAsing_okt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Oktober' AND bendera!='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasAsing_nov($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='November' AND bendera!='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasAsing_des($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Desember' AND bendera!='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }


    public function getGencarRi_jan($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Januari' AND bendera='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarRi_feb($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Februari' AND bendera='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarRi_mar($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Maret' AND bendera='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarRi_apr($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='April' AND bendera='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarRi_mei($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Mei' AND bendera='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarRi_jun($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juni' AND bendera='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarRi_jul($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juli' AND bendera='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarRi_ags($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Agustus' AND bendera='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarRi_spt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='September' AND bendera='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarRi_okt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Oktober' AND bendera='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarRi_nov($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='November' AND bendera='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarRi_des($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Desember' AND bendera='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }


    public function getGencarAsing_jan($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Januari' AND bendera!='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarAsing_feb($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Februari' AND bendera!='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarAsing_mar($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Maret' AND bendera!='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarAsing_apr($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='April' AND bendera!='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarAsing_mei($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Mei' AND bendera!='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarAsing_jun($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juni' AND bendera!='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarAsing_jul($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juli' AND bendera!='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarAsing_ags($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Agustus' AND bendera!='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarAsing_spt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='September' AND bendera!='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarAsing_okt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Oktober' AND bendera!='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarAsing_nov($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='November' AND bendera!='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarAsing_des($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Desember' AND bendera!='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }


    public function getBulkRi_jan($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Januari' AND bendera='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkRi_feb($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Februari' AND bendera='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkRi_mar($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Maret' AND bendera='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkRi_apr($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='April' AND bendera='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkRi_mei($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Mei' AND bendera='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkRi_jun($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juni' AND bendera='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkRi_jul($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juli' AND bendera='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkRi_ags($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Agustus' AND bendera='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkRi_spt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='September' AND bendera='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkRi_okt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Oktober' AND bendera='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkRi_nov($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='November' AND bendera='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkRi_des($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Desember' AND bendera='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }


    public function getBulkAsing_jan($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Januari' AND bendera!='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkAsing_feb($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Februari' AND bendera!='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkAsing_mar($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Maret' AND bendera!='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkAsing_apr($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='April' AND bendera!='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkAsing_mei($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Mei' AND bendera!='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkAsing_jun($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juni' AND bendera!='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkAsing_jul($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juli' AND bendera!='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkAsing_ags($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Agustus' AND bendera!='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkAsing_spt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='September' AND bendera!='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkAsing_okt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Oktober' AND bendera!='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkAsing_nov($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='November' AND bendera!='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkAsing_des($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Desember' AND bendera!='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }


    public function getUnitizeRi_jan($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Januari' AND bendera='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeRi_feb($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Februari' AND bendera='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeRi_mar($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Maret' AND bendera='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeRi_apr($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='April' AND bendera='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeRi_mei($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Mei' AND bendera='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeRi_jun($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juni' AND bendera='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeRi_jul($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juli' AND bendera='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeRi_ags($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Agustus' AND bendera='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeRi_spt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='September' AND bendera='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeRi_okt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Oktober' AND bendera='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeRi_nov($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='November' AND bendera='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeRi_des($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Desember' AND bendera='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }


    public function getUnitizeAsing_jan($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Januari' AND bendera!='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeAsing_feb($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Februari' AND bendera!='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeAsing_mar($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Maret' AND bendera!='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeAsing_apr($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='April' AND bendera!='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeAsing_mei($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Mei' AND bendera!='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeAsing_jun($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juni' AND bendera!='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeAsing_jul($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juli' AND bendera!='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeAsing_ags($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Agustus' AND bendera!='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeAsing_spt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='September' AND bendera!='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeAsing_okt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Oktober' AND bendera!='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeAsing_nov($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='November' AND bendera!='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeAsing_des($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Desember' AND bendera!='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }


    public function getCairRi_jan($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Januari' AND bendera='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairRi_feb($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Februari' AND bendera='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairRi_mar($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Maret' AND bendera='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairRi_apr($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='April' AND bendera='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairRi_mei($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Mei' AND bendera='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairRi_jun($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juni' AND bendera='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairRi_jul($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juli' AND bendera='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairRi_ags($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Agustus' AND bendera='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairRi_spt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='September' AND bendera='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairRi_okt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Oktober' AND bendera='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairRi_nov($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='November' AND bendera='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairRi_des($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Desember' AND bendera='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }


    public function getCairAsing_jan($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Januari' AND bendera!='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairAsing_feb($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Februari' AND bendera!='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairAsing_mar($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Maret' AND bendera!='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairAsing_apr($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='April' AND bendera!='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairAsing_mei($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Mei' AND bendera!='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairAsing_jun($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juni' AND bendera!='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairAsing_jul($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juli' AND bendera!='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairAsing_ags($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Agustus' AND bendera!='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairAsing_spt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='September' AND bendera!='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairAsing_okt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Oktober' AND bendera!='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairAsing_nov($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='November' AND bendera!='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairAsing_des($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Desember' AND bendera!='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }


    public function getKeringRi_jan($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Januari' AND bendera='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringRi_feb($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Februari' AND bendera='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringRi_mar($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Maret' AND bendera='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringRi_apr($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='April' AND bendera='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringRi_mei($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Mei' AND bendera='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringRi_jun($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juni' AND bendera='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringRi_jul($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juli' AND bendera='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringRi_ags($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Agustus' AND bendera='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringRi_spt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='September' AND bendera='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringRi_okt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Oktober' AND bendera='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringRi_nov($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='November' AND bendera='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringRi_des($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Desember' AND bendera='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }


    public function getKeringAsing_jan($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Januari' AND bendera!='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringAsing_feb($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Februari' AND bendera!='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringAsing_mar($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Maret' AND bendera!='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringAsing_apr($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='April' AND bendera!='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringAsing_mei($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Mei' AND bendera!='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringAsing_jun($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juni' AND bendera!='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringAsing_jul($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juli' AND bendera!='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringAsing_ags($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Agustus' AND bendera!='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringAsing_spt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='September' AND bendera!='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringAsing_okt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Oktober' AND bendera!='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringAsing_nov($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='November' AND bendera!='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringAsing_des($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Desember' AND bendera!='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }


    public function getTernakRi_jan($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Januari' AND bendera='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakRi_feb($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Februari' AND bendera='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakRi_mar($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Maret' AND bendera='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakRi_apr($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='April' AND bendera='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakRi_mei($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Mei' AND bendera='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakRi_jun($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juni' AND bendera='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakRi_jul($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juli' AND bendera='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakRi_ags($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Agustus' AND bendera='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakRi_spt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='September' AND bendera='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakRi_okt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Oktober' AND bendera='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakRi_nov($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='November' AND bendera='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakRi_des($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Desember' AND bendera='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }


    public function getTernakAsing_jan($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Januari' AND bendera!='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakAsing_feb($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Februari' AND bendera!='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakAsing_mar($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Maret' AND bendera!='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakAsing_apr($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='April' AND bendera!='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakAsing_mei($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Mei' AND bendera!='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakAsing_jun($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juni' AND bendera!='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakAsing_jul($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juli' AND bendera!='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakAsing_ags($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Agustus' AND bendera!='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakAsing_spt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='September' AND bendera!='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakAsing_okt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Oktober' AND bendera!='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakAsing_nov($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='November' AND bendera!='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakAsing_des($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Desember' AND bendera!='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }


    public function getKendaraanRi_jan($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Januari' AND bendera='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanRi_feb($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Februari' AND bendera='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanRi_mar($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Maret' AND bendera='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanRi_apr($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='April' AND bendera='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanRi_mei($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Mei' AND bendera='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanRi_jun($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juni' AND bendera='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanRi_jul($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juli' AND bendera='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanRi_ags($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Agustus' AND bendera='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanRi_spt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='September' AND bendera='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanRi_okt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Oktober' AND bendera='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanRi_nov($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='November' AND bendera='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanRi_des($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Desember' AND bendera='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }


    public function getKendaraanAsing_jan($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Januari' AND bendera!='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanAsing_feb($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Februari' AND bendera!='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanAsing_mar($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Maret' AND bendera!='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanAsing_apr($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='April' AND bendera!='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanAsing_mei($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Mei' AND bendera!='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanAsing_jun($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juni' AND bendera!='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanAsing_jul($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Juli' AND bendera!='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanAsing_ags($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Agustus' AND bendera!='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanAsing_spt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='September' AND bendera!='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanAsing_okt($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Oktober' AND bendera!='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanAsing_nov($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='November' AND bendera!='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanAsing_des($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bulan_tiba='Desember' AND bendera!='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }





    public function getKapalRi_jumlah($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bendera='RI' AND tahun_tiba=$tahun ");
    }
    public function getKapalAsing_jumlah($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(gt1)+sum(gt2) AS jumlah_gt from surat WHERE status='valid' AND bendera!='RI' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangRi_jumlah($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bendera='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getPenumpangAsing_jumlah($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bendera!='RI' AND jenis_barang='Penumpang' AND tahun_tiba=$tahun ");
    }
    public function getKemasRi_jumlah($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bendera='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getKemasAsing_jumlah($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bendera!='RI' AND jenis_barang='Peti Kemas' AND tahun_tiba=$tahun ");
    }
    public function getGencarRi_jumlah($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bendera='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getGencarAsing_jumlah($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bendera!='RI' AND jenis_barang='General Cargo / Gencar' AND tahun_tiba=$tahun ");
    }
    public function getBulkRi_jumlah($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bendera='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getBulkAsing_jumlah($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bendera!='RI' AND jenis_barang='Bulk Cargo' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeRi_jumlah($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bendera='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getUnitizeAsing_jumlah($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bendera!='RI' AND jenis_barang='Unitize' AND tahun_tiba=$tahun ");
    }
    public function getCairRi_jumlah($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bendera='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getCairAsing_jumlah($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bendera!='RI' AND jenis_barang='Curah Cair' AND tahun_tiba=$tahun ");
    }
    public function getKeringRi_jumlah($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bendera='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getKeringAsing_jumlah($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bendera!='RI' AND jenis_barang='Curah Kering' AND tahun_tiba=$tahun ");
    }
    public function getTernakRi_jumlah($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bendera='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getTernakAsing_jumlah($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bendera!='RI' AND jenis_barang='Ternak' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanRi_jumlah($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bendera='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }
    public function getKendaraanAsing_jumlah($tahun){
        return $this->db->query("SELECT sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND bendera!='RI' AND jenis_barang='Kendaraan' AND tahun_tiba=$tahun ");
    }



    public function getData_Jumlah($tahun){
        return $this->db->query("SELECT sum(jumlah_kapal) AS kapal , sum(bongkar) AS jumlah_bongkar , sum(muat) AS jumlah_muat from surat WHERE status='valid' AND tahun_tiba=$tahun ");
    }



    public function getBulanan($bulan, $kat, $tahun){
        return $this->db->query("SELECT * from surat WHERE status='valid' AND bulan_tiba='$bulan' AND tahun_tiba=$tahun AND jenis_barang='$kat' ");
    }





}