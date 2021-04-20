<!--Panggil Tamplate pada folder layout-->
<?= $this->extend('layout/index');?>
<!--end topbar-->

<!--start content-->
<?= $this->section('page-content');?>
    <!--conten Data Verifikasi-->
        <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- tabel data verifikasi -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="judul1">Data Verifikasi Mahasiswa Seluruh Program Studi</h1>
                                <hr class="garis1">
                                
                                <!-- Print excel -->
                                <div class="col-md">
                                    <a href="<?= base_url('akademik/verif/printexcel'); ?>" class="btn btn-success" style="margin-bottom:20px; margin-left:0">Rekap Data &nbsp;&nbsp;<i class="fas fa-download"></i></a> 
                                </div>

                                <!-- tabel data -->
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr class="tabel1">
                                                <th>No</th>
                                                <th>Mahasiswa</th>
                                                <th>Program Studi</th>
                                                <th>Tanggal Sidang</th>
                                                <th>Foto KTM</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($verif as $verif) : ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $verif->nim;?> - <?= $verif->nama;?></td>
                                                    <td><?= $verif->prodi;?></td>
                                                    <td>
                                                    <?php
                                                        if (is_null($verif->tgl_sidang)==TRUE){
                                                            echo "Belum diinput";
                                                        } else {
                                                            setlocale(LC_TIME, 'Indonesian');
                                                            $newDate = strftime("%d %B %Y",strtotime($verif->tgl_sidang));
                                                            echo $newDate;
                                                        }  
                                                    ?>
                                                    </td>
                                                    <td><img class="profile" src="<?= base_url('../fotoKTM/'.$verif->foto_ktm) ;?>"></td>
                                                    <td>
                                                    <?php 
                                                        $status = $method->getStatus($verif->nim);
                                                            if ($status == "belumproses"){
                                                                echo '<span class="badge badge-danger">Belum di Proses</span>';
                                                            } elseif ($status == "proses"){
                                                                echo '<span class="badge badge-success">Selesai di Proses</span>';
                                                            } elseif ($status == "menunggu"){
                                                                echo '<span class="badge badge-warning">Verifikasi di Tunda</span>';
                                                            } 
                                                    ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                            <?php $no ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--end tabel data verifikasi -->
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
<?= $this->endSection();?>
<!--end content-->