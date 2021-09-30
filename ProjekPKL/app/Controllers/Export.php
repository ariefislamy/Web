<?php namespace App\Controllers;

use CodeIgniter\Controller;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Models\SuratModel;

class Export extends BaseController
{

    public function __construct() {
 
        // Mendeklarasikan class ProductModel menggunakan $this->product
        $this->surat = new SuratModel();
        /* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Product 
        */
    }

    public function index(){

        $tahun = $this->request->getVar('tahun');

        $jumlah_januari1= $this->surat->getKapalRi_jan($tahun)->getResult();
        $jumlah_januari2= $this->surat->getKapalAsing_jan($tahun)->getResult();
        $jumlah_januari3= $this->surat->getPenumpangRi_jan($tahun)->getResult();
        $jumlah_januari4= $this->surat->getPenumpangAsing_jan($tahun)->getResult();
        $jumlah_januari5= $this->surat->getKemasRi_jan($tahun)->getResult();
        $jumlah_januari6= $this->surat->getKemasAsing_jan($tahun)->getResult();
        $jumlah_januari7= $this->surat->getGencarRi_jan($tahun)->getResult();
        $jumlah_januari8= $this->surat->getGencarAsing_jan($tahun)->getResult();
        $jumlah_januari9= $this->surat->getBulkRi_jan($tahun)->getResult();
        $jumlah_januari10= $this->surat->getBulkAsing_jan($tahun)->getResult();
        $jumlah_januari11= $this->surat->getUnitizeRi_jan($tahun)->getResult();
        $jumlah_januari12= $this->surat->getUnitizeAsing_jan($tahun)->getResult();
        $jumlah_januari13= $this->surat->getCairRi_jan($tahun)->getResult();
        $jumlah_januari14= $this->surat->getCairAsing_jan($tahun)->getResult();
        $jumlah_januari15= $this->surat->getKeringRi_jan($tahun)->getResult();
        $jumlah_januari16= $this->surat->getKeringAsing_jan($tahun)->getResult();
        $jumlah_januari17= $this->surat->getTernakRi_jan($tahun)->getResult();
        $jumlah_januari18= $this->surat->getTernakAsing_jan($tahun)->getResult();
        $jumlah_januari19= $this->surat->getKendaraanRi_jan($tahun)->getResult();
        $jumlah_januari20= $this->surat->getKendaraanAsing_jan($tahun)->getResult();

        $jumlah_februari1= $this->surat->getKapalRi_feb($tahun)->getResult();
        $jumlah_februari2= $this->surat->getKapalAsing_feb($tahun)->getResult();
        $jumlah_februari3= $this->surat->getPenumpangRi_feb($tahun)->getResult();
        $jumlah_februari4= $this->surat->getPenumpangAsing_feb($tahun)->getResult();
        $jumlah_februari5= $this->surat->getKemasRi_feb($tahun)->getResult();
        $jumlah_februari6= $this->surat->getKemasAsing_feb($tahun)->getResult();
        $jumlah_februari7= $this->surat->getGencarRi_feb($tahun)->getResult();
        $jumlah_februari8= $this->surat->getGencarAsing_feb($tahun)->getResult();
        $jumlah_februari9= $this->surat->getBulkRi_feb($tahun)->getResult();
        $jumlah_februari10= $this->surat->getBulkAsing_feb($tahun)->getResult();
        $jumlah_februari11= $this->surat->getUnitizeRi_feb($tahun)->getResult();
        $jumlah_februari12= $this->surat->getUnitizeAsing_feb($tahun)->getResult();
        $jumlah_februari13= $this->surat->getCairRi_feb($tahun)->getResult();
        $jumlah_februari14= $this->surat->getCairAsing_feb($tahun)->getResult();
        $jumlah_februari15= $this->surat->getKeringRi_feb($tahun)->getResult();
        $jumlah_februari16= $this->surat->getKeringAsing_feb($tahun)->getResult();
        $jumlah_februari17= $this->surat->getTernakRi_feb($tahun)->getResult();
        $jumlah_februari18= $this->surat->getTernakAsing_feb($tahun)->getResult();
        $jumlah_februari19= $this->surat->getKendaraanRi_feb($tahun)->getResult();
        $jumlah_februari20= $this->surat->getKendaraanAsing_feb($tahun)->getResult();

        $jumlah_maret1= $this->surat->getKapalRi_mar($tahun)->getResult();
        $jumlah_maret2= $this->surat->getKapalAsing_mar($tahun)->getResult();
        $jumlah_maret3= $this->surat->getPenumpangRi_mar($tahun)->getResult();
        $jumlah_maret4= $this->surat->getPenumpangAsing_mar($tahun)->getResult();
        $jumlah_maret5= $this->surat->getKemasRi_mar($tahun)->getResult();
        $jumlah_maret6= $this->surat->getKemasAsing_mar($tahun)->getResult();
        $jumlah_maret7= $this->surat->getGencarRi_mar($tahun)->getResult();
        $jumlah_maret8= $this->surat->getGencarAsing_mar($tahun)->getResult();
        $jumlah_maret9= $this->surat->getBulkRi_mar($tahun)->getResult();
        $jumlah_maret10= $this->surat->getBulkAsing_mar($tahun)->getResult();
        $jumlah_maret11= $this->surat->getUnitizeRi_mar($tahun)->getResult();
        $jumlah_maret12= $this->surat->getUnitizeAsing_mar($tahun)->getResult();
        $jumlah_maret13= $this->surat->getCairRi_mar($tahun)->getResult();
        $jumlah_maret14= $this->surat->getCairAsing_mar($tahun)->getResult();
        $jumlah_maret15= $this->surat->getKeringRi_mar($tahun)->getResult();
        $jumlah_maret16= $this->surat->getKeringAsing_mar($tahun)->getResult();
        $jumlah_maret17= $this->surat->getTernakRi_mar($tahun)->getResult();
        $jumlah_maret18= $this->surat->getTernakAsing_mar($tahun)->getResult();
        $jumlah_maret19= $this->surat->getKendaraanRi_mar($tahun)->getResult();
        $jumlah_maret20= $this->surat->getKendaraanAsing_mar($tahun)->getResult();

        $jumlah_april1= $this->surat->getKapalRi_apr($tahun)->getResult();
        $jumlah_april2= $this->surat->getKapalAsing_apr($tahun)->getResult();
        $jumlah_april3= $this->surat->getPenumpangRi_apr($tahun)->getResult();
        $jumlah_april4= $this->surat->getPenumpangAsing_apr($tahun)->getResult();
        $jumlah_april5= $this->surat->getKemasRi_apr($tahun)->getResult();
        $jumlah_april6= $this->surat->getKemasAsing_apr($tahun)->getResult();
        $jumlah_april7= $this->surat->getGencarRi_apr($tahun)->getResult();
        $jumlah_april8= $this->surat->getGencarAsing_apr($tahun)->getResult();
        $jumlah_april9= $this->surat->getBulkRi_apr($tahun)->getResult();
        $jumlah_april10= $this->surat->getBulkAsing_apr($tahun)->getResult();
        $jumlah_april11= $this->surat->getUnitizeRi_apr($tahun)->getResult();
        $jumlah_april12= $this->surat->getUnitizeAsing_apr($tahun)->getResult();
        $jumlah_april13= $this->surat->getCairRi_apr($tahun)->getResult();
        $jumlah_april14= $this->surat->getCairAsing_apr($tahun)->getResult();
        $jumlah_april15= $this->surat->getKeringRi_apr($tahun)->getResult();
        $jumlah_april16= $this->surat->getKeringAsing_apr($tahun)->getResult();
        $jumlah_april17= $this->surat->getTernakRi_apr($tahun)->getResult();
        $jumlah_april18= $this->surat->getTernakAsing_apr($tahun)->getResult();
        $jumlah_april19= $this->surat->getKendaraanRi_apr($tahun)->getResult();
        $jumlah_april20= $this->surat->getKendaraanAsing_apr($tahun)->getResult();

        $jumlah_mei1= $this->surat->getKapalRi_mei($tahun)->getResult();
        $jumlah_mei2= $this->surat->getKapalAsing_mei($tahun)->getResult();
        $jumlah_mei3= $this->surat->getPenumpangRi_mei($tahun)->getResult();
        $jumlah_mei4= $this->surat->getPenumpangAsing_mei($tahun)->getResult();
        $jumlah_mei5= $this->surat->getKemasRi_mei($tahun)->getResult();
        $jumlah_mei6= $this->surat->getKemasAsing_mei($tahun)->getResult();
        $jumlah_mei7= $this->surat->getGencarRi_mei($tahun)->getResult();
        $jumlah_mei8= $this->surat->getGencarAsing_mei($tahun)->getResult();
        $jumlah_mei9= $this->surat->getBulkRi_mei($tahun)->getResult();
        $jumlah_mei10= $this->surat->getBulkAsing_mei($tahun)->getResult();
        $jumlah_mei11= $this->surat->getUnitizeRi_mei($tahun)->getResult();
        $jumlah_mei12= $this->surat->getUnitizeAsing_mei($tahun)->getResult();
        $jumlah_mei13= $this->surat->getCairRi_mei($tahun)->getResult();
        $jumlah_mei14= $this->surat->getCairAsing_mei($tahun)->getResult();
        $jumlah_mei15= $this->surat->getKeringRi_mei($tahun)->getResult();
        $jumlah_mei16= $this->surat->getKeringAsing_mei($tahun)->getResult();
        $jumlah_mei17= $this->surat->getTernakRi_mei($tahun)->getResult();
        $jumlah_mei18= $this->surat->getTernakAsing_mei($tahun)->getResult();
        $jumlah_mei19= $this->surat->getKendaraanRi_mei($tahun)->getResult();
        $jumlah_mei20= $this->surat->getKendaraanAsing_mei($tahun)->getResult();

        $jumlah_juni1= $this->surat->getKapalRi_jun($tahun)->getResult();
        $jumlah_juni2= $this->surat->getKapalAsing_jun($tahun)->getResult();
        $jumlah_juni3= $this->surat->getPenumpangRi_jun($tahun)->getResult();
        $jumlah_juni4= $this->surat->getPenumpangAsing_jun($tahun)->getResult();
        $jumlah_juni5= $this->surat->getKemasRi_jun($tahun)->getResult();
        $jumlah_juni6= $this->surat->getKemasAsing_jun($tahun)->getResult();
        $jumlah_juni7= $this->surat->getGencarRi_jun($tahun)->getResult();
        $jumlah_juni8= $this->surat->getGencarAsing_jun($tahun)->getResult();
        $jumlah_juni9= $this->surat->getBulkRi_jun($tahun)->getResult();
        $jumlah_juni10= $this->surat->getBulkAsing_jun($tahun)->getResult();
        $jumlah_juni11= $this->surat->getUnitizeRi_jun($tahun)->getResult();
        $jumlah_juni12= $this->surat->getUnitizeAsing_jun($tahun)->getResult();
        $jumlah_juni13= $this->surat->getCairRi_jun($tahun)->getResult();
        $jumlah_juni14= $this->surat->getCairAsing_jun($tahun)->getResult();
        $jumlah_juni15= $this->surat->getKeringRi_jun($tahun)->getResult();
        $jumlah_juni16= $this->surat->getKeringAsing_jun($tahun)->getResult();
        $jumlah_juni17= $this->surat->getTernakRi_jun($tahun)->getResult();
        $jumlah_juni18= $this->surat->getTernakAsing_jun($tahun)->getResult();
        $jumlah_juni19= $this->surat->getKendaraanRi_jun($tahun)->getResult();
        $jumlah_juni20= $this->surat->getKendaraanAsing_jun($tahun)->getResult();

        $jumlah_juli1= $this->surat->getKapalRi_jul($tahun)->getResult();
        $jumlah_juli2= $this->surat->getKapalAsing_jul($tahun)->getResult();
        $jumlah_juli3= $this->surat->getPenumpangRi_jul($tahun)->getResult();
        $jumlah_juli4= $this->surat->getPenumpangAsing_jul($tahun)->getResult();
        $jumlah_juli5= $this->surat->getKemasRi_jul($tahun)->getResult();
        $jumlah_juli6= $this->surat->getKemasAsing_jul($tahun)->getResult();
        $jumlah_juli7= $this->surat->getGencarRi_jul($tahun)->getResult();
        $jumlah_juli8= $this->surat->getGencarAsing_jul($tahun)->getResult();
        $jumlah_juli9= $this->surat->getBulkRi_jul($tahun)->getResult();
        $jumlah_juli10= $this->surat->getBulkAsing_jul($tahun)->getResult();
        $jumlah_juli11= $this->surat->getUnitizeRi_jul($tahun)->getResult();
        $jumlah_juli12= $this->surat->getUnitizeAsing_jul($tahun)->getResult();
        $jumlah_juli13= $this->surat->getCairRi_jul($tahun)->getResult();
        $jumlah_juli14= $this->surat->getCairAsing_jul($tahun)->getResult();
        $jumlah_juli15= $this->surat->getKeringRi_jul($tahun)->getResult();
        $jumlah_juli16= $this->surat->getKeringAsing_jul($tahun)->getResult();
        $jumlah_juli17= $this->surat->getTernakRi_jul($tahun)->getResult();
        $jumlah_juli18= $this->surat->getTernakAsing_jul($tahun)->getResult();
        $jumlah_juli19= $this->surat->getKendaraanRi_jul($tahun)->getResult();
        $jumlah_juli20= $this->surat->getKendaraanAsing_jul($tahun)->getResult();

        $jumlah_agustus1= $this->surat->getKapalRi_ags($tahun)->getResult();
        $jumlah_agustus2= $this->surat->getKapalAsing_ags($tahun)->getResult();
        $jumlah_agustus3= $this->surat->getPenumpangRi_ags($tahun)->getResult();
        $jumlah_agustus4= $this->surat->getPenumpangAsing_ags($tahun)->getResult();
        $jumlah_agustus5= $this->surat->getKemasRi_ags($tahun)->getResult();
        $jumlah_agustus6= $this->surat->getKemasAsing_ags($tahun)->getResult();
        $jumlah_agustus7= $this->surat->getGencarRi_ags($tahun)->getResult();
        $jumlah_agustus8= $this->surat->getGencarAsing_ags($tahun)->getResult();
        $jumlah_agustus9= $this->surat->getBulkRi_ags($tahun)->getResult();
        $jumlah_agustus10= $this->surat->getBulkAsing_ags($tahun)->getResult();
        $jumlah_agustus11= $this->surat->getUnitizeRi_ags($tahun)->getResult();
        $jumlah_agustus12= $this->surat->getUnitizeAsing_ags($tahun)->getResult();
        $jumlah_agustus13= $this->surat->getCairRi_ags($tahun)->getResult();
        $jumlah_agustus14= $this->surat->getCairAsing_ags($tahun)->getResult();
        $jumlah_agustus15= $this->surat->getKeringRi_ags($tahun)->getResult();
        $jumlah_agustus16= $this->surat->getKeringAsing_ags($tahun)->getResult();
        $jumlah_agustus17= $this->surat->getTernakRi_ags($tahun)->getResult();
        $jumlah_agustus18= $this->surat->getTernakAsing_ags($tahun)->getResult();
        $jumlah_agustus19= $this->surat->getKendaraanRi_ags($tahun)->getResult();
        $jumlah_agustus20= $this->surat->getKendaraanAsing_ags($tahun)->getResult();

        $jumlah_september1= $this->surat->getKapalRi_spt($tahun)->getResult();
        $jumlah_september2= $this->surat->getKapalAsing_spt($tahun)->getResult();
        $jumlah_september3= $this->surat->getPenumpangRi_spt($tahun)->getResult();
        $jumlah_september4= $this->surat->getPenumpangAsing_spt($tahun)->getResult();
        $jumlah_september5= $this->surat->getKemasRi_spt($tahun)->getResult();
        $jumlah_september6= $this->surat->getKemasAsing_spt($tahun)->getResult();
        $jumlah_september7= $this->surat->getGencarRi_spt($tahun)->getResult();
        $jumlah_september8= $this->surat->getGencarAsing_spt($tahun)->getResult();
        $jumlah_september9= $this->surat->getBulkRi_spt($tahun)->getResult();
        $jumlah_september10= $this->surat->getBulkAsing_spt($tahun)->getResult();
        $jumlah_september11= $this->surat->getUnitizeRi_spt($tahun)->getResult();
        $jumlah_september12= $this->surat->getUnitizeAsing_spt($tahun)->getResult();
        $jumlah_september13= $this->surat->getCairRi_spt($tahun)->getResult();
        $jumlah_september14= $this->surat->getCairAsing_spt($tahun)->getResult();
        $jumlah_september15= $this->surat->getKeringRi_spt($tahun)->getResult();
        $jumlah_september16= $this->surat->getKeringAsing_spt($tahun)->getResult();
        $jumlah_september17= $this->surat->getTernakRi_spt($tahun)->getResult();
        $jumlah_september18= $this->surat->getTernakAsing_spt($tahun)->getResult();
        $jumlah_september19= $this->surat->getKendaraanRi_spt($tahun)->getResult();
        $jumlah_september20= $this->surat->getKendaraanAsing_spt($tahun)->getResult();

        $jumlah_oktober1= $this->surat->getKapalRi_okt($tahun)->getResult();
        $jumlah_oktober2= $this->surat->getKapalAsing_okt($tahun)->getResult();
        $jumlah_oktober3= $this->surat->getPenumpangRi_okt($tahun)->getResult();
        $jumlah_oktober4= $this->surat->getPenumpangAsing_okt($tahun)->getResult();
        $jumlah_oktober5= $this->surat->getKemasRi_okt($tahun)->getResult();
        $jumlah_oktober6= $this->surat->getKemasAsing_okt($tahun)->getResult();
        $jumlah_oktober7= $this->surat->getGencarRi_okt($tahun)->getResult();
        $jumlah_oktober8= $this->surat->getGencarAsing_okt($tahun)->getResult();
        $jumlah_oktober9= $this->surat->getBulkRi_okt($tahun)->getResult();
        $jumlah_oktober10= $this->surat->getBulkAsing_okt($tahun)->getResult();
        $jumlah_oktober11= $this->surat->getUnitizeRi_okt($tahun)->getResult();
        $jumlah_oktober12= $this->surat->getUnitizeAsing_okt($tahun)->getResult();
        $jumlah_oktober13= $this->surat->getCairRi_okt($tahun)->getResult();
        $jumlah_oktober14= $this->surat->getCairAsing_okt($tahun)->getResult();
        $jumlah_oktober15= $this->surat->getKeringRi_okt($tahun)->getResult();
        $jumlah_oktober16= $this->surat->getKeringAsing_okt($tahun)->getResult();
        $jumlah_oktober17= $this->surat->getTernakRi_okt($tahun)->getResult();
        $jumlah_oktober18= $this->surat->getTernakAsing_okt($tahun)->getResult();
        $jumlah_oktober19= $this->surat->getKendaraanRi_okt($tahun)->getResult();
        $jumlah_oktober20= $this->surat->getKendaraanAsing_okt($tahun)->getResult();

        $jumlah_november1= $this->surat->getKapalRi_nov($tahun)->getResult();
        $jumlah_november2= $this->surat->getKapalAsing_nov($tahun)->getResult();
        $jumlah_november3= $this->surat->getPenumpangRi_nov($tahun)->getResult();
        $jumlah_november4= $this->surat->getPenumpangAsing_nov($tahun)->getResult();
        $jumlah_november5= $this->surat->getKemasRi_nov($tahun)->getResult();
        $jumlah_november6= $this->surat->getKemasAsing_nov($tahun)->getResult();
        $jumlah_november7= $this->surat->getGencarRi_nov($tahun)->getResult();
        $jumlah_november8= $this->surat->getGencarAsing_nov($tahun)->getResult();
        $jumlah_november9= $this->surat->getBulkRi_nov($tahun)->getResult();
        $jumlah_november10= $this->surat->getBulkAsing_nov($tahun)->getResult();
        $jumlah_november11= $this->surat->getUnitizeRi_nov($tahun)->getResult();
        $jumlah_november12= $this->surat->getUnitizeAsing_nov($tahun)->getResult();
        $jumlah_november13= $this->surat->getCairRi_nov($tahun)->getResult();
        $jumlah_november14= $this->surat->getCairAsing_nov($tahun)->getResult();
        $jumlah_november15= $this->surat->getKeringRi_nov($tahun)->getResult();
        $jumlah_november16= $this->surat->getKeringAsing_nov($tahun)->getResult();
        $jumlah_november17= $this->surat->getTernakRi_nov($tahun)->getResult();
        $jumlah_november18= $this->surat->getTernakAsing_nov($tahun)->getResult();
        $jumlah_november19= $this->surat->getKendaraanRi_nov($tahun)->getResult();
        $jumlah_november20= $this->surat->getKendaraanAsing_nov($tahun)->getResult();

        $jumlah_desember1= $this->surat->getKapalRi_des($tahun)->getResult();
        $jumlah_desember2= $this->surat->getKapalAsing_des($tahun)->getResult();
        $jumlah_desember3= $this->surat->getPenumpangRi_des($tahun)->getResult();
        $jumlah_desember4= $this->surat->getPenumpangAsing_des($tahun)->getResult();
        $jumlah_desember5= $this->surat->getKemasRi_des($tahun)->getResult();
        $jumlah_desember6= $this->surat->getKemasAsing_des($tahun)->getResult();
        $jumlah_desember7= $this->surat->getGencarRi_des($tahun)->getResult();
        $jumlah_desember8= $this->surat->getGencarAsing_des($tahun)->getResult();
        $jumlah_desember9= $this->surat->getBulkRi_des($tahun)->getResult();
        $jumlah_desember10= $this->surat->getBulkAsing_des($tahun)->getResult();
        $jumlah_desember11= $this->surat->getUnitizeRi_des($tahun)->getResult();
        $jumlah_desember12= $this->surat->getUnitizeAsing_des($tahun)->getResult();
        $jumlah_desember13= $this->surat->getCairRi_des($tahun)->getResult();
        $jumlah_desember14= $this->surat->getCairAsing_des($tahun)->getResult();
        $jumlah_desember15= $this->surat->getKeringRi_des($tahun)->getResult();
        $jumlah_desember16= $this->surat->getKeringAsing_des($tahun)->getResult();
        $jumlah_desember17= $this->surat->getTernakRi_des($tahun)->getResult();
        $jumlah_desember18= $this->surat->getTernakAsing_des($tahun)->getResult();
        $jumlah_desember19= $this->surat->getKendaraanRi_des($tahun)->getResult();
        $jumlah_desember20= $this->surat->getKendaraanAsing_des($tahun)->getResult();

        $jumlah_tahun1= $this->surat->getKapalRi_jumlah($tahun)->getResult();
        $jumlah_tahun2= $this->surat->getKapalAsing_jumlah($tahun)->getResult();
        $jumlah_tahun3= $this->surat->getPenumpangRi_jumlah($tahun)->getResult();
        $jumlah_tahun4= $this->surat->getPenumpangAsing_jumlah($tahun)->getResult();
        $jumlah_tahun5= $this->surat->getKemasRi_jumlah($tahun)->getResult();
        $jumlah_tahun6= $this->surat->getKemasAsing_jumlah($tahun)->getResult();
        $jumlah_tahun7= $this->surat->getGencarRi_jumlah($tahun)->getResult();
        $jumlah_tahun8= $this->surat->getGencarAsing_jumlah($tahun)->getResult();
        $jumlah_tahun9= $this->surat->getBulkRi_jumlah($tahun)->getResult();
        $jumlah_tahun10= $this->surat->getBulkAsing_jumlah($tahun)->getResult();
        $jumlah_tahun11= $this->surat->getUnitizeRi_jumlah($tahun)->getResult();
        $jumlah_tahun12= $this->surat->getUnitizeAsing_jumlah($tahun)->getResult();
        $jumlah_tahun13= $this->surat->getCairRi_jumlah($tahun)->getResult();
        $jumlah_tahun14= $this->surat->getCairAsing_jumlah($tahun)->getResult();
        $jumlah_tahun15= $this->surat->getKeringRi_jumlah($tahun)->getResult();
        $jumlah_tahun16= $this->surat->getKeringAsing_jumlah($tahun)->getResult();
        $jumlah_tahun17= $this->surat->getTernakRi_jumlah($tahun)->getResult();
        $jumlah_tahun18= $this->surat->getTernakAsing_jumlah($tahun)->getResult();
        $jumlah_tahun19= $this->surat->getKendaraanRi_jumlah($tahun)->getResult();
        $jumlah_tahun20= $this->surat->getKendaraanAsing_jumlah($tahun)->getResult();

        

        



        // Load plugin PHPExcel nya
        
        // Panggil class PHPExcel nya
        $excel = new Spreadsheet();
        // Settingan awal fil excel
        $excel->getProperties()->setCreator('My Notes Code')
                     ->setLastModifiedBy('My Notes Code')
                     ->setTitle("Data Siswa")
                     ->setSubject("Siswa")
                     ->setDescription("Laporan Semua Data Siswa")
                     ->setKeywords("Data Siswa");
        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
        $excel->setActiveSheetIndex(0)->setCellValue('B5', "LAPORAN KEGIATAN BONGKAR MUAT"); // Set kolom A1 dengan tulisan "DATA SISWA"
        $excel->setActiveSheetIndex(0)->setCellValue('B6', "DI PELABUHAN PANJANG"); // Set kolom A1 dengan tulisan "DATA SISWA"
        $excel->setActiveSheetIndex(0)->setCellValue('B7', "PERIODE : JANUARI S/D DESEMBER ".$tahun); // Set kolom A1 dengan tulisan "DATA SISWA"
        $excel->getActiveSheet()->mergeCells('B5:V5'); // Set Merge Cell pada kolom A1 sampai E1
        $excel->getActiveSheet()->mergeCells('B6:V6'); // Set Merge Cell pada kolom A1 sampai E1
        $excel->getActiveSheet()->mergeCells('B7:V7'); // Set Merge Cell pada kolom A1 sampai E1
        $excel->getActiveSheet()->getStyle('B5:B7')->getFont()->setBold(TRUE); // Set bold kolom A1
        // Buat header tabel nya pada baris ke 3
    
        // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
        // Set width kolom
    
    
        $excel->setActiveSheetIndex(0)->setCellValue('B9', "Bulan"); // Set kolom A3 dengan tulisan "NO"
        $excel->setActiveSheetIndex(0)->setCellValue('C9', "Total Jumlah Kapal RI"); // Set kolom B3 dengan tulisan "NIS"
        $excel->setActiveSheetIndex(0)->setCellValue('D9', "Total Jumlah Kapal Asing"); // Set kolom C3 dengan tulisan "NAMA"
        $excel->setActiveSheetIndex(0)->setCellValue('E9', "Total Jumlah GT RI"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
        $excel->setActiveSheetIndex(0)->setCellValue('F9', "Total Jumlah GT Asing"); // Set kolom E3 dengan tulisan "ALAMAT"
    
        $excel->getActiveSheet()->mergeCells('B9:B12');
        $excel->getActiveSheet()->mergeCells('C9:C12');
        $excel->getActiveSheet()->mergeCells('D9:D12');
        $excel->getActiveSheet()->mergeCells('E9:E12');
        $excel->getActiveSheet()->mergeCells('F9:F12');
    
    
    
        $excel->setActiveSheetIndex(0)->setCellValue('G9', "Total Penumpang"); 
        $excel->setActiveSheetIndex(0)->setCellValue('G10', "Dalam Negeri");
        $excel->setActiveSheetIndex(0)->setCellValue('I10', "Luar Negeri"); 
        $excel->setActiveSheetIndex(0)->setCellValue('G11', "Turun (Orang)"); 
        $excel->setActiveSheetIndex(0)->setCellValue('H11', "Naik (Orang)");
        $excel->setActiveSheetIndex(0)->setCellValue('I11', "Turun (Orang)");
        $excel->setActiveSheetIndex(0)->setCellValue('J11', "Naik (Orang)");
        
        $excel->getActiveSheet()->mergeCells('G9:J9');
        $excel->getActiveSheet()->mergeCells('G10:H10');
        $excel->getActiveSheet()->mergeCells('I10:J10');
        $excel->getActiveSheet()->mergeCells('G11:G12');
        $excel->getActiveSheet()->mergeCells('H11:H12');
        $excel->getActiveSheet()->mergeCells('I11:I12');
        $excel->getActiveSheet()->mergeCells('J11:J12');
    
    
        $excel->setActiveSheetIndex(0)->setCellValue('K9', "Total Peti Kemas"); 
        $excel->setActiveSheetIndex(0)->setCellValue('K10', "Dalam Negeri");
        $excel->setActiveSheetIndex(0)->setCellValue('O10', "Luar Negeri"); 
        $excel->setActiveSheetIndex(0)->setCellValue('K11', "Bongkar (Teus)"); 
        $excel->setActiveSheetIndex(0)->setCellValue('L11', "Muat (Teus)");
        $excel->setActiveSheetIndex(0)->setCellValue('M11', "Bongkar (Box)");
        $excel->setActiveSheetIndex(0)->setCellValue('N11', "Muat (Box)");
        $excel->setActiveSheetIndex(0)->setCellValue('O11', "Bongkar (Teus)"); 
        $excel->setActiveSheetIndex(0)->setCellValue('P11', "Muat (Teus)");
        $excel->setActiveSheetIndex(0)->setCellValue('Q11', "Bongkar (Box)");
        $excel->setActiveSheetIndex(0)->setCellValue('R11', "Muat (Box)");
        
        $excel->getActiveSheet()->mergeCells('K9:R9');
        $excel->getActiveSheet()->mergeCells('K10:N10');
        $excel->getActiveSheet()->mergeCells('O10:R10');
        $excel->getActiveSheet()->mergeCells('K11:K12');
        $excel->getActiveSheet()->mergeCells('L11:L12');
        $excel->getActiveSheet()->mergeCells('M11:M12');
        $excel->getActiveSheet()->mergeCells('N11:N12');
        $excel->getActiveSheet()->mergeCells('O11:O12');
        $excel->getActiveSheet()->mergeCells('P11:P12');
        $excel->getActiveSheet()->mergeCells('Q11:Q12');
        $excel->getActiveSheet()->mergeCells('R11:R12');
    
    
        $excel->setActiveSheetIndex(0)->setCellValue('S9', "Total General Cargo (GC)/Gencar"); 
        $excel->setActiveSheetIndex(0)->setCellValue('S10', "Dalam Negeri");
        $excel->setActiveSheetIndex(0)->setCellValue('U10', "Luar Negeri"); 
        $excel->setActiveSheetIndex(0)->setCellValue('S11', "Bongkar (Ton)"); 
        $excel->setActiveSheetIndex(0)->setCellValue('T11', "Muat (Ton)");
        $excel->setActiveSheetIndex(0)->setCellValue('U11', "Bongkar (Ton)");
        $excel->setActiveSheetIndex(0)->setCellValue('V11', "Muat (Ton)");
        
        $excel->getActiveSheet()->mergeCells('S9:V9');
        $excel->getActiveSheet()->mergeCells('S10:T10');
        $excel->getActiveSheet()->mergeCells('U10:V10');
        $excel->getActiveSheet()->mergeCells('S11:S12');
        $excel->getActiveSheet()->mergeCells('T11:T12');
        $excel->getActiveSheet()->mergeCells('U11:U12');
        $excel->getActiveSheet()->mergeCells('V11:V12');
    
    
        $excel->setActiveSheetIndex(0)->setCellValue('X9', "Total Bulk Cargo (BC)"); 
        $excel->setActiveSheetIndex(0)->setCellValue('X10', "Dalam Negeri");
        $excel->setActiveSheetIndex(0)->setCellValue('Z10', "Luar Negeri"); 
        $excel->setActiveSheetIndex(0)->setCellValue('X11', "Bongkar (Ton)"); 
        $excel->setActiveSheetIndex(0)->setCellValue('Y11', "Muat (Ton)");
        $excel->setActiveSheetIndex(0)->setCellValue('Z11', "Bongkar (Ton)");
        $excel->setActiveSheetIndex(0)->setCellValue('AA11', "Muat (Ton)");
        
        $excel->getActiveSheet()->mergeCells('X9:AA9');
        $excel->getActiveSheet()->mergeCells('X10:Y10');
        $excel->getActiveSheet()->mergeCells('Z10:AA10');
        $excel->getActiveSheet()->mergeCells('X11:X12');
        $excel->getActiveSheet()->mergeCells('Y11:Y12');
        $excel->getActiveSheet()->mergeCells('Z11:Z12');
        $excel->getActiveSheet()->mergeCells('AA11:AA12');
    
    
        $excel->setActiveSheetIndex(0)->setCellValue('AB9', "Total Unitize (UN)"); 
        $excel->setActiveSheetIndex(0)->setCellValue('AB10', "Dalam Negeri");
        $excel->setActiveSheetIndex(0)->setCellValue('AD10', "Luar Negeri"); 
        $excel->setActiveSheetIndex(0)->setCellValue('AB11', "Bongkar (Ton)"); 
        $excel->setActiveSheetIndex(0)->setCellValue('AC11', "Muat (Ton)");
        $excel->setActiveSheetIndex(0)->setCellValue('AD11', "Bongkar (Ton)");
        $excel->setActiveSheetIndex(0)->setCellValue('AE11', "Muat (Ton)");
        
        $excel->getActiveSheet()->mergeCells('AB9:AE9');
        $excel->getActiveSheet()->mergeCells('AB10:AC10');
        $excel->getActiveSheet()->mergeCells('AD10:AE10');
        $excel->getActiveSheet()->mergeCells('AB11:AB12');
        $excel->getActiveSheet()->mergeCells('AC11:AC12');
        $excel->getActiveSheet()->mergeCells('AD11:AD12');
        $excel->getActiveSheet()->mergeCells('AE11:AE12');
    
    
        $excel->setActiveSheetIndex(0)->setCellValue('AF9', "Total Curah Cair (CC)"); 
        $excel->setActiveSheetIndex(0)->setCellValue('AF10', "Dalam Negeri");
        $excel->setActiveSheetIndex(0)->setCellValue('AH10', "Luar Negeri"); 
        $excel->setActiveSheetIndex(0)->setCellValue('AF11', "Bongkar (Ton)"); 
        $excel->setActiveSheetIndex(0)->setCellValue('AG11', "Muat (Ton)");
        $excel->setActiveSheetIndex(0)->setCellValue('AH11', "Bongkar (Ton)");
        $excel->setActiveSheetIndex(0)->setCellValue('AI11', "Muat (Ton)");
        
        $excel->getActiveSheet()->mergeCells('AF9:AI9');
        $excel->getActiveSheet()->mergeCells('AF10:AG10');
        $excel->getActiveSheet()->mergeCells('AH10:AI10');
        $excel->getActiveSheet()->mergeCells('AF11:AF12');
        $excel->getActiveSheet()->mergeCells('AG11:AG12');
        $excel->getActiveSheet()->mergeCells('AH11:AH12');
        $excel->getActiveSheet()->mergeCells('AI11:AI12');
    
    
        $excel->setActiveSheetIndex(0)->setCellValue('AJ9', "Total Curah Kering (CK)"); 
        $excel->setActiveSheetIndex(0)->setCellValue('AJ10', "Dalam Negeri");
        $excel->setActiveSheetIndex(0)->setCellValue('AL10', "Luar Negeri"); 
        $excel->setActiveSheetIndex(0)->setCellValue('AJ11', "Bongkar (Ton)"); 
        $excel->setActiveSheetIndex(0)->setCellValue('AK11', "Muat (Ton)");
        $excel->setActiveSheetIndex(0)->setCellValue('AL11', "Bongkar (Ton)");
        $excel->setActiveSheetIndex(0)->setCellValue('AM11', "Muat (Ton)");
        
        $excel->getActiveSheet()->mergeCells('AJ9:AM9');
        $excel->getActiveSheet()->mergeCells('AJ10:AK10');
        $excel->getActiveSheet()->mergeCells('AL10:AM10');
        $excel->getActiveSheet()->mergeCells('AJ11:AJ12');
        $excel->getActiveSheet()->mergeCells('AK11:AK12');
        $excel->getActiveSheet()->mergeCells('AL11:AL12');
        $excel->getActiveSheet()->mergeCells('AM11:AM12');
        
        $excel->setActiveSheetIndex(0)->setCellValue('AO9', "Total Ternak"); 
        $excel->setActiveSheetIndex(0)->setCellValue('AO10', "Dalam Negeri");
        $excel->setActiveSheetIndex(0)->setCellValue('AQ10', "Luar Negeri"); 
        $excel->setActiveSheetIndex(0)->setCellValue('AO11', "Bongkar (Ekor)"); 
        $excel->setActiveSheetIndex(0)->setCellValue('AP11', "Muat (Ekor)");
        $excel->setActiveSheetIndex(0)->setCellValue('AQ11', "Bongkar (Ekor)");
        $excel->setActiveSheetIndex(0)->setCellValue('AR11', "Muat (Ekor)");
        
        $excel->getActiveSheet()->mergeCells('AO9:AR9');
        $excel->getActiveSheet()->mergeCells('AO10:AP10');
        $excel->getActiveSheet()->mergeCells('AQ10:AR10');
        $excel->getActiveSheet()->mergeCells('AO11:AO12');
        $excel->getActiveSheet()->mergeCells('AP11:AP12');
        $excel->getActiveSheet()->mergeCells('AQ11:AQ12');
        $excel->getActiveSheet()->mergeCells('AR11:AR12');
    
        $excel->setActiveSheetIndex(0)->setCellValue('AS9', "Total Kendaraan"); 
        $excel->setActiveSheetIndex(0)->setCellValue('AS10', "Dalam Negeri");
        $excel->setActiveSheetIndex(0)->setCellValue('AU10', "Luar Negeri"); 
        $excel->setActiveSheetIndex(0)->setCellValue('AS11', "Bongkar (Unit)"); 
        $excel->setActiveSheetIndex(0)->setCellValue('AT11', "Muat (Unit)");
        $excel->setActiveSheetIndex(0)->setCellValue('AU11', "Bongkar (Unit)");
        $excel->setActiveSheetIndex(0)->setCellValue('AV11', "Muat (Unit)");
        
        $excel->getActiveSheet()->mergeCells('AS9:AV9');
        $excel->getActiveSheet()->mergeCells('AS10:AT10');
        $excel->getActiveSheet()->mergeCells('AU10:AV10');
        $excel->getActiveSheet()->mergeCells('AS11:AS12');
        $excel->getActiveSheet()->mergeCells('AT11:AT12');
        $excel->getActiveSheet()->mergeCells('AU11:AU12');
        $excel->getActiveSheet()->mergeCells('AV11:AV12');
    
    
        //Isi
        $excel->setActiveSheetIndex(0)->setCellValue('B13', "Januari");
        foreach($jumlah_januari1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('C13', $rows->kapal);
          
        } 
        foreach($jumlah_januari2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('D13', $rows->kapal);
          
        } 
        foreach($jumlah_januari1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('E13', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_januari2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('F13', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_januari3 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('G13', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('H13', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_januari4 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('I13', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('J13', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_januari5 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('M13', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('N13', $rows->jumlah_muat);
          
        }
        foreach($jumlah_januari6 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Q13', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('R13', $rows->jumlah_muat);
          
        }  
        foreach($jumlah_januari7 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('S13', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('T13', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_januari8 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('U13', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('V13', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_januari9 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('X13', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('Y13', $rows->jumlah_muat);
          
        }
        foreach($jumlah_januari10 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Z13', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AA13', $rows->jumlah_muat);
          
        }
        foreach($jumlah_januari11 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AB13', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AC13', $rows->jumlah_muat);
          
        }
        foreach($jumlah_januari12 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AD13', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AE13', $rows->jumlah_muat);
          
        }
        foreach($jumlah_januari13 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AF13', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AG13', $rows->jumlah_muat);
          
        }
        foreach($jumlah_januari14 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AH13', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AI13', $rows->jumlah_muat);
          
        }
        foreach($jumlah_januari15 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AJ13', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AK13', $rows->jumlah_muat);
          
        }
        foreach($jumlah_januari16 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AL13', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AM13', $rows->jumlah_muat);
          
        }
        foreach($jumlah_januari17 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AO13', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AP13', $rows->jumlah_muat);
          
        }
        foreach($jumlah_januari18 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AQ13', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AR13', $rows->jumlah_muat);
          
        }
        foreach($jumlah_januari19 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AS13', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AT13', $rows->jumlah_muat);
          
        }
        foreach($jumlah_januari20 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AU13', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AV13', $rows->jumlah_muat);
          
        }





        $excel->setActiveSheetIndex(0)->setCellValue('B14', "Februari");
        foreach($jumlah_februari1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('C14', $rows->kapal);
          
        } 
        foreach($jumlah_februari2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('D14', $rows->kapal);
          
        } 
        foreach($jumlah_februari1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('E14', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_februari2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('F14', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_februari3 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('G14', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('H14', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_februari4 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('I14', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('J14', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_februari5 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('M14', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('N14', $rows->jumlah_muat);
          
        }
        foreach($jumlah_februari6 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Q14', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('R14', $rows->jumlah_muat);
          
        }  
        foreach($jumlah_februari7 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('S14', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('T14', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_februari8 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('U14', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('V14', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_februari9 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('X14', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('Y14', $rows->jumlah_muat);
          
        }
        foreach($jumlah_februari10 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Z14', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AA14', $rows->jumlah_muat);
          
        }
        foreach($jumlah_februari11 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AB14', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AC14', $rows->jumlah_muat);
          
        }
        foreach($jumlah_februari12 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AD14', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AE14', $rows->jumlah_muat);
          
        }
        foreach($jumlah_februari13 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AF14', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AG14', $rows->jumlah_muat);
          
        }
        foreach($jumlah_februari14 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AH14', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AI14', $rows->jumlah_muat);
          
        }
        foreach($jumlah_februari15 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AJ14', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AK14', $rows->jumlah_muat);
          
        }
        foreach($jumlah_februari16 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AL14', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AM14', $rows->jumlah_muat);
          
        }
        foreach($jumlah_februari17 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AO14', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AP14', $rows->jumlah_muat);
          
        }
        foreach($jumlah_februari18 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AQ14', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AR14', $rows->jumlah_muat);
          
        }
        foreach($jumlah_februari19 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AS14', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AT14', $rows->jumlah_muat);
          
        }
        foreach($jumlah_februari20 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AU14', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AV14', $rows->jumlah_muat);
          
        }



        $excel->setActiveSheetIndex(0)->setCellValue('B15', "Maret");
        foreach($jumlah_maret1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('C15', $rows->kapal);
          
        } 
        foreach($jumlah_maret2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('D15', $rows->kapal);
          
        } 
        foreach($jumlah_maret1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('E15', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_maret2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('F15', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_maret3 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('G15', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('H15', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_maret4 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('I15', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('J15', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_maret5 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('M15', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('N15', $rows->jumlah_muat);
          
        }
        foreach($jumlah_maret6 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Q15', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('R15', $rows->jumlah_muat);
          
        }  
        foreach($jumlah_maret7 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('S15', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('T15', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_maret8 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('U15', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('V15', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_maret9 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('X15', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('Y15', $rows->jumlah_muat);
          
        }
        foreach($jumlah_maret10 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Z15', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AA15', $rows->jumlah_muat);
          
        }
        foreach($jumlah_maret11 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AB15', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AC15', $rows->jumlah_muat);
          
        }
        foreach($jumlah_maret12 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AD15', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AE15', $rows->jumlah_muat);
          
        }
        foreach($jumlah_maret13 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AF15', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AG15', $rows->jumlah_muat);
          
        }
        foreach($jumlah_maret14 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AH15', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AI15', $rows->jumlah_muat);
          
        }
        foreach($jumlah_maret15 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AJ15', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AK15', $rows->jumlah_muat);
          
        }
        foreach($jumlah_maret16 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AL15', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AM15', $rows->jumlah_muat);
          
        }
        foreach($jumlah_maret17 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AO15', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AP15', $rows->jumlah_muat);
          
        }
        foreach($jumlah_maret18 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AQ15', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AR15', $rows->jumlah_muat);
          
        }
        foreach($jumlah_maret19 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AS15', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AT15', $rows->jumlah_muat);
          
        }
        foreach($jumlah_maret20 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AU15', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AV15', $rows->jumlah_muat);
          
        }



        $excel->setActiveSheetIndex(0)->setCellValue('B16', "April");
        foreach($jumlah_april1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('C16', $rows->kapal);
          
        } 
        foreach($jumlah_april2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('D16', $rows->kapal);
          
        } 
        foreach($jumlah_april1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('E16', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_april2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('F16', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_april3 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('G16', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('H16', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_april4 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('I16', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('J16', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_april5 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('M16', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('N16', $rows->jumlah_muat);
          
        }
        foreach($jumlah_april6 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Q16', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('R16', $rows->jumlah_muat);
          
        }  
        foreach($jumlah_april7 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('S16', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('T16', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_april8 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('U16', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('V16', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_april9 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('X16', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('Y16', $rows->jumlah_muat);
          
        }
        foreach($jumlah_april10 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Z16', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AA16', $rows->jumlah_muat);
          
        }
        foreach($jumlah_april11 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AB16', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AC16', $rows->jumlah_muat);
          
        }
        foreach($jumlah_april12 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AD16', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AE16', $rows->jumlah_muat);
          
        }
        foreach($jumlah_april13 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AF16', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AG16', $rows->jumlah_muat);
          
        }
        foreach($jumlah_april14 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AH16', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AI16', $rows->jumlah_muat);
          
        }
        foreach($jumlah_april15 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AJ16', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AK16', $rows->jumlah_muat);
          
        }
        foreach($jumlah_april16 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AL16', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AM16', $rows->jumlah_muat);
          
        }
        foreach($jumlah_april17 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AO16', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AP16', $rows->jumlah_muat);
          
        }
        foreach($jumlah_april18 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AQ16', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AR16', $rows->jumlah_muat);
          
        }
        foreach($jumlah_april19 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AS16', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AT16', $rows->jumlah_muat);
          
        }
        foreach($jumlah_april20 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AU16', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AV16', $rows->jumlah_muat);
          
        }



        $excel->setActiveSheetIndex(0)->setCellValue('B17', "Mei");
        foreach($jumlah_mei1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('C17', $rows->kapal);
          
        } 
        foreach($jumlah_mei2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('D17', $rows->kapal);
          
        } 
        foreach($jumlah_mei1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('E17', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_mei2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('F17', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_mei3 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('G17', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('H17', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_mei4 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('I17', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('J17', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_mei5 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('M17', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('N17', $rows->jumlah_muat);
          
        }
        foreach($jumlah_mei6 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Q17', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('R17', $rows->jumlah_muat);
          
        }  
        foreach($jumlah_mei7 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('S17', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('T17', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_mei8 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('U17', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('V17', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_mei9 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('X17', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('Y17', $rows->jumlah_muat);
          
        }
        foreach($jumlah_mei10 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Z17', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AA17', $rows->jumlah_muat);
          
        }
        foreach($jumlah_mei11 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AB17', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AC17', $rows->jumlah_muat);
          
        }
        foreach($jumlah_mei12 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AD17', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AE17', $rows->jumlah_muat);
          
        }
        foreach($jumlah_mei13 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AF17', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AG17', $rows->jumlah_muat);
          
        }
        foreach($jumlah_mei14 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AH17', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AI17', $rows->jumlah_muat);
          
        }
        foreach($jumlah_mei15 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AJ17', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AK17', $rows->jumlah_muat);
          
        }
        foreach($jumlah_mei16 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AL17', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AM17', $rows->jumlah_muat);
          
        }
        foreach($jumlah_mei17 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AO17', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AP17', $rows->jumlah_muat);
          
        }
        foreach($jumlah_mei18 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AQ17', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AR17', $rows->jumlah_muat);
          
        }
        foreach($jumlah_mei19 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AS17', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AT17', $rows->jumlah_muat);
          
        }
        foreach($jumlah_mei20 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AU17', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AV17', $rows->jumlah_muat);
          
        }



        $excel->setActiveSheetIndex(0)->setCellValue('B18', "Juni");
        foreach($jumlah_juni1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('C18', $rows->kapal);
          
        } 
        foreach($jumlah_juni2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('D18', $rows->kapal);
          
        } 
        foreach($jumlah_juni1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('E18', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_juni2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('F18', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_juni3 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('G18', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('H18', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_juni4 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('I18', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('J18', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_juni5 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('M18', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('N18', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juni6 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Q18', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('R18', $rows->jumlah_muat);
          
        }  
        foreach($jumlah_juni7 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('S18', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('T18', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_juni8 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('U18', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('V18', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_juni9 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('X18', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('Y18', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juni10 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Z18', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AA18', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juni11 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AB18', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AC18', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juni12 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AD18', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AE18', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juni13 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AF18', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AG18', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juni14 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AH18', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AI18', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juni15 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AJ18', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AK18', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juni16 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AL18', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AM18', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juni17 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AO18', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AP18', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juni18 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AQ18', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AR18', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juni19 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AS18', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AT18', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juni20 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AU18', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AV18', $rows->jumlah_muat);
          
        }



        $excel->setActiveSheetIndex(0)->setCellValue('B19', "Juli");
        foreach($jumlah_juli1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('C19', $rows->kapal);
          
        } 
        foreach($jumlah_juli2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('D19', $rows->kapal);
          
        } 
        foreach($jumlah_juli1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('E19', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_juli2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('F19', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_juli3 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('G19', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('H19', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_juli4 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('I19', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('J19', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_juli5 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('M19', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('N19', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juli6 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Q19', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('R19', $rows->jumlah_muat);
          
        }  
        foreach($jumlah_juli7 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('S19', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('T19', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_juli8 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('U19', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('V19', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_juli9 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('X19', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('Y19', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juli10 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Z19', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AA19', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juli11 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AB19', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AC19', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juli12 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AD19', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AE19', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juli13 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AF19', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AG19', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juli14 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AH19', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AI19', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juli15 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AJ19', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AK19', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juli16 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AL19', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AM19', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juli17 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AO19', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AP19', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juli18 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AQ19', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AR19', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juli19 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AS19', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AT19', $rows->jumlah_muat);
          
        }
        foreach($jumlah_juli20 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AU19', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AV19', $rows->jumlah_muat);
          
        }



        $excel->setActiveSheetIndex(0)->setCellValue('B20', "Agustus");
        foreach($jumlah_agustus1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('C20', $rows->kapal);
          
        } 
        foreach($jumlah_agustus2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('D20', $rows->kapal);
          
        } 
        foreach($jumlah_agustus1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('E20', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_agustus2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('F20', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_agustus3 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('G20', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('H20', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_agustus4 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('I20', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('J20', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_agustus5 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('M20', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('N20', $rows->jumlah_muat);
          
        }
        foreach($jumlah_agustus6 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Q20', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('R20', $rows->jumlah_muat);
          
        }  
        foreach($jumlah_agustus7 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('S20', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('T20', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_agustus8 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('U20', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('V20', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_agustus9 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('X20', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('Y20', $rows->jumlah_muat);
          
        }
        foreach($jumlah_agustus10 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Z20', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AA20', $rows->jumlah_muat);
          
        }
        foreach($jumlah_agustus11 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AB20', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AC20', $rows->jumlah_muat);
          
        }
        foreach($jumlah_agustus12 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AD20', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AE20', $rows->jumlah_muat);
          
        }
        foreach($jumlah_agustus13 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AF20', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AG20', $rows->jumlah_muat);
          
        }
        foreach($jumlah_agustus14 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AH20', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AI20', $rows->jumlah_muat);
          
        }
        foreach($jumlah_agustus15 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AJ20', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AK20', $rows->jumlah_muat);
          
        }
        foreach($jumlah_agustus16 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AL20', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AM20', $rows->jumlah_muat);
          
        }
        foreach($jumlah_agustus17 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AO20', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AP20', $rows->jumlah_muat);
          
        }
        foreach($jumlah_agustus18 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AQ20', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AR20', $rows->jumlah_muat);
          
        }
        foreach($jumlah_agustus19 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AS20', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AT20', $rows->jumlah_muat);
          
        }
        foreach($jumlah_agustus20 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AU20', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AV20', $rows->jumlah_muat);
          
        }



        $excel->setActiveSheetIndex(0)->setCellValue('B21', "September");
        foreach($jumlah_september1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('C21', $rows->kapal);
          
        } 
        foreach($jumlah_september2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('D21', $rows->kapal);
          
        } 
        foreach($jumlah_september1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('E21', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_september2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('F21', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_september3 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('G21', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('H21', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_september4 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('I21', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('J21', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_september5 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('M21', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('N21', $rows->jumlah_muat);
          
        }
        foreach($jumlah_september6 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Q21', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('R21', $rows->jumlah_muat);
          
        }  
        foreach($jumlah_september7 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('S21', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('T21', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_september8 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('U21', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('V21', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_september9 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('X21', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('Y21', $rows->jumlah_muat);
          
        }
        foreach($jumlah_september10 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Z21', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AA21', $rows->jumlah_muat);
          
        }
        foreach($jumlah_september11 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AB21', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AC21', $rows->jumlah_muat);
          
        }
        foreach($jumlah_september12 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AD21', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AE21', $rows->jumlah_muat);
          
        }
        foreach($jumlah_september13 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AF21', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AG21', $rows->jumlah_muat);
          
        }
        foreach($jumlah_september14 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AH21', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AI21', $rows->jumlah_muat);
          
        }
        foreach($jumlah_september15 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AJ21', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AK21', $rows->jumlah_muat);
          
        }
        foreach($jumlah_september16 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AL21', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AM21', $rows->jumlah_muat);
          
        }
        foreach($jumlah_september17 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AO21', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AP21', $rows->jumlah_muat);
          
        }
        foreach($jumlah_september18 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AQ21', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AR21', $rows->jumlah_muat);
          
        }
        foreach($jumlah_september19 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AS21', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AT21', $rows->jumlah_muat);
          
        }
        foreach($jumlah_september20 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AU21', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AV21', $rows->jumlah_muat);
          
        }




        $excel->setActiveSheetIndex(0)->setCellValue('B22', "Oktober");
        foreach($jumlah_oktober1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('C22', $rows->kapal);
          
        } 
        foreach($jumlah_oktober2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('D22', $rows->kapal);
          
        } 
        foreach($jumlah_oktober1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('E22', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_oktober2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('F22', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_oktober3 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('G22', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('H22', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_oktober4 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('I22', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('J22', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_oktober5 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('M22', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('N22', $rows->jumlah_muat);
          
        }
        foreach($jumlah_oktober6 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Q22', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('R22', $rows->jumlah_muat);
          
        }  
        foreach($jumlah_oktober7 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('S22', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('T22', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_oktober8 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('U22', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('V22', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_oktober9 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('X22', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('Y22', $rows->jumlah_muat);
          
        }
        foreach($jumlah_oktober10 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Z22', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AA22', $rows->jumlah_muat);
          
        }
        foreach($jumlah_oktober11 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AB22', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AC22', $rows->jumlah_muat);
          
        }
        foreach($jumlah_oktober12 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AD22', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AE22', $rows->jumlah_muat);
          
        }
        foreach($jumlah_oktober13 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AF22', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AG22', $rows->jumlah_muat);
          
        }
        foreach($jumlah_oktober14 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AH22', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AI22', $rows->jumlah_muat);
          
        }
        foreach($jumlah_oktober15 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AJ22', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AK22', $rows->jumlah_muat);
          
        }
        foreach($jumlah_oktober16 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AL22', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AM22', $rows->jumlah_muat);
          
        }
        foreach($jumlah_oktober17 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AO22', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AP22', $rows->jumlah_muat);
          
        }
        foreach($jumlah_oktober18 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AQ22', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AR22', $rows->jumlah_muat);
          
        }
        foreach($jumlah_oktober19 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AS22', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AT22', $rows->jumlah_muat);
          
        }
        foreach($jumlah_oktober20 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AU22', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AV22', $rows->jumlah_muat);
          
        }


        $excel->setActiveSheetIndex(0)->setCellValue('B23', "November");
        foreach($jumlah_november1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('C23', $rows->kapal);
          
        } 
        foreach($jumlah_november2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('D23', $rows->kapal);
          
        } 
        foreach($jumlah_november1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('E23', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_november2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('F23', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_november3 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('G23', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('H23', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_november4 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('I23', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('J23', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_november5 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('M23', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('N23', $rows->jumlah_muat);
          
        }
        foreach($jumlah_november6 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Q23', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('R23', $rows->jumlah_muat);
          
        }  
        foreach($jumlah_november7 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('S23', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('T23', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_november8 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('U23', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('V23', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_november9 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('X23', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('Y23', $rows->jumlah_muat);
          
        }
        foreach($jumlah_november10 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Z23', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AA23', $rows->jumlah_muat);
          
        }
        foreach($jumlah_november11 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AB23', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AC23', $rows->jumlah_muat);
          
        }
        foreach($jumlah_november12 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AD23', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AE23', $rows->jumlah_muat);
          
        }
        foreach($jumlah_november13 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AF23', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AG23', $rows->jumlah_muat);
          
        }
        foreach($jumlah_november14 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AH23', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AI23', $rows->jumlah_muat);
          
        }
        foreach($jumlah_november15 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AJ23', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AK23', $rows->jumlah_muat);
          
        }
        foreach($jumlah_november16 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AL23', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AM23', $rows->jumlah_muat);
          
        }
        foreach($jumlah_november17 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AO23', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AP23', $rows->jumlah_muat);
          
        }
        foreach($jumlah_november18 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AQ23', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AR23', $rows->jumlah_muat);
          
        }
        foreach($jumlah_november19 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AS23', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AT23', $rows->jumlah_muat);
          
        }
        foreach($jumlah_november20 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AU23', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AV23', $rows->jumlah_muat);
          
        }



        $excel->setActiveSheetIndex(0)->setCellValue('B24', "Desember");
        foreach($jumlah_desember1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('C24', $rows->kapal);
          
        } 
        foreach($jumlah_desember2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('D24', $rows->kapal);
          
        } 
        foreach($jumlah_desember1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('E24', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_desember2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('F24', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_desember3 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('G24', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('H24', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_desember4 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('I24', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('J24', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_desember5 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('M24', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('N24', $rows->jumlah_muat);
          
        }
        foreach($jumlah_desember6 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Q24', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('R24', $rows->jumlah_muat);
          
        }  
        foreach($jumlah_desember7 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('S24', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('T24', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_desember8 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('U24', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('V24', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_desember9 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('X24', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('Y24', $rows->jumlah_muat);
          
        }
        foreach($jumlah_desember10 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Z24', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AA24', $rows->jumlah_muat);
          
        }
        foreach($jumlah_desember11 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AB24', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AC24', $rows->jumlah_muat);
          
        }
        foreach($jumlah_desember12 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AD24', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AE24', $rows->jumlah_muat);
          
        }
        foreach($jumlah_desember13 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AF24', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AG24', $rows->jumlah_muat);
          
        }
        foreach($jumlah_desember14 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AH24', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AI24', $rows->jumlah_muat);
          
        }
        foreach($jumlah_desember15 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AJ24', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AK24', $rows->jumlah_muat);
          
        }
        foreach($jumlah_desember16 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AL24', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AM24', $rows->jumlah_muat);
          
        }
        foreach($jumlah_desember17 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AO24', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AP24', $rows->jumlah_muat);
          
        }
        foreach($jumlah_desember18 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AQ24', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AR24', $rows->jumlah_muat);
          
        }
        foreach($jumlah_desember19 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AS24', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AT24', $rows->jumlah_muat);
          
        }
        foreach($jumlah_desember20 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AU24', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AV24', $rows->jumlah_muat);
          
        }



        $excel->setActiveSheetIndex(0)->setCellValue('B25', "Jumlah");
        foreach($jumlah_tahun1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('C25', $rows->kapal);
          
        } 
        foreach($jumlah_tahun2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('D25', $rows->kapal);
          
        } 
        foreach($jumlah_tahun1 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('E25', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_tahun2 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('F25', $rows->jumlah_gt);
          
        } 
        foreach($jumlah_tahun3 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('G25', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('H25', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_tahun4 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('I25', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('J25', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_tahun5 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('M25', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('N25', $rows->jumlah_muat);
          
        }
        foreach($jumlah_tahun6 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Q25', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('R25', $rows->jumlah_muat);
          
        }  
        foreach($jumlah_tahun7 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('S25', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('T25', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_tahun8 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('U25', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('V25', $rows->jumlah_muat);
          
        } 
        foreach($jumlah_tahun9 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('X25', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('Y25', $rows->jumlah_muat);
          
        }
        foreach($jumlah_tahun10 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('Z25', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AA25', $rows->jumlah_muat);
          
        }
        foreach($jumlah_tahun11 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AB25', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AC25', $rows->jumlah_muat);
          
        }
        foreach($jumlah_tahun12 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AD25', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AE25', $rows->jumlah_muat);
          
        }
        foreach($jumlah_tahun13 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AF25', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AG25', $rows->jumlah_muat);
          
        }
        foreach($jumlah_tahun14 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AH25', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AI25', $rows->jumlah_muat);
          
        }
        foreach($jumlah_tahun15 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AJ25', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AK25', $rows->jumlah_muat);
          
        }
        foreach($jumlah_tahun16 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AL25', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AM25', $rows->jumlah_muat);
          
        }
        foreach($jumlah_tahun17 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AO25', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AP25', $rows->jumlah_muat);
          
        }
        foreach($jumlah_tahun18 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AQ25', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AR25', $rows->jumlah_muat);
          
        }
        foreach($jumlah_tahun19 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AS25', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AT25', $rows->jumlah_muat);
          
        }
        foreach($jumlah_tahun20 as $rows)
			  {       
          $excel->setActiveSheetIndex(0)->setCellValue('AU25', $rows->jumlah_bongkar);
          $excel->setActiveSheetIndex(0)->setCellValue('AV25', $rows->jumlah_muat);
          
        }
    
        
        
        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE
        // Set judul file excel nya
        $excel->getActiveSheet(0)->setTitle("Laporan Kegiatan Bongkar Muat");
        $excel->setActiveSheetIndex(0);
        // Proses file excel
        $writer = new Xlsx($excel);
        $fileName = 'Laporan Tahun '.$tahun;
    
        $styleArray = [
          'alignment' => [
            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            'wrapText' => true,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ];
    
        $styleTitle = [
          'alignment' => [
            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ],
        ];

        $styleBulan = [
          'alignment' => [
            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
            'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            'wrapText' => true,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_DOTTED,
                ],
            ],
        ];

        $styleIsi = [
          'alignment' => [
            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            'wrapText' => true,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_DOTTED,
                ],
            ],
        ];
    
    
        $excel->getActiveSheet()->getStyle('B5:B7')->applyFromArray($styleTitle);

        $excel->getActiveSheet()->getStyle('B9:V12')->applyFromArray($styleArray);    
        $excel->getActiveSheet()->getStyle('X9:AM12')->applyFromArray($styleArray);   
        $excel->getActiveSheet()->getStyle('AO9:AV12')->applyFromArray($styleArray);

        $excel->getActiveSheet()->getStyle('B13:B25')->applyFromArray($styleBulan);  
        
        $excel->getActiveSheet()->getStyle('C13:V25')->applyFromArray($styleIsi);
        $excel->getActiveSheet()->getStyle('X13:AM25')->applyFromArray($styleIsi);
        $excel->getActiveSheet()->getStyle('AO13:AV25')->applyFromArray($styleIsi);


        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15);
    
    
    
    
        // Redirect hasil generate xlsx ke web client
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename='.$fileName.'.xlsx');
        header('Cache-Control: max-age=0');
    
        $writer->save('php://output');
      }




      public function bulanan(){
        $tahun = $this->request->getVar('tahun');
        $bulan = $this->request->getVar('bulan');
        $kat = $this->request->getVar('kat');

        $bulanan = $this->surat->getBulanan($bulan, $kat, $tahun)->getResult();

        $excel = new Spreadsheet();
        // Settingan awal fil excel
        $excel->getProperties()->setCreator('My Notes Code')
                     ->setLastModifiedBy('Unila')
                     ->setTitle("Laporan Bulanan")
                     ->setSubject("Kapal")
                     ->setDescription("Laporan Bulanan")
                     ->setKeywords("Data Kapal");

      // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
      $excel->setActiveSheetIndex(0)->setCellValue('B2', "Laporan Kedatangan Dan Keberangkatan Kapal"); // Set kolom A1 dengan tulisan "DATA SISWA"
      $excel->setActiveSheetIndex(0)->setCellValue('B3', $kat); // Set kolom A1 dengan tulisan "DATA SISWA"
      $excel->setActiveSheetIndex(0)->setCellValue('B4', "Bulan : $bulan $tahun "); // Set kolom A1 dengan tulisan "DATA SISWA"
      $excel->getActiveSheet()->mergeCells('B2:T2'); // Set Merge Cell pada kolom A1 sampai E1
      $excel->getActiveSheet()->mergeCells('B3:T3'); // Set Merge Cell pada kolom A1 sampai E1
      $excel->getActiveSheet()->mergeCells('B4:T4'); // Set Merge Cell pada kolom A1 sampai E1
      $excel->getActiveSheet()->getStyle('B2:B4')->getFont()->setBold(TRUE); // Set bold kolom A1
      // Buat header tabel nya pada baris ke 3
  
      // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
      // Set width kolom
  
  
      $excel->setActiveSheetIndex(0)->setCellValue('B7', "No");
      $excel->setActiveSheetIndex(0)->setCellValue('C7', "Nama Kapal");
      $excel->setActiveSheetIndex(0)->setCellValue('D7', "Bendera"); 
      $excel->setActiveSheetIndex(0)->setCellValue('D8', "RI"); 
      $excel->setActiveSheetIndex(0)->setCellValue('E8', "ASING"); 
  
      $excel->getActiveSheet()->mergeCells('B7:B9');
      $excel->getActiveSheet()->mergeCells('C7:C9');
      $excel->getActiveSheet()->mergeCells('D7:E7');
      $excel->getActiveSheet()->mergeCells('D8:D9');
      $excel->getActiveSheet()->mergeCells('E8:E9');
  
  
  
      $excel->setActiveSheetIndex(0)->setCellValue('F7', "Ukuran (GT)"); 
      $excel->setActiveSheetIndex(0)->setCellValue('F8', "RI");
      $excel->setActiveSheetIndex(0)->setCellValue('G8', "ASING"); 
      $excel->setActiveSheetIndex(0)->setCellValue('H8', "LOA"); 
      $excel->setActiveSheetIndex(0)->setCellValue('I7', "Agen");
      $excel->setActiveSheetIndex(0)->setCellValue('J7', "Antar Pulau");
      $excel->setActiveSheetIndex(0)->setCellValue('J8', "Nama Barang");
      
      $excel->getActiveSheet()->mergeCells('F7:H7');
      $excel->getActiveSheet()->mergeCells('F8:F9');
      $excel->getActiveSheet()->mergeCells('G8:G9');
      $excel->getActiveSheet()->mergeCells('H8:H9');
      $excel->getActiveSheet()->mergeCells('I7:I9');
      $excel->getActiveSheet()->mergeCells('J7:L7');
      $excel->getActiveSheet()->mergeCells('J8:J9');
  
  
      $excel->setActiveSheetIndex(0)->setCellValue('K8', "Bongkar"); 
      $excel->setActiveSheetIndex(0)->setCellValue('L8', "Muat");
      $excel->setActiveSheetIndex(0)->setCellValue('K9', "Jumlah"); 
      $excel->setActiveSheetIndex(0)->setCellValue('L9', "Jumlah"); 
      $excel->setActiveSheetIndex(0)->setCellValue('M7', "Import");
      $excel->setActiveSheetIndex(0)->setCellValue('M8', "Nama Barang");
      $excel->setActiveSheetIndex(0)->setCellValue('N8', "Import");
      $excel->setActiveSheetIndex(0)->setCellValue('O8', "Eksport"); 
      $excel->setActiveSheetIndex(0)->setCellValue('N9', "Jumlah");
      $excel->setActiveSheetIndex(0)->setCellValue('O9', "Jumlah");
      
      $excel->getActiveSheet()->mergeCells('K8:K8');
      $excel->getActiveSheet()->mergeCells('L8:L8');
      $excel->getActiveSheet()->mergeCells('K9:K9');
      $excel->getActiveSheet()->mergeCells('L9:L9');
      $excel->getActiveSheet()->mergeCells('M7:O7');
      $excel->getActiveSheet()->mergeCells('M8:M9');
      $excel->getActiveSheet()->mergeCells('N8:N8');
      $excel->getActiveSheet()->mergeCells('O8:O8');
      $excel->getActiveSheet()->mergeCells('N9:N9');
      $excel->getActiveSheet()->mergeCells('O9:O9');
  
      $excel->setActiveSheetIndex(0)->setCellValue('P7', "Pelabuhan Asal/Tujuan"); 
      $excel->setActiveSheetIndex(0)->setCellValue('P8', "Dari");
      $excel->setActiveSheetIndex(0)->setCellValue('Q8', "Tgl Tiba"); 
      $excel->setActiveSheetIndex(0)->setCellValue('R8', "Ke"); 
      $excel->setActiveSheetIndex(0)->setCellValue('S8', "Tgl Berangkat");
      $excel->setActiveSheetIndex(0)->setCellValue('T8', "Ket");
      
      $excel->getActiveSheet()->mergeCells('P7:T7');
      $excel->getActiveSheet()->mergeCells('P8:P9');
      $excel->getActiveSheet()->mergeCells('Q8:Q9');
      $excel->getActiveSheet()->mergeCells('R8:R9');
      $excel->getActiveSheet()->mergeCells('S8:S9');
      $excel->getActiveSheet()->mergeCells('T8:T9');

      $no=1; 
      $i=10;
      foreach($bulanan as $row){
        if( ($row->jumlah_kapal) == '1' ) {
          $excel->setActiveSheetIndex(0)->setCellValue('B'.$i, $no);
          $excel->setActiveSheetIndex(0)->setCellValue('C'.$i, $row->nama_kapal);
          if( ($row->bendera) == 'RI' ) {
            $excel->setActiveSheetIndex(0)->setCellValue('D'.$i, $row->bendera);
            $excel->setActiveSheetIndex(0)->setCellValue('F'.$i, $row->gt1);
            $excel->setActiveSheetIndex(0)->setCellValue('H'.$i, $row->loa1);
            $excel->setActiveSheetIndex(0)->setCellValue('I'.$i, $row->agen);
            $excel->setActiveSheetIndex(0)->setCellValue('J'.$i, $row->nama_barang);
            if( ($row->bongkar) == '0' ){
              $excel->setActiveSheetIndex(0)->setCellValue('K'.$i, "NL");
              $excel->setActiveSheetIndex(0)->setCellValue('L'.$i, $row->muat);
            } 
            elseif( ($row->muat) == '0' ){
              $excel->setActiveSheetIndex(0)->setCellValue('K'.$i, $row->bongkar);
              $excel->setActiveSheetIndex(0)->setCellValue('L'.$i, "NL");
            }
            else {
              $excel->setActiveSheetIndex(0)->setCellValue('K'.$i, $row->bongkar);
              $excel->setActiveSheetIndex(0)->setCellValue('L'.$i, $row->muat);
            }
            $excel->setActiveSheetIndex(0)->setCellValue('M'.$i, "NL");
            $excel->setActiveSheetIndex(0)->setCellValue('N'.$i, "NL");
            $excel->setActiveSheetIndex(0)->setCellValue('O'.$i, "NL");
          }
          

          if( ($row->bendera) != 'RI' ) {
            $excel->setActiveSheetIndex(0)->setCellValue('E'.$i, $row->bendera);
            $excel->setActiveSheetIndex(0)->setCellValue('G'.$i, $row->gt1);
            $excel->setActiveSheetIndex(0)->setCellValue('H'.$i, $row->loa1);
            $excel->setActiveSheetIndex(0)->setCellValue('I'.$i, $row->agen);
            $excel->setActiveSheetIndex(0)->setCellValue('J'.$i, "NL");
            $excel->setActiveSheetIndex(0)->setCellValue('K'.$i, "NL");
            $excel->setActiveSheetIndex(0)->setCellValue('L'.$i, "NL");
            $excel->setActiveSheetIndex(0)->setCellValue('M'.$i, $row->nama_barang);
            if( ($row->bongkar) == '0' ){
              $excel->setActiveSheetIndex(0)->setCellValue('N'.$i, "NL");
              $excel->setActiveSheetIndex(0)->setCellValue('O'.$i, $row->muat);
            } 
            elseif( ($row->muat) == '0' ){
              $excel->setActiveSheetIndex(0)->setCellValue('N'.$i, $row->bongkar);
              $excel->setActiveSheetIndex(0)->setCellValue('O'.$i, "NL");
            }
            else {
              $excel->setActiveSheetIndex(0)->setCellValue('N'.$i, $row->bongkar);
              $excel->setActiveSheetIndex(0)->setCellValue('O'.$i, $row->muat);
            }
          }
          $excel->setActiveSheetIndex(0)->setCellValue('P'.$i, $row->asal);
          $excel->setActiveSheetIndex(0)->setCellValue('Q'.$i, "$row->tanggal_tiba - $row->bulan_tiba - $row->tahun_tiba" );
          $excel->setActiveSheetIndex(0)->setCellValue('R'.$i, $row->tujuan);
          $excel->setActiveSheetIndex(0)->setCellValue('S'.$i, "$row->tanggal_selesai - $row->bulan_selesai - $row->tahun_selesai");
          $excel->setActiveSheetIndex(0)->setCellValue('T'.$i, $row->keterangan);
          $no++;
          $i++;         
        }



        else {
          $excel->setActiveSheetIndex(0)->setCellValue('B'.$i, $no);
          $excel->setActiveSheetIndex(0)->setCellValue('C'.$i, $row->nama_kapal);
          if( ($row->bendera) == 'RI' ) {
            $excel->setActiveSheetIndex(0)->setCellValue('D'.$i, $row->bendera);
            $excel->setActiveSheetIndex(0)->setCellValue('F'.$i, $row->gt1);
            $excel->setActiveSheetIndex(0)->setCellValue('H'.$i, $row->loa1);
            $excel->setActiveSheetIndex(0)->setCellValue('I'.$i, $row->agen);
            $excel->setActiveSheetIndex(0)->setCellValue('J'.$i, $row->nama_barang);
            $excel->setActiveSheetIndex(0)->setCellValue('K'.$i, "NL");
            $excel->setActiveSheetIndex(0)->setCellValue('L'.$i, "NL");
            $excel->setActiveSheetIndex(0)->setCellValue('M'.$i, "NL");
            $excel->setActiveSheetIndex(0)->setCellValue('N'.$i, "NL");
            $excel->setActiveSheetIndex(0)->setCellValue('O'.$i, "NL");

          }
          

          if( ($row->bendera) != 'RI' ) {
            $excel->setActiveSheetIndex(0)->setCellValue('E'.$i, $row->bendera);
            $excel->setActiveSheetIndex(0)->setCellValue('G'.$i, $row->gt1);
            $excel->setActiveSheetIndex(0)->setCellValue('H'.$i, $row->loa1);
            $excel->setActiveSheetIndex(0)->setCellValue('I'.$i, $row->agen);
            $excel->setActiveSheetIndex(0)->setCellValue('J'.$i, "NL");
            $excel->setActiveSheetIndex(0)->setCellValue('K'.$i, "NL");
            $excel->setActiveSheetIndex(0)->setCellValue('L'.$i, "NL");
            $excel->setActiveSheetIndex(0)->setCellValue('M'.$i, $row->nama_barang);
            $excel->setActiveSheetIndex(0)->setCellValue('N'.$i, "NL");
            $excel->setActiveSheetIndex(0)->setCellValue('O'.$i, "NL");
          }
          $excel->setActiveSheetIndex(0)->setCellValue('P'.$i, $row->asal);
          $excel->setActiveSheetIndex(0)->setCellValue('Q'.$i, "$row->tanggal_tiba-$row->bulan_tiba-$row->tahun_tiba" );
          $excel->setActiveSheetIndex(0)->setCellValue('R'.$i, $row->tujuan);
          $excel->setActiveSheetIndex(0)->setCellValue('S'.$i, "$row->tanggal_selesai-$row->bulan_selesai-$row->tahun_selesai");
          $excel->setActiveSheetIndex(0)->setCellValue('T'.$i, $row->keterangan);
          $no++;
          $i++;





          $excel->setActiveSheetIndex(0)->setCellValue('B'.$i, $no);
          $excel->setActiveSheetIndex(0)->setCellValue('C'.$i, $row->nama_kapal2);
          if( ($row->bendera) == 'RI' ) {
            $excel->setActiveSheetIndex(0)->setCellValue('D'.$i, $row->bendera);
            $excel->setActiveSheetIndex(0)->setCellValue('F'.$i, $row->gt2);
            $excel->setActiveSheetIndex(0)->setCellValue('H'.$i, $row->loa2);
            $excel->setActiveSheetIndex(0)->setCellValue('I'.$i, $row->agen);
            $excel->setActiveSheetIndex(0)->setCellValue('J'.$i, $row->nama_barang);
            if( ($row->bongkar) == '0' ){
              $excel->setActiveSheetIndex(0)->setCellValue('K'.$i, "NL");
              $excel->setActiveSheetIndex(0)->setCellValue('L'.$i, $row->muat);
            } 
            elseif( ($row->muat) == '0' ){
              $excel->setActiveSheetIndex(0)->setCellValue('K'.$i, $row->bongkar);
              $excel->setActiveSheetIndex(0)->setCellValue('L'.$i, "NL");
            }
            else {
              $excel->setActiveSheetIndex(0)->setCellValue('K'.$i, $row->bongkar);
              $excel->setActiveSheetIndex(0)->setCellValue('L'.$i, $row->muat);
            }
            $excel->setActiveSheetIndex(0)->setCellValue('M'.$i, "NL");
            $excel->setActiveSheetIndex(0)->setCellValue('N'.$i, "NL");
            $excel->setActiveSheetIndex(0)->setCellValue('O'.$i, "NL");
          }
          

          if( ($row->bendera) != 'RI' ) {
            $excel->setActiveSheetIndex(0)->setCellValue('E'.$i, $row->bendera);
            $excel->setActiveSheetIndex(0)->setCellValue('G'.$i, $row->gt2);
            $excel->setActiveSheetIndex(0)->setCellValue('H'.$i, $row->loa2);
            $excel->setActiveSheetIndex(0)->setCellValue('I'.$i, $row->agen);
            $excel->setActiveSheetIndex(0)->setCellValue('J'.$i, "NL");
            $excel->setActiveSheetIndex(0)->setCellValue('K'.$i, "NL");
            $excel->setActiveSheetIndex(0)->setCellValue('L'.$i, "NL");
            $excel->setActiveSheetIndex(0)->setCellValue('M'.$i, $row->nama_barang);
            if( ($row->bongkar) == '0' ){
              $excel->setActiveSheetIndex(0)->setCellValue('N'.$i, "NL");
              $excel->setActiveSheetIndex(0)->setCellValue('O'.$i, $row->muat);
            } 
            elseif( ($row->muat) == '0' ){
              $excel->setActiveSheetIndex(0)->setCellValue('N'.$i, $row->bongkar);
              $excel->setActiveSheetIndex(0)->setCellValue('O'.$i, "NL");
            }
            else {
              $excel->setActiveSheetIndex(0)->setCellValue('N'.$i, $row->bongkar);
              $excel->setActiveSheetIndex(0)->setCellValue('O'.$i, $row->muat);
            }
          }
          $excel->setActiveSheetIndex(0)->setCellValue('P'.$i, $row->asal);
          $excel->setActiveSheetIndex(0)->setCellValue('Q'.$i, "$row->tanggal_tiba-$row->bulan_tiba-$row->tahun_tiba" );
          $excel->setActiveSheetIndex(0)->setCellValue('R'.$i, $row->tujuan);
          $excel->setActiveSheetIndex(0)->setCellValue('S'.$i, "$row->tanggal_selesai-$row->bulan_selesai-$row->tahun_selesai");
          $excel->setActiveSheetIndex(0)->setCellValue('T'.$i, $row->keterangan);
          $no++;
          $i++;
          
          
        }
      }

      $styleIsi = [
        'alignment' => [
          'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
          'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
          'wrapText' => true,
          ],
          'borders' => [
              'allBorders' => [
                  'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_DOTTED,
              ],
          ],
      ];

      $styleArray = [
        'alignment' => [
          'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
          'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
          'wrapText' => true,
          ],
          'borders' => [
              'allBorders' => [
                  'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
              ],
          ],
      ];
  
      $styleTitle = [
        'alignment' => [
          'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
          'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
          ],
      ];

      $i--;

      $excel->getActiveSheet()->getStyle('B2:B4')->applyFromArray($styleTitle);
      $excel->getActiveSheet()->getStyle('B7:T9')->applyFromArray($styleArray);
      $excel->getActiveSheet()->getStyle('B10:T'.$i)->applyFromArray($styleIsi);



      $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
      // Set orientasi kertas jadi LANDSCAPE
      // Set judul file excel nya
      $excel->getActiveSheet(0)->setTitle("Laporan Kegiatan Bongkar Muat");
      $excel->setActiveSheetIndex(0);
      // Proses file excel
      $writer = new Xlsx($excel);
      $fileName = "Laporan $kat $bulan $tahun" ;



      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header('Content-Disposition: attachment;filename='.$fileName.'.xlsx');
      header('Cache-Control: max-age=0');
  
      $writer->save('php://output');
  
  
      }

}