<?php namespace App\Models;

use CodeIgniter\Model;

class LayananModel extends Model
{
    protected $table = 'layanan';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama', 'harga', 'deskripsi', 'estimasi', 'gambar', 'created_by', 'created_date', 'update_by', 'update_date'
    ];
    protected $returnType = 'App\Entities\Layanan';
    protected $useTimeStamps = false;

}