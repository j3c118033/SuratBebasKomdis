<?php
namespace App\Controllers\Akademik;
use App\Controllers\BaseController;
use App\Models\M_mahasiswa;

class Input extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->auth = new \IonAuth\Libraries\IonAuth();
        $this->user = $this->auth->user()->row();
        $this->group_name = $this->auth->getUsersGroups()->getRow()->name;
        $this->group_id = $this->auth->getNameGroup('Akademik')->id;
        $this->sidangModel = new M_mahasiswa();
    }

    //menampilkan data tanggal sidang mahasiswa
    public function index()
    {	
        $builder = $this->sidangModel;
        $builder->orderBy('tgl_sidang', 'DESC');
        $query = $builder->get()->getResult();

        $group = 'Akademik';
        if (!$this->auth->inGroup($group))
        {
            return redirect()->back();
        } else {

            $data = [
                'title' => 'Input Tanggal Sidang',
                'user'  => $this->user,
                'group_name'  => $this->group_name,
                'data'  => $query,
            ];
    
            return view('akademik/input', $data);
        }
    }

    //tambah Tanggal sidang
    public function update()
    {
        $builder = $this->sidangModel;
        $query = $builder->get()->getResult();

        $nim = $this->request->getPost('nim');

        if ($this->auth->usernameCheck($nim))
        {
            $data_sidang=[
                'nim' =>$nim,
                'tgl_sidang' => $this->request->getPost('tgl_sidang'),
            ];
                
            $this->sidangModel->update($nim,$data_sidang);
        } else{
            echo "nim belum terdaftar";
        }

        return redirect()->to(base_url('akademik/input'));
    }

    public function pencarian(){
        $prodi=$this->request->getPost('prodi');
        $builder = $this->sidangModel;
        $builder->where('prodi', $prodi);
        $query = $builder->get()->getResult();

        $data_cari = [
            'title' => 'Data Mahasiswa',
            'prodi' => $prodi,
            'user'  => $this->user,
            'group_name'  => $this->group_name,
            'siswa' => $query
        ];

        return view('akademik/input', $data_cari);
    }
}