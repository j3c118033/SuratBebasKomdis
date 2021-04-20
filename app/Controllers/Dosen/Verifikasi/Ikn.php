<?php
namespace App\Controllers\Dosen\Verifikasi;
use App\Controllers\BaseController;
use App\Models\M_mahasiswa;

class Ikn extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->auth = new \IonAuth\Libraries\IonAuth();
        $this->user = $this->auth->user()->row();
        $this->group_name = $this->auth->getUsersGroups()->getRow()->name;
        $this->verifModel = new M_mahasiswa();
    }

    //menampilkan data verifikasi
    public function index()
    {	
        $builder = $this->verifModel;
        $builder -> where('prodi','H-IKN');
        $builder->orderBy('tgl_sidang', 'ASCE');
        $query = $builder->get()->getResult();

        $group = 'Dosen';
        if (!$this->auth->inGroup($group))
        {
            return redirect()->back();
        } else {

            $data = [
                'title' => 'Data Verifikasi',
                'user'  => $this->user,
                'group_name'  => $this->group_name,
                'verif'  => $query,
                'method' => $this->verifModel,
            ];
    
            return view('dosen/verif/ikn', $data);
        }
    }

    //masukan tanggal verifikasi
    public function update($nim)
    {
        $builder = $this->verifModel;
        $query = $builder->get()->getResult();

        $data_verif=[
            'nim' =>$nim,
            'tgl_bebas_komdis' => $this->request->getPost('tgl_bebas_komdis'),
            'komentar' => $this->request->getPost('komentar'),
        ];
        $this->verifModel->update($nim,$data_verif);

        return redirect()->to(base_url('dosen/verifikasi/ikn'));
    }

    public function printExcel()
    {
        $builder = $this->verifModel;
        $builder -> where('prodi', 'H-IKN');
        $query = $builder->get()->getResult();

        $data = [
            'user'  => $this->user,
            'group_name'  => $this->group_name,
            'hasil' => $query
        ];

        echo view('dosen/excel', $data);
    }
}