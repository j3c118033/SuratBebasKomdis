<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\M_mahasiswa;

class Verif extends BaseController
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
        $builder->orderBy('tgl_sidang','ASC');
        $query = $builder->get()->getResult();

        $group = 'Admin';
        if (!$this->auth->inGroup($group))
        {
            return redirect()->back();
        } else {
            
            $data = [
                'title' => 'Verifikasi Data',
                'user'  => $this->user,
                'group_name'  => $this->group_name,
                'verif'  => $query,
                'method' => $this->verifModel,
                //'prodi' => $prodi
            ];
    
            return view('admin/verifikasi', $data);
        }

        /*if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user
            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                $prodi = $_GET['prodi'];
                    
                $prodi = $this->verifModel->viewProdi($prodi); // Panggil fungsi view_by_date yang ada di TransaksiModel
            }
        }
        
        $data = [
            //'prodi' => $prodi,
            'user'  => $this->user,
            'group_name'  => $this->group_name,
            'verif' => $this->verifModel->getResult(),
         ];

        return view('admin/verifikasi', $data);*/
    }

    //masukan tanggal verifikasi
    public function update($nim)
    {
        $builder = $this->verifModel;
        $query = $builder->get()->getResult();

        $data_verif=[
            'title' => 'Tambah Data Verifikasi',
            'nim' =>$nim,
            'tgl_bebas_komdis' => $this->request->getPost('tgl_bebas_komdis'),
            'komentar' => $this->request->getPost('komentar'),
        ];
        $this->verifModel->update($nim,$data_verif);

        session()->setFlashData('sukses','Data Berhasil Dimasukkan');

        return redirect()->to(base_url('admin/verifikasi'));
    }

    public function printExcel()
    {
        $builder = $this->verifModel;
        $query = $builder->get()->getResult();

        $data = [
            'user'  => $this->user,
            'group_name'  => $this->group_name,
            'hasil' => $query
        ];

        echo view('admin/excel', $data);
    }
}