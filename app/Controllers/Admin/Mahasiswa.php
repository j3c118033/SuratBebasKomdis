<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\M_mahasiswa;

class Mahasiswa extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->auth = new \IonAuth\Libraries\IonAuth();
        $this->user = $this->auth->user()->row();
        $this->group_name = $this->auth->getUsersGroups()->getRow()->name;
        $this->group_id = $this->auth->getNameGroup('Mahasiswa')->id;
        $this->mhsModel = new M_mahasiswa();
    }

    //menampilkan data mahasiswa
    public function index()
    {	
        $builder = $this->mhsModel;
        $builder->orderBy('id_akun', 'DESC');
        $query = $builder->get()->getResult();

        $group = 'Admin';
        if (!$this->auth->inGroup($group))
        {
            return redirect()->back();
        } else {

            $data = [
                'title' => 'Data Mahasiswa',
                'user'  => $this->user,
                'group_name'  => $this->group_name,
                'siswa'  => $query,
            ];
    
            return view('admin/mahasiswa', $data);
        }
    }

    //tambah data mahasiswa
    public function create()
    {
        
        $username = $this->request->getPost('nim');
        $password = $this->request->getPost('nim');
        $email = $this->request->getPost('nim').'@gmail.com';
        $additional_data = array(
            'active' => 1,
        );

        if (!$this->auth->usernameCheck($username))
        {
            $group = array($this->group_id);
            $last_id = $this->auth->register($username, $password, $email, $additional_data, $group);
            if($last_id){
                $data_mahasiswa=[
                    'title' => 'Tambah Data Mahasiswa',
                    'nim' => $this->request->getPost('nim'),
                    'nama' => $this->request->getPost('nama'),
                    'prodi' => $this->request->getPost('prodi'),
                    'id_akun' =>$last_id,
                ];
                $this->mhsModel->insert($data_mahasiswa);
            }
        } else{
            echo "Akun sudah ada";
        }

        session()->setFlashData('sukses','Data Berhasil Dimasukkan');
        
        return redirect()->to(base_url('admin/mahasiswa'));
    }


    public function pencarian(){
        $prodi=$this->request->getPost('prodi');
        $builder = $this->mhsModel;
        $builder->where('prodi', $prodi);
        $query = $builder->get()->getResult();

        $data = [
            'title' => 'Data Mahasiswa',
            'prodi' => $prodi,
            'user'  => $this->user,
            'group_name'  => $this->group_name,
            'siswa' => $query
        ];

        return view('admin/mahasiswa', $data);
    }
}