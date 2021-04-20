<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\M_mahasiswa;

class Coba extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->auth = new \IonAuth\Libraries\IonAuth();
        $this->user = $this->auth->user()->row();
        $this->group_name = $this->auth->getUsersGroups()->getRow()->name;
        $this->cobaModel = new M_mahasiswa();
    }

    //menampilkan data pelanggaran mahasiswa
    public function index()
    {
        
            $data = [
                'title' => 'Data Pelanggaran',
                'user'  => $this->user,
                'group_name'  => $this->group_name,
                'data'  => $this->cobaModel->getGrafik1()
            ];
    
            return view('coba', $data);
    }
}