<?php
namespace App\Controllers\Mahasiswa;
use App\Controllers\BaseController;
use App\Models\M_mahasiswa;

class Pelanggaran extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->auth = new \IonAuth\Libraries\IonAuth();
        $this->user = $this->auth->user()->row();
        $this->group_name = $this->auth->getUsersGroups()->getRow()->name;
        $this->pelanggaranModel = new M_mahasiswa();
    }

    //menampilkan data pelanggaran mahasiswa
    public function index()
    {	
        $builder = $this->pelanggaranModel;
        $builder->join('users','users.id = mahasiswa.id_akun');
        $builder->join('pelanggaran_mahasiswa','pelanggaran_mahasiswa.nim = mahasiswa.nim');
        $builder->where('id_akun', $this->user->id);
        
        $query = $builder->get()->getResult();
        
        $group = 'Mahasiswa';
        if (!$this->auth->inGroup($group))
        {
            return redirect()->back();
        } else {
            $data = [
                'title' => 'Data Pelanggaran',
                'user'  => $this->user,
                'group_name'  => $this->group_name,
                'data'  => $query,
            ];
    
            return view('mahasiswa/pelanggaran', $data);
        }
    }
}