<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\M_admin;

class Admin extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->auth = new \IonAuth\Libraries\IonAuth();
        $this->user = $this->auth->user()->row();
        $this->group_name = $this->auth->getUsersGroups()->getRow()->name;
        $this->group_id = $this->auth->getNameGroup('Admin')->id;
        $this->adminModel = new M_admin();
    }

    //menampilkan data komdisma
    public function index()
    {	
        $builder = $this->adminModel;
        $builder->orderBy('id_akun', 'DESC');
        $query = $builder->get()->getResult();

        $group = 'Admin';
        if (!$this->auth->inGroup($group))
        {
            return redirect()->back();
        } else {

            $data = [
                'title' => 'Data Admin',
                'user'  => $this->user,
                'group_name'  => $this->group_name,
                'admin'  => $query,
            ];
    
            return view('admin/admin', $data);
        }
    }

    //tambah data komdisma
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
                $data_komdisma=[
                    'title' => 'Tambah Data Admin',
                    'id' => $this->request->getPost('id'),
                    'nama' => $this->request->getPost('nama'),
                    'id_akun' =>$last_id,
                ];
                $this->adminModel->insert($data_komdisma);
            }
        } else{
            echo "Akun sudah ada";
        }
        return redirect()->to(base_url('admin/admin'));
    }
}