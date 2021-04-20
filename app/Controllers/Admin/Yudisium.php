<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Yudisium extends BaseController
{
    //menampilkan data yudisium
	public function index()
	{
		$auth = new \IonAuth\Libraries\IonAuth;
        $data['title'] = 'Data Yudisium';
        $data['user'] = $auth->user()->row();
        $data['group_name'] = $auth->getUsersGroups()->getRow()->name;

        return view('admin/yudisium', $data);
	}
}