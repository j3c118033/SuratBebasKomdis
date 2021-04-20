<?php
namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;
use App\Models\M_mahasiswa;

class InputData extends BaseController
{
	protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->auth = new \IonAuth\Libraries\IonAuth();
        $this->user = $this->auth->user()->row();
        $this->group_name = $this->auth->getUsersGroups()->getRow()->name;
        $this->inputModel = new M_mahasiswa();
    }

    //menampilkan form lengkapi data
    public function index()
    {	
        $builder = $this->inputModel;
        $builder->join('users','users.id = mahasiswa.id_akun');
        $builder->where('id_akun', $this->user->id);
        
        $query = $builder->get()->getResult();
        session();

        $group = 'Mahasiswa';
        if (!$this->auth->inGroup($group))
        {
            return redirect()->back();
        } else {
            $data = [
                'title' => 'Input Data',
                'user'  => $this->user,
                'group_name'  => $this->group_name,
                'data'  => $query,
                'validation' => \Config\Services::validation()
            ];
    
            return view('mahasiswa/inputmahasiswa', $data);
        }
    }

    //tambah data mahasiswa
    /* public function create()
    {
        $builder = $this->inputModel;
        $query = $builder->get()->getResult();

        $this->inputModel->save([
            'tgl_sidang' => $this->request->getVar('tgl_sidang'),
            'foto_ktm' => $this->request->getVar('foto_ktm'),
            'foto_simawa' => $this->request->getVar('foto_simawa'),
            'foto_datalulusan' => $this->request->getVar('foto_datalulusan'),
            'data'  => $query,
        ]);

        return redirect()->to(base_url('mahasiswa/datamahasiswa'));
    }*/

    //lengkapi data mahasiswa
    public function update($nim)
    {
        $builder = $this->inputModel;
        $query = $builder->get()->getResult();

        //validasi input
        if(!$this->validate([
            'foto_ktm' => [
                'rules' => 'uploaded[foto_ktm]|max_size[foto_ktm,200]|is_image[foto_ktm]|mime_in[foto_ktm,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih File Foto Diri dan KTM Terlebih Dahulu',
                    'max_size' => 'File Foto Diri dan KTM Lebih dari 200KB',
                    'is_image' => 'File Foto Diri dan KTM Harus Berbentuk Gambar',
                    'mime_in' => 'File Foto Diri dan KTM di Upload dengan Format .JPG, .JPEG, atau .PNG'
                ]
            ],
            'foto_simawa' => [
                'rules' => 'uploaded[foto_simawa]|max_size[foto_simawa,200]|is_image[foto_simawa]|mime_in[foto_simawa,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih File Bukti Pengisian SIMAWA Terlebih Dahulu',
                    'max_size' => 'File Bukti Pengisian SIMAWA Lebih dari 200KB',
                    'is_image' => 'File Bukti Pengisian SIMAWA Harus Berbentuk Gambar',
                    'mime_in' => 'File Bukti Pengisian SIMAWA di Upload dengan Format .JPG, .JPEG, atau .PNG'
                ]
            ],
            'foto_datalulusan' => [
                'rules' => 'uploaded[foto_datalulusan]|max_size[foto_datalulusan,200]|is_image[foto_datalulusan]|mime_in[foto_datalulusan,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih File Bukti Pengisian Data Lulusan Terlebih Dahulu',
                    'max_size' => 'File Bukti Pengisian Data Lulusan Lebih dari 200KB',
                    'is_image' => 'File Bukti Pengisian Data Lulusan Harus Berbentuk Gambar',
                    'mime_in' => 'File Bukti Pengisian Data Lulusan di Upload dengan Format .JPG, .JPEG, atau .PNG'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('mahasiswa/inputdata'))->withInput();
        }

        //ambil gambar
        $fileKTM = $this->request->getFile('foto_ktm');
        $fileSIMAWA =$this->request->getFile('foto_simawa');
        $fileLULUSAN =$this->request->getFile('foto_datalulusan');
        
        //pindahkan file ke folder asset
        $fileKTM->move('../public/fotoKTM');
        $fileSIMAWA->move('../public/fotoSIMAWA');
        $fileLULUSAN->move('../public/fotoDATALULUSAN');

        //ambil nama file
        $namaKTM = $fileKTM->getName();
        $namaSIMAWA = $fileSIMAWA->getName();
        $namaLULUSAN = $fileLULUSAN->getName();
    

        $data_input=[
            'nim' =>$nim,
            'foto_ktm' => $namaKTM,
            'foto_simawa' => $namaSIMAWA,
            'foto_datalulusan' => $namaLULUSAN,
        ];
        $this->inputModel->update($nim,$data_input);

        session()->setFlashData('sukses','Data Berhasil Dimasukkan');

        return redirect()->to(base_url('mahasiswa/datamahasiswa'));
    }
}