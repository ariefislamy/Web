<?php namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id_layanan', 'id_pembeli', 'berat', 'total_harga', 'alamat', 'ongkir', 'created_by', 'created_date', 'update_by', 'update_date', 'status',
    ];
    protected $returnType = 'App\Entities\Transaksi';
    protected $useTimeStamps = false;

}