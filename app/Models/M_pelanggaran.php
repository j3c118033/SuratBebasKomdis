<?php namespace App\Models;

use CodeIgniter\Model;

class M_pelanggaran extends Model{
    protected $table      = 'pelanggaran_mahasiswa';
    protected $primaryKey = 'id';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id', 'nim', 'tingkat', 'tanggal', 'jam', 'id_lokasi', 'jenis_pelanggaran', 'keterangan', 'id_pelapor', 'bukti_foto', 'inspektur', 'tgl_verifikasi', 'id_sanksi', 'tgl_surat_bebas'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function __construct(){
        $this->db = \Config\Database::connect();
        $this->tb_pelanggaran = $this->db->table('pelanggaran_mahasiswa');
        $this->tb_lapor = $this->db->table('lapor_pelanggaran');
    }

    public function getStatusPelanggaran($id_pelanggaran){
        $builder = $this->tb_pelanggaran;
        $builder->where('id', $id_pelanggaran);
        $query = $builder->get()->getRow();
        $inspektor = $query->inspektor;
        $tgl_surat_bebas = $query->tgl_surat_bebas;

        if (is_null($inspektor) == TRUE){
            $status = 'Menunggu';
        } elseif ((is_null($inspektor)== FALSE) AND  (is_null($tgl_surat_bebas)== TRUE)){
            $status = 'Proses';
        } elseif ((is_null($inspektor)== FALSE) AND  (is_null($tgl_surat_bebas)== FALSE)){
            $status = 'Selesai';
        }

        return $status;
    }
}
