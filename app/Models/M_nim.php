<?php

namespace App\Models;

use CodeIgniter\Model;

class M_nim extends Model{
    public function getData()
    {
        $query = $this->db->query("SELECT * FROM mahasiswa");
        return $query->getResultArray();
    }
}