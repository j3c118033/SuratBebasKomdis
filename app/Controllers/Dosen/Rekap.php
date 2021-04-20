<?php
namespace App\Controllers\Dosen;

use App\Controllers\BaseController;
use App\Models\M_mahasiswa;

class Rekap extends BaseController
{
	protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->auth = new \IonAuth\Libraries\IonAuth();
        $this->user = $this->auth->user()->row();
        $this->group_name = $this->auth->getUsersGroups()->getRow()->name;
        $this->rekapModel = new M_mahasiswa();
    }

    //menampilkan data komdisma
    public function index()
    {	
        $builder = $this->rekapModel;
        $query = $builder->get()->getResult();

        $group = 'Dosen';
        if (!$this->auth->inGroup($group))
        {
            return redirect()->back();
        } else {

            $data = [
                'title' => 'Rekap Data Verifikasi',
                'user'  => $this->user,
                'group_name'  => $this->group_name,
                'hasil' => $query
            ];
    
            return view('dosen/rekap', $data);
        }
    }

    /*public function pencarian($prodi){
        $builder = $this->rekapModel;
        $builder->where('prodi', $prodi);
        $query = $builder->get()->getResult();

        $prodi=$this->request->getVar('prodi');

        $data = [
            'user'  => $this->user,
            'group_name'  => $this->group_name,
            'rekap'  => $query,

        ];
        $this->load->view("anak/carianak",$data); // ini view menampilkan hasil pencarian
    }*/

    public function pencarian(){
        $prodi=$this->request->getPost('prodi');
        $builder = $this->rekapModel;
        $builder->where('prodi', $prodi);
        $query = $builder->get()->getResult();

        $data = [
            'prodi' => $prodi,
            'user'  => $this->user,
            'group_name'  => $this->group_name,
            'hasil' => $query
        ];

        return view('dosen/rekap', $data);
    }

    public function printExcel()
    {
        $builder = $this->rekapModel;
        $query = $builder->get()->getResult();

        $data = [
            'user'  => $this->user,
            'group_name'  => $this->group_name,
            'hasil' => $query
        ];

        echo view('dosen/excel', $data);
    }
}