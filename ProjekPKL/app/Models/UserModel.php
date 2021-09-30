<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['user_name','user_password','user_created_at'];
    protected $primaryKey = "id";

    public function tot_user()
    {
        return $this->db->table('users')->countAll();
    }


}