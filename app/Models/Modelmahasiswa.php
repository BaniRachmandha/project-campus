<?php 

namespace App\Models;

use CodeIgniter\Model;

class Modelmahasiswa extends model
{
    protected $table = "db_mahasiswa";
    protected $primaryKey = "id";
    protected $allowedFields = ['nim', 'nama', 'jenis_kelamin', 'tempat', 'tanggal_lahir', 'agama', 'no_hp', 'email', 'alamat', 'created_at', 'updated_at'];

}