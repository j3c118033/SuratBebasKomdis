<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\M_dosen;

class Dosen extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->auth = new \IonAuth\Libraries\IonAuth();
        $this->user = $this->auth->user()->row();
        $this->group_name = $this->auth->getUsersGroups()->getRow()->name;
        $this->group_id = $this->auth->getNameGroup('Dosen')->id;
        $this->dosenModel = new M_dosen();
    }

    //menampilkan data dosen
    public function index()
    {	
        $builder = $this->dosenModel;
        $builder->orderBy('id_akun', 'DESC');
        $query = $builder->get()->getResult();

        $group = 'Admin';
        if (!$this->auth->inGroup($group))
        {
            return redirect()->back();
        } else {

            $data = [
                'title' => 'Data Dosen',
                'user'  => $this->user,
                'group_name'  => $this->group_name,
                'dosen'  => $query,
            ];
    
            return view('admin/dosen', $data);
        }
    }

    //tambah data dosen
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
                $data_dosen=[
                    'title' => 'Tambah Data Dosen',
                    'id' => $this->request->getPost('id'),
                    'nama' => $this->request->getPost('nama'),
                    'id_akun' =>$last_id,
                ];
                $this->dosenModel->insert($data_dosen);
            }
        } else{
            echo "Akun sudah ada";
        }

        session()->setFlashData('sukses','Data Berhasil Dimasukkan');
        
        return redirect()->to(base_url('admin/dosen'));
    }
}