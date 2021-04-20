<?php
namespace App\Controllers\Mahasiswa;
use App\Controllers\BaseController;
use App\Models\M_mahasiswa;

class DataMahasiswa extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->auth = new \IonAuth\Libraries\IonAuth();
        $this->user = $this->auth->user()->row();
        $this->group_name = $this->auth->getUsersGroups()->getRow()->name;
        $this->dataModel = new M_mahasiswa();
    }

    //menampilkan data mahasiswa
    public function index()
    {	
        $builder = $this->dataModel;
        $builder->join('users','users.id = mahasiswa.id_akun');
        //$builder->join('pelanggaran_mahasiswa','pelanggaran_mahasiswa.nim = mahasiswa.nim');
        $builder->where('id_akun', $this->user->id);
        
        $query = $builder->get()->getResult();
        session();
        
        $group = 'Mahasiswa';
        if (!$this->auth->inGroup($group))
        {
            return redirect()->back();
        } else {

            $data = [
                'title' => 'Data Diri Mahasiswa',
                'user'  => $this->user,
                'group_name'  => $this->group_name,
                'data'  => $query,
                'method' => $this->dataModel
            ];
    
            return view('mahasiswa/datamahasiswa', $data);
        }
    }

    public function edit()
    {	
        $builder = $this->dataModel;
        $builder->join('users','users.id = mahasiswa.id_akun');
        $builder->where('id_akun', $this->user->id);
        
        $query = $builder->get()->getResult();

        $data = [
            'user'  => $this->user,
            'group_name'  => $this->group_name,
            'data'  => $query,
        ];

        return view('mahasiswa/inputmahasiswa', $data);
    }
    //tambah data mahasiswa
}