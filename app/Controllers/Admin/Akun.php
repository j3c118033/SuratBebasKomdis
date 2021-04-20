<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\M_akun;
use App\Models\M_groups;

class Akun extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->auth = new \IonAuth\Libraries\IonAuth();
        $this->user = $this->auth->user()->row();
        $this->group_name = $this->auth->getUsersGroups()->getRow()->name;
        $this->group_id = $this->auth->getNameGroup('Admin')->id;
        $this->akunModel = new M_akun();
        $this->groupsModel = new M_groups();
    }

    //menampilkan data komdisma
    public function index()
    {	
        $builder = $this->akunModel;
        $builder->join('users','users.id = users_groups.user_id');
        $builder->join('groups','groups.id = users_groups.group_id');
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
                'akun'  => $query,
            ];
    
            return view('admin/akun', $data);
        }
    }
    //Menampilkan data akun
	/*public function index()
	{
		$auth = new \IonAuth\Libraries\IonAuth;
        $data['title'] = 'Data Akun';
        $data['user'] = $auth->user()->row();
        $data['group_name'] = $auth->getUsersGroups()->getRow()->name;
        $model = new M_akun();
        $data['akun'] = $model->getAllData();

        return view('admin/akun', $data);
	}*/

    public function pencarian(){
        $name=$this->request->getPost('name');
        $builder = $this->akunModel;
        $builder->join('users','users.id = users_groups.user_id');
        $builder->join('groups','groups.id = users_groups.group_id');
        $builder->where('name', $name);
        $query = $builder->get()->getResult();

        $data = [
            'title' => 'Data Akun',
            'name' => $name,
            'user'  => $this->user,
            'group_name'  => $this->group_name,
            'akun' => $query
        ];

        return view('admin/akun', $data);
    }
}