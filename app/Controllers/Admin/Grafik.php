<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\M_mahasiswa;

class Grafik extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->auth = new \IonAuth\Libraries\IonAuth();
        $this->user = $this->auth->user()->row();
        $this->group_name = $this->auth->getUsersGroups()->getRow()->name;
        $this->grafikModel = new M_mahasiswa();
    }

    //Menampilkan data grafik
	public function index()
	{
        $data = [
            'user'  => $this->user,
            'group_name'  => $this->group_name,
            'grafik1'  => $this->grafikModel->grafik1(),
        ];

        return view ('admin/index', $data);
	}
}