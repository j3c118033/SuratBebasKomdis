<?php

namespace App\Models;

use CodeIgniter\Model;

class M_grafik1 extends Model{
    public function __construct(){
        $this->db = db_connect();
    }

    public function getAllData(){
        return $this->db->table('grafik_1')->get()->getResultArray();
    }

    public function getTerverifikasi(){
        return $this->db->table('terverifikasi')->get()->getResultArray();
    }

    public function getTidakTerverifikasi(){
        return $this->db->table('tidakterverifikasi')->get()->getResultArray();
    }

    public function getTglSidang(){
        return $this->db->table('tgl_sidang')->get()->getResultArray();
    }
}