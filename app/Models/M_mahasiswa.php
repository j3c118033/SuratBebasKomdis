<?php namespace App\Models;

use CodeIgniter\Model;

class M_mahasiswa extends Model{
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'nim';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nim', 'id_akun','nama', 'prodi', 'tgl_surat_kelakukan', 'tgl_sidang', 'tgl_bebas_komdis', 'komentar', 'foto_ktm', 'foto_simawa', 'foto_datalulusan'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function __construct(){
        $this->db = \Config\Database::connect();
        $this->tb_mahasiswa = $this->db->table('mahasiswa');
    }
    // mengambil data status
    public function getStatus($nim){
        $builder = $this->tb_mahasiswa;
        $builder->where('nim', $nim);
        $query = $builder->get()->getRow();
        $tgl_sidang = $query->tgl_sidang;
        $tgl_bebas_komdis = $query->tgl_bebas_komdis;
        $komentar = $query->komentar;

        //CATATAN :
        /*  TRUE = Data Kosong
            FALSE = Data Ada Nilainya
        */

        if ((is_null($tgl_sidang) == TRUE) AND (is_null($tgl_bebas_komdis) == FALSE)){
            $status = 'belumproses';
        } elseif ((is_null($tgl_sidang) == FALSE) AND (is_null($tgl_bebas_komdis) == TRUE)){
            $status = 'belumproses';
        } elseif ((is_null($tgl_sidang) == TRUE) AND (is_null($tgl_bebas_komdis) == TRUE)){
            $status = 'belumproses';
        } elseif ((is_null($tgl_sidang) == FALSE) AND (is_null($tgl_bebas_komdis) == FALSE) AND !empty($komentar)){
            $status = 'menunggu';
        }elseif ((is_null($tgl_sidang) == FALSE) AND (is_null($tgl_bebas_komdis) == FALSE)){
            $status = 'proses';
        }

        return $status;
    }

    //update verifikasi
    public function updateVerif($nim){
        $builder = $this->tb_mahasiswa;
        $builder->where('nim', $nim);
        $query = $builder->get()->getRow();
    }


    //filtering dropdown
    public function pencarian_d($prodi){
        $builder = $this->tb_mahasiswa;
        $builder->where('prodi', $prodi);
        $query = $builder->get()->getRow();
    }

    public function getGrafik1()
    {
        $query = $this->db->query('SELECT prodi, COUNT( tgl_bebas_komdis ) AS total FROM mahasiswa GROUP BY prodi');
        return $query->getResultArray();
        
        //$builder = $this->tb_mahasiswa;
        //$builder->select('prodi');
        //$builder->count('tgl_bebas_komdis' as 'total');
        //$builder->groupBy('prodi');

        //$query = $builder->get()->getRow();

    }

    

}
