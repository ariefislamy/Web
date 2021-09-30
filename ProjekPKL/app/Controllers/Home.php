<?php

namespace App\Controllers;

use App\Models\SuratModel;
use App\Models\UserModel;

class Home extends BaseController
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
        $tahun = date('Y');
        $who = session();
		$data['user'] = $who->get();
        $data['jumlah_januari1']= $this->surat->getKapalRi_jan($tahun)->getResult();
        $data['jumlah_januari2']= $this->surat->getKapalAsing_jan($tahun)->getResult();
        $data['jumlah_januari3']= $this->surat->getPenumpangRi_jan($tahun)->getResult();
        $data['jumlah_januari4']= $this->surat->getPenumpangAsing_jan($tahun)->getResult();
        $data['jumlah_januari5']= $this->surat->getKemasRi_jan($tahun)->getResult();
        $data['jumlah_januari6']= $this->surat->getKemasAsing_jan($tahun)->getResult();
        $data['jumlah_januari7']= $this->surat->getGencarRi_jan($tahun)->getResult();
        $data['jumlah_januari8']= $this->surat->getGencarAsing_jan($tahun)->getResult();
        $data['jumlah_januari9']= $this->surat->getBulkRi_jan($tahun)->getResult();
        $data['jumlah_januari10']= $this->surat->getBulkAsing_jan($tahun)->getResult();
        $data['jumlah_januari11']= $this->surat->getUnitizeRi_jan($tahun)->getResult();
        $data['jumlah_januari12']= $this->surat->getUnitizeAsing_jan($tahun)->getResult();
        $data['jumlah_januari13']= $this->surat->getCairRi_jan($tahun)->getResult();
        $data['jumlah_januari14']= $this->surat->getCairAsing_jan($tahun)->getResult();
        $data['jumlah_januari15']= $this->surat->getKeringRi_jan($tahun)->getResult();
        $data['jumlah_januari16']= $this->surat->getKeringAsing_jan($tahun)->getResult();
        $data['jumlah_januari17']= $this->surat->getTernakRi_jan($tahun)->getResult();
        $data['jumlah_januari18']= $this->surat->getTernakAsing_jan($tahun)->getResult();
        $data['jumlah_januari19']= $this->surat->getKendaraanRi_jan($tahun)->getResult();
        $data['jumlah_januari20']= $this->surat->getKendaraanAsing_jan($tahun)->getResult();

        $data['jumlah_februari1']= $this->surat->getKapalRi_feb($tahun)->getResult();
        $data['jumlah_februari2']= $this->surat->getKapalAsing_feb($tahun)->getResult();
        $data['jumlah_februari3']= $this->surat->getPenumpangRi_feb($tahun)->getResult();
        $data['jumlah_februari4']= $this->surat->getPenumpangAsing_feb($tahun)->getResult();
        $data['jumlah_februari5']= $this->surat->getKemasRi_feb($tahun)->getResult();
        $data['jumlah_februari6']= $this->surat->getKemasAsing_feb($tahun)->getResult();
        $data['jumlah_februari7']= $this->surat->getGencarRi_feb($tahun)->getResult();
        $data['jumlah_februari8']= $this->surat->getGencarAsing_feb($tahun)->getResult();
        $data['jumlah_februari9']= $this->surat->getBulkRi_feb($tahun)->getResult();
        $data['jumlah_februari10']= $this->surat->getBulkAsing_feb($tahun)->getResult();
        $data['jumlah_februari11']= $this->surat->getUnitizeRi_feb($tahun)->getResult();
        $data['jumlah_februari12']= $this->surat->getUnitizeAsing_feb($tahun)->getResult();
        $data['jumlah_februari13']= $this->surat->getCairRi_feb($tahun)->getResult();
        $data['jumlah_februari14']= $this->surat->getCairAsing_feb($tahun)->getResult();
        $data['jumlah_februari15']= $this->surat->getKeringRi_feb($tahun)->getResult();
        $data['jumlah_februari16']= $this->surat->getKeringAsing_feb($tahun)->getResult();
        $data['jumlah_februari17']= $this->surat->getTernakRi_feb($tahun)->getResult();
        $data['jumlah_februari18']= $this->surat->getTernakAsing_feb($tahun)->getResult();
        $data['jumlah_februari19']= $this->surat->getKendaraanRi_feb($tahun)->getResult();
        $data['jumlah_februari20']= $this->surat->getKendaraanAsing_feb($tahun)->getResult();

        $data['jumlah_maret1']= $this->surat->getKapalRi_mar($tahun)->getResult();
        $data['jumlah_maret2']= $this->surat->getKapalAsing_mar($tahun)->getResult();
        $data['jumlah_maret3']= $this->surat->getPenumpangRi_mar($tahun)->getResult();
        $data['jumlah_maret4']= $this->surat->getPenumpangAsing_mar($tahun)->getResult();
        $data['jumlah_maret5']= $this->surat->getKemasRi_mar($tahun)->getResult();
        $data['jumlah_maret6']= $this->surat->getKemasAsing_mar($tahun)->getResult();
        $data['jumlah_maret7']= $this->surat->getGencarRi_mar($tahun)->getResult();
        $data['jumlah_maret8']= $this->surat->getGencarAsing_mar($tahun)->getResult();
        $data['jumlah_maret9']= $this->surat->getBulkRi_mar($tahun)->getResult();
        $data['jumlah_maret10']= $this->surat->getBulkAsing_mar($tahun)->getResult();
        $data['jumlah_maret11']= $this->surat->getUnitizeRi_mar($tahun)->getResult();
        $data['jumlah_maret12']= $this->surat->getUnitizeAsing_mar($tahun)->getResult();
        $data['jumlah_maret13']= $this->surat->getCairRi_mar($tahun)->getResult();
        $data['jumlah_maret14']= $this->surat->getCairAsing_mar($tahun)->getResult();
        $data['jumlah_maret15']= $this->surat->getKeringRi_mar($tahun)->getResult();
        $data['jumlah_maret16']= $this->surat->getKeringAsing_mar($tahun)->getResult();
        $data['jumlah_maret17']= $this->surat->getTernakRi_mar($tahun)->getResult();
        $data['jumlah_maret18']= $this->surat->getTernakAsing_mar($tahun)->getResult();
        $data['jumlah_maret19']= $this->surat->getKendaraanRi_mar($tahun)->getResult();
        $data['jumlah_maret20']= $this->surat->getKendaraanAsing_mar($tahun)->getResult();

        $data['jumlah_april1']= $this->surat->getKapalRi_apr($tahun)->getResult();
        $data['jumlah_april2']= $this->surat->getKapalAsing_apr($tahun)->getResult();
        $data['jumlah_april3']= $this->surat->getPenumpangRi_apr($tahun)->getResult();
        $data['jumlah_april4']= $this->surat->getPenumpangAsing_apr($tahun)->getResult();
        $data['jumlah_april5']= $this->surat->getKemasRi_apr($tahun)->getResult();
        $data['jumlah_april6']= $this->surat->getKemasAsing_apr($tahun)->getResult();
        $data['jumlah_april7']= $this->surat->getGencarRi_apr($tahun)->getResult();
        $data['jumlah_april8']= $this->surat->getGencarAsing_apr($tahun)->getResult();
        $data['jumlah_april9']= $this->surat->getBulkRi_apr($tahun)->getResult();
        $data['jumlah_april10']= $this->surat->getBulkAsing_apr($tahun)->getResult();
        $data['jumlah_april11']= $this->surat->getUnitizeRi_apr($tahun)->getResult();
        $data['jumlah_april12']= $this->surat->getUnitizeAsing_apr($tahun)->getResult();
        $data['jumlah_april13']= $this->surat->getCairRi_apr($tahun)->getResult();
        $data['jumlah_april14']= $this->surat->getCairAsing_apr($tahun)->getResult();
        $data['jumlah_april15']= $this->surat->getKeringRi_apr($tahun)->getResult();
        $data['jumlah_april16']= $this->surat->getKeringAsing_apr($tahun)->getResult();
        $data['jumlah_april17']= $this->surat->getTernakRi_apr($tahun)->getResult();
        $data['jumlah_april18']= $this->surat->getTernakAsing_apr($tahun)->getResult();
        $data['jumlah_april19']= $this->surat->getKendaraanRi_apr($tahun)->getResult();
        $data['jumlah_april20']= $this->surat->getKendaraanAsing_apr($tahun)->getResult();

        $data['jumlah_mei1']= $this->surat->getKapalRi_mei($tahun)->getResult();
        $data['jumlah_mei2']= $this->surat->getKapalAsing_mei($tahun)->getResult();
        $data['jumlah_mei3']= $this->surat->getPenumpangRi_mei($tahun)->getResult();
        $data['jumlah_mei4']= $this->surat->getPenumpangAsing_mei($tahun)->getResult();
        $data['jumlah_mei5']= $this->surat->getKemasRi_mei($tahun)->getResult();
        $data['jumlah_mei6']= $this->surat->getKemasAsing_mei($tahun)->getResult();
        $data['jumlah_mei7']= $this->surat->getGencarRi_mei($tahun)->getResult();
        $data['jumlah_mei8']= $this->surat->getGencarAsing_mei($tahun)->getResult();
        $data['jumlah_mei9']= $this->surat->getBulkRi_mei($tahun)->getResult();
        $data['jumlah_mei10']= $this->surat->getBulkAsing_mei($tahun)->getResult();
        $data['jumlah_mei11']= $this->surat->getUnitizeRi_mei($tahun)->getResult();
        $data['jumlah_mei12']= $this->surat->getUnitizeAsing_mei($tahun)->getResult();
        $data['jumlah_mei13']= $this->surat->getCairRi_mei($tahun)->getResult();
        $data['jumlah_mei14']= $this->surat->getCairAsing_mei($tahun)->getResult();
        $data['jumlah_mei15']= $this->surat->getKeringRi_mei($tahun)->getResult();
        $data['jumlah_mei16']= $this->surat->getKeringAsing_mei($tahun)->getResult();
        $data['jumlah_mei17']= $this->surat->getTernakRi_mei($tahun)->getResult();
        $data['jumlah_mei18']= $this->surat->getTernakAsing_mei($tahun)->getResult();
        $data['jumlah_mei19']= $this->surat->getKendaraanRi_mei($tahun)->getResult();
        $data['jumlah_mei20']= $this->surat->getKendaraanAsing_mei($tahun)->getResult();

        $data['jumlah_juni1']= $this->surat->getKapalRi_jun($tahun)->getResult();
        $data['jumlah_juni2']= $this->surat->getKapalAsing_jun($tahun)->getResult();
        $data['jumlah_juni3']= $this->surat->getPenumpangRi_jun($tahun)->getResult();
        $data['jumlah_juni4']= $this->surat->getPenumpangAsing_jun($tahun)->getResult();
        $data['jumlah_juni5']= $this->surat->getKemasRi_jun($tahun)->getResult();
        $data['jumlah_juni6']= $this->surat->getKemasAsing_jun($tahun)->getResult();
        $data['jumlah_juni7']= $this->surat->getGencarRi_jun($tahun)->getResult();
        $data['jumlah_juni8']= $this->surat->getGencarAsing_jun($tahun)->getResult();
        $data['jumlah_juni9']= $this->surat->getBulkRi_jun($tahun)->getResult();
        $data['jumlah_juni10']= $this->surat->getBulkAsing_jun($tahun)->getResult();
        $data['jumlah_juni11']= $this->surat->getUnitizeRi_jun($tahun)->getResult();
        $data['jumlah_juni12']= $this->surat->getUnitizeAsing_jun($tahun)->getResult();
        $data['jumlah_juni13']= $this->surat->getCairRi_jun($tahun)->getResult();
        $data['jumlah_juni14']= $this->surat->getCairAsing_jun($tahun)->getResult();
        $data['jumlah_juni15']= $this->surat->getKeringRi_jun($tahun)->getResult();
        $data['jumlah_juni16']= $this->surat->getKeringAsing_jun($tahun)->getResult();
        $data['jumlah_juni17']= $this->surat->getTernakRi_jun($tahun)->getResult();
        $data['jumlah_juni18']= $this->surat->getTernakAsing_jun($tahun)->getResult();
        $data['jumlah_juni19']= $this->surat->getKendaraanRi_jun($tahun)->getResult();
        $data['jumlah_juni20']= $this->surat->getKendaraanAsing_jun($tahun)->getResult();

        $data['jumlah_juli1']= $this->surat->getKapalRi_jul($tahun)->getResult();
        $data['jumlah_juli2']= $this->surat->getKapalAsing_jul($tahun)->getResult();
        $data['jumlah_juli3']= $this->surat->getPenumpangRi_jul($tahun)->getResult();
        $data['jumlah_juli4']= $this->surat->getPenumpangAsing_jul($tahun)->getResult();
        $data['jumlah_juli5']= $this->surat->getKemasRi_jul($tahun)->getResult();
        $data['jumlah_juli6']= $this->surat->getKemasAsing_jul($tahun)->getResult();
        $data['jumlah_juli7']= $this->surat->getGencarRi_jul($tahun)->getResult();
        $data['jumlah_juli8']= $this->surat->getGencarAsing_jul($tahun)->getResult();
        $data['jumlah_juli9']= $this->surat->getBulkRi_jul($tahun)->getResult();
        $data['jumlah_juli10']= $this->surat->getBulkAsing_jul($tahun)->getResult();
        $data['jumlah_juli11']= $this->surat->getUnitizeRi_jul($tahun)->getResult();
        $data['jumlah_juli12']= $this->surat->getUnitizeAsing_jul($tahun)->getResult();
        $data['jumlah_juli13']= $this->surat->getCairRi_jul($tahun)->getResult();
        $data['jumlah_juli14']= $this->surat->getCairAsing_jul($tahun)->getResult();
        $data['jumlah_juli15']= $this->surat->getKeringRi_jul($tahun)->getResult();
        $data['jumlah_juli16']= $this->surat->getKeringAsing_jul($tahun)->getResult();
        $data['jumlah_juli17']= $this->surat->getTernakRi_jul($tahun)->getResult();
        $data['jumlah_juli18']= $this->surat->getTernakAsing_jul($tahun)->getResult();
        $data['jumlah_juli19']= $this->surat->getKendaraanRi_jul($tahun)->getResult();
        $data['jumlah_juli20']= $this->surat->getKendaraanAsing_jul($tahun)->getResult();

        $data['jumlah_agustus1']= $this->surat->getKapalRi_ags($tahun)->getResult();
        $data['jumlah_agustus2']= $this->surat->getKapalAsing_ags($tahun)->getResult();
        $data['jumlah_agustus3']= $this->surat->getPenumpangRi_ags($tahun)->getResult();
        $data['jumlah_agustus4']= $this->surat->getPenumpangAsing_ags($tahun)->getResult();
        $data['jumlah_agustus5']= $this->surat->getKemasRi_ags($tahun)->getResult();
        $data['jumlah_agustus6']= $this->surat->getKemasAsing_ags($tahun)->getResult();
        $data['jumlah_agustus7']= $this->surat->getGencarRi_ags($tahun)->getResult();
        $data['jumlah_agustus8']= $this->surat->getGencarAsing_ags($tahun)->getResult();
        $data['jumlah_agustus9']= $this->surat->getBulkRi_ags($tahun)->getResult();
        $data['jumlah_agustus10']= $this->surat->getBulkAsing_ags($tahun)->getResult();
        $data['jumlah_agustus11']= $this->surat->getUnitizeRi_ags($tahun)->getResult();
        $data['jumlah_agustus12']= $this->surat->getUnitizeAsing_ags($tahun)->getResult();
        $data['jumlah_agustus13']= $this->surat->getCairRi_ags($tahun)->getResult();
        $data['jumlah_agustus14']= $this->surat->getCairAsing_ags($tahun)->getResult();
        $data['jumlah_agustus15']= $this->surat->getKeringRi_ags($tahun)->getResult();
        $data['jumlah_agustus16']= $this->surat->getKeringAsing_ags($tahun)->getResult();
        $data['jumlah_agustus17']= $this->surat->getTernakRi_ags($tahun)->getResult();
        $data['jumlah_agustus18']= $this->surat->getTernakAsing_ags($tahun)->getResult();
        $data['jumlah_agustus19']= $this->surat->getKendaraanRi_ags($tahun)->getResult();
        $data['jumlah_agustus20']= $this->surat->getKendaraanAsing_ags($tahun)->getResult();

        $data['jumlah_september1']= $this->surat->getKapalRi_spt($tahun)->getResult();
        $data['jumlah_september2']= $this->surat->getKapalAsing_spt($tahun)->getResult();
        $data['jumlah_september3']= $this->surat->getPenumpangRi_spt($tahun)->getResult();
        $data['jumlah_september4']= $this->surat->getPenumpangAsing_spt($tahun)->getResult();
        $data['jumlah_september5']= $this->surat->getKemasRi_spt($tahun)->getResult();
        $data['jumlah_september6']= $this->surat->getKemasAsing_spt($tahun)->getResult();
        $data['jumlah_september7']= $this->surat->getGencarRi_spt($tahun)->getResult();
        $data['jumlah_september8']= $this->surat->getGencarAsing_spt($tahun)->getResult();
        $data['jumlah_september9']= $this->surat->getBulkRi_spt($tahun)->getResult();
        $data['jumlah_september10']= $this->surat->getBulkAsing_spt($tahun)->getResult();
        $data['jumlah_september11']= $this->surat->getUnitizeRi_spt($tahun)->getResult();
        $data['jumlah_september12']= $this->surat->getUnitizeAsing_spt($tahun)->getResult();
        $data['jumlah_september13']= $this->surat->getCairRi_spt($tahun)->getResult();
        $data['jumlah_september14']= $this->surat->getCairAsing_spt($tahun)->getResult();
        $data['jumlah_september15']= $this->surat->getKeringRi_spt($tahun)->getResult();
        $data['jumlah_september16']= $this->surat->getKeringAsing_spt($tahun)->getResult();
        $data['jumlah_september17']= $this->surat->getTernakRi_spt($tahun)->getResult();
        $data['jumlah_september18']= $this->surat->getTernakAsing_spt($tahun)->getResult();
        $data['jumlah_september19']= $this->surat->getKendaraanRi_spt($tahun)->getResult();
        $data['jumlah_september20']= $this->surat->getKendaraanAsing_spt($tahun)->getResult();

        $data['jumlah_oktober1']= $this->surat->getKapalRi_okt($tahun)->getResult();
        $data['jumlah_oktober2']= $this->surat->getKapalAsing_okt($tahun)->getResult();
        $data['jumlah_oktober3']= $this->surat->getPenumpangRi_okt($tahun)->getResult();
        $data['jumlah_oktober4']= $this->surat->getPenumpangAsing_okt($tahun)->getResult();
        $data['jumlah_oktober5']= $this->surat->getKemasRi_okt($tahun)->getResult();
        $data['jumlah_oktober6']= $this->surat->getKemasAsing_okt($tahun)->getResult();
        $data['jumlah_oktober7']= $this->surat->getGencarRi_okt($tahun)->getResult();
        $data['jumlah_oktober8']= $this->surat->getGencarAsing_okt($tahun)->getResult();
        $data['jumlah_oktober9']= $this->surat->getBulkRi_okt($tahun)->getResult();
        $data['jumlah_oktober10']= $this->surat->getBulkAsing_okt($tahun)->getResult();
        $data['jumlah_oktober11']= $this->surat->getUnitizeRi_okt($tahun)->getResult();
        $data['jumlah_oktober12']= $this->surat->getUnitizeAsing_okt($tahun)->getResult();
        $data['jumlah_oktober13']= $this->surat->getCairRi_okt($tahun)->getResult();
        $data['jumlah_oktober14']= $this->surat->getCairAsing_okt($tahun)->getResult();
        $data['jumlah_oktober15']= $this->surat->getKeringRi_okt($tahun)->getResult();
        $data['jumlah_oktober16']= $this->surat->getKeringAsing_okt($tahun)->getResult();
        $data['jumlah_oktober17']= $this->surat->getTernakRi_okt($tahun)->getResult();
        $data['jumlah_oktober18']= $this->surat->getTernakAsing_okt($tahun)->getResult();
        $data['jumlah_oktober19']= $this->surat->getKendaraanRi_okt($tahun)->getResult();
        $data['jumlah_oktober20']= $this->surat->getKendaraanAsing_okt($tahun)->getResult();

        $data['jumlah_november1']= $this->surat->getKapalRi_nov($tahun)->getResult();
        $data['jumlah_november2']= $this->surat->getKapalAsing_nov($tahun)->getResult();
        $data['jumlah_november3']= $this->surat->getPenumpangRi_nov($tahun)->getResult();
        $data['jumlah_november4']= $this->surat->getPenumpangAsing_nov($tahun)->getResult();
        $data['jumlah_november5']= $this->surat->getKemasRi_nov($tahun)->getResult();
        $data['jumlah_november6']= $this->surat->getKemasAsing_nov($tahun)->getResult();
        $data['jumlah_november7']= $this->surat->getGencarRi_nov($tahun)->getResult();
        $data['jumlah_november8']= $this->surat->getGencarAsing_nov($tahun)->getResult();
        $data['jumlah_november9']= $this->surat->getBulkRi_nov($tahun)->getResult();
        $data['jumlah_november10']= $this->surat->getBulkAsing_nov($tahun)->getResult();
        $data['jumlah_november11']= $this->surat->getUnitizeRi_nov($tahun)->getResult();
        $data['jumlah_november12']= $this->surat->getUnitizeAsing_nov($tahun)->getResult();
        $data['jumlah_november13']= $this->surat->getCairRi_nov($tahun)->getResult();
        $data['jumlah_november14']= $this->surat->getCairAsing_nov($tahun)->getResult();
        $data['jumlah_november15']= $this->surat->getKeringRi_nov($tahun)->getResult();
        $data['jumlah_november16']= $this->surat->getKeringAsing_nov($tahun)->getResult();
        $data['jumlah_november17']= $this->surat->getTernakRi_nov($tahun)->getResult();
        $data['jumlah_november18']= $this->surat->getTernakAsing_nov($tahun)->getResult();
        $data['jumlah_november19']= $this->surat->getKendaraanRi_nov($tahun)->getResult();
        $data['jumlah_november20']= $this->surat->getKendaraanAsing_nov($tahun)->getResult();

        $data['jumlah_desember1']= $this->surat->getKapalRi_des($tahun)->getResult();
        $data['jumlah_desember2']= $this->surat->getKapalAsing_des($tahun)->getResult();
        $data['jumlah_desember3']= $this->surat->getPenumpangRi_des($tahun)->getResult();
        $data['jumlah_desember4']= $this->surat->getPenumpangAsing_des($tahun)->getResult();
        $data['jumlah_desember5']= $this->surat->getKemasRi_des($tahun)->getResult();
        $data['jumlah_desember6']= $this->surat->getKemasAsing_des($tahun)->getResult();
        $data['jumlah_desember7']= $this->surat->getGencarRi_des($tahun)->getResult();
        $data['jumlah_desember8']= $this->surat->getGencarAsing_des($tahun)->getResult();
        $data['jumlah_desember9']= $this->surat->getBulkRi_des($tahun)->getResult();
        $data['jumlah_desember10']= $this->surat->getBulkAsing_des($tahun)->getResult();
        $data['jumlah_desember11']= $this->surat->getUnitizeRi_des($tahun)->getResult();
        $data['jumlah_desember12']= $this->surat->getUnitizeAsing_des($tahun)->getResult();
        $data['jumlah_desember13']= $this->surat->getCairRi_des($tahun)->getResult();
        $data['jumlah_desember14']= $this->surat->getCairAsing_des($tahun)->getResult();
        $data['jumlah_desember15']= $this->surat->getKeringRi_des($tahun)->getResult();
        $data['jumlah_desember16']= $this->surat->getKeringAsing_des($tahun)->getResult();
        $data['jumlah_desember17']= $this->surat->getTernakRi_des($tahun)->getResult();
        $data['jumlah_desember18']= $this->surat->getTernakAsing_des($tahun)->getResult();
        $data['jumlah_desember19']= $this->surat->getKendaraanRi_des($tahun)->getResult();
        $data['jumlah_desember20']= $this->surat->getKendaraanAsing_des($tahun)->getResult();

        $data['jumlah_tahun1']= $this->surat->getKapalRi_jumlah($tahun)->getResult();
        $data['jumlah_tahun2']= $this->surat->getKapalAsing_jumlah($tahun)->getResult();
        $data['jumlah_tahun3']= $this->surat->getPenumpangRi_jumlah($tahun)->getResult();
        $data['jumlah_tahun4']= $this->surat->getPenumpangAsing_jumlah($tahun)->getResult();
        $data['jumlah_tahun5']= $this->surat->getKemasRi_jumlah($tahun)->getResult();
        $data['jumlah_tahun6']= $this->surat->getKemasAsing_jumlah($tahun)->getResult();
        $data['jumlah_tahun7']= $this->surat->getGencarRi_jumlah($tahun)->getResult();
        $data['jumlah_tahun8']= $this->surat->getGencarAsing_jumlah($tahun)->getResult();
        $data['jumlah_tahun9']= $this->surat->getBulkRi_jumlah($tahun)->getResult();
        $data['jumlah_tahun10']= $this->surat->getBulkAsing_jumlah($tahun)->getResult();
        $data['jumlah_tahun11']= $this->surat->getUnitizeRi_jumlah($tahun)->getResult();
        $data['jumlah_tahun12']= $this->surat->getUnitizeAsing_jumlah($tahun)->getResult();
        $data['jumlah_tahun13']= $this->surat->getCairRi_jumlah($tahun)->getResult();
        $data['jumlah_tahun14']= $this->surat->getCairAsing_jumlah($tahun)->getResult();
        $data['jumlah_tahun15']= $this->surat->getKeringRi_jumlah($tahun)->getResult();
        $data['jumlah_tahun16']= $this->surat->getKeringAsing_jumlah($tahun)->getResult();
        $data['jumlah_tahun17']= $this->surat->getTernakRi_jumlah($tahun)->getResult();
        $data['jumlah_tahun18']= $this->surat->getTernakAsing_jumlah($tahun)->getResult();
        $data['jumlah_tahun19']= $this->surat->getKendaraanRi_jumlah($tahun)->getResult();
        $data['jumlah_tahun20']= $this->surat->getKendaraanAsing_jumlah($tahun)->getResult();

        $data['jumlah_data']= $this->surat->getData_Jumlah($tahun)->getResult();

        $data['tahun']= $tahun;
        $data['tot_user'] = $this->user->tot_user();

        echo view('/navbar',$data);
        echo view('/sidebar',$data);
		echo view('Dashboard/main',$data);
	}

}
