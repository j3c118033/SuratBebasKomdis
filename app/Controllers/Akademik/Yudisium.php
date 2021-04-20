<?php
namespace App\Controllers\Akademik;

use App\Controllers\BaseController;

class Yudisium extends BaseController
{
	public function index()
	{
		$auth = new \IonAuth\Libraries\IonAuth;
        $data['title'] = 'Data Yudisium';
        $data['user'] = $auth->user()->row();
        $data['group_name'] = $auth->getUsersGroups()->getRow()->name;

        return view('akademik/yudisium', $data);
	}
}