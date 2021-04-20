<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_users;
use App\Models\M_grafik1;


class Dashboard extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->auth = new \IonAuth\Libraries\IonAuth();
        $this->user = $this->auth->user()->row();
        $this->group_name = $this->auth->getUsersGroups()->getRow()->name;
        $this->dataModel = new M_users();
        $this->grafikModel = new M_grafik1();
    }

    //menampilkan data komdisma
    public function index()
    {	
        $builder = $this->dataModel;
        $builder->join('mahasiswa','mahasiswa.id_akun = users.id');
        $builder->where('id_akun', $this->user->id);
        
        $query = $builder->get()->getResult();

        $data = [
            'title' => 'Dashboard',
            'user'  => $this->user,
            'group_name'  => $this->group_name,
            'data'  => $query,
            'grafik' => $this->grafikModel->getAllData(),
            'grafik_verif' => $this->grafikModel->getTerverifikasi(),
            'grafik_tidak' => $this->grafikModel->getTidakTerverifikasi(),
            'grafik_sidang' => $this->grafikModel->getTglSidang()
        ];

        return view('dashboard', $data);
        return view('layout/footer_v', $data);
	}

    
}