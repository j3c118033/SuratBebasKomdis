<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\M_akademik;

class Akademik extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->auth = new \IonAuth\Libraries\IonAuth();
        $this->user = $this->auth->user()->row();
        $this->group_name = $this->auth->getUsersGroups()->getRow()->name;
        $this->group_id = $this->auth->getNameGroup('Akademik')->id;
        $this->akademikModel = new M_akademik();
    }

    //menampilkan data akademik
    public function index()
    {	
        $builder = $this->akademikModel;
        $builder->orderBy('id_akun', 'DESC');
        $query = $builder->get()->getResult();

        $group = 'Admin';
        if (!$this->auth->inGroup($group))
        {
            return redirect()->back();
        } else {

            $data = [
                'title' => 'Data Akademik',
                'user'  => $this->user,
                'group_name'  => $this->group_name,
                'akademik'  => $query,
            ];
    
            return view('admin/akademik', $data);
        }
    }

    //tambah data akademik
    public function create()
    {
        
        $username = $this->request->getPost('id');
        $password = $this->request->getPost('id');
        $email = $this->request->getPost('id').'@gmail.com';
        $additional_data = array(
            'active' => 1,
        );

        if (!$this->auth->usernameCheck($username))
        {
            $group = array($this->group_id);
            $last_id = $this->auth->register($username, $password, $email, $additional_data, $group);
            if($last_id){
                $data_akademik=[
                    'title' => 'Tambah Data Akademik',
                    'id' => $this->request->getPost('id'),
                    'nama' => $this->request->getPost('nama'),
                    'id_akun' =>$last_id,
                ];
                $this->akademikModel->insert($data_akademik);
            }
        } else{
            echo "Akun sudah ada";
        }

        session()->setFlashData('sukses','Data Berhasil Dimasukkan');
        
        return redirect()->to(base_url('admin/akademik'));
    }
}