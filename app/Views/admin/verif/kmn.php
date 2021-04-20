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
                            <!-- bagian judul -->
                            <div class="card-body">
                                <h1 class="judul1">Data Verifikasi Mahasiswa Komunikasi</h1>
                                <hr class="garis1">

                                <!-- alert input verifkasi -->
                                <?php
                                    if(!empty(session()->getFlashdata('sukses'))) { ?>
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                            <?php echo session()->getFlashdata('sukses');?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                <?php } ?>
                                
                                <!-- print excel -->
                                <div class="col-md">
                                    <a href="<?= base_url('admin/verifikasi/kmn/printexcel'); ?>" class="btn btn-success" style="margin-bottom:20px; margin-left:0">Rekap Data &nbsp;&nbsp;<i class="fas fa-download"></i></a> 
                                </div>
                                
                                <!-- tabel data verifikasi -->
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr class="tabel1">
                                                <th>No</th>
                                                <th>Mahasiswa</th>
                                                <th>Tanggal Sidang</th>
                                                <th>Foto Diri dan KTM</th>
                                                <th>Bukti SIMAWA</th>
                                                <th>Bukti Data Lulusan</th>
                                                <th>Status</th>
                                                <th>Verifikasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($verif as $verif) : ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $verif->nim;?> - <?= $verif->nama; ?></td>
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
                                                    <td><img class="profile" src="<?= base_url('../fotoSIMAWA/'.$verif->foto_simawa); ?>"></td>
                                                    <td><img class="profile" src="<?= base_url('../fotoDATALULUSAN/'.$verif->foto_datalulusan); ?>"></td>
                                                    <td>
                                                    <!-- status verifikasi mahasiswa -->
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
                                                    <td>
                                                    <!-- Proses Verifikasi -->
                                                        <!-- Button trigger modal -->
                                                            <?php
                                                            if((is_null($verif->tgl_bebas_komdis)==TRUE) AND (empty($verif->komentar))) { ?>
                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?= $verif->nim;?>" style="margin:0">
                                                                    <i class="fas fa-check"></i>
                                                                </button>
                                                            <?php } elseif ((is_null($verif->tgl_bebas_komdis)==FALSE) AND (!empty($verif->komentar))) { ?>
                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?= $verif->nim;?>" style="margin:0">
                                                                    <i class="fas fa-check"></i>
                                                                </button>
                                                            <?php } elseif ((is_null($verif->tgl_bebas_komdis)==TRUE) AND (!empty($verif->komentar))) { ?>
                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?= $verif->nim;?>" style="margin:0">
                                                                    <i class="fas fa-check"></i>
                                                                </button>
                                                            <?php } else { ?>
                                                                <button type="button" class="btn btn-primary disabled" data-toggle="modal" data-target="#exampleModal<?= $verif->nim;?>" style="margin:0">
                                                                    <i class="fas fa-check"></i>
                                                                </button>
                                                            <?php } ?>

                                                        <!-- Modal1 -->
                                                        <!--form input-->
                                                        <form action="<?= base_url('/admin/verifikasi/kmn/update/'.$verif->nim);?>" method="POST">
                                                        <?= csrf_field();?>
                                                            <div class="modal fade" id="exampleModal<?= $verif->nim;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Verifikasi Mahasiswa</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                        
                                                                    <div class="modal-body">
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-12">
                                                                                <label for="nim" class="label7">NIM Mahasiswa</label>
                                                                                    <input type="text" class="form-control" name="nim" id="nim" value="<?= $verif->nim; ?>" readonly>
                                                                            </div>
                                                                            <div class="form-group col-md-12">
                                                                                <label for="tgl_bebas_komdis" class="label7">Tanggal Verifikasi</label>
                                                                                <input type="date" class="form-control" name="tgl_bebas_komdis" id="tgl_bebas_komdis">
                                                                                <p class="label12">Note : Tanggal Verifikasi diisikan apabila data yang mahasiswa inputkan sudah sesuai</p>
                                                                            </div>
                                                                            <div class="form-group col-md-12">
                                                                                <label for="komentar" class="label7">Komentar</label>
                                                                                <input type="text" class="form-control" name="komentar" id="komentar">
                                                                                <p class="label12">Note : Komentar diisikan apabila data yang mahasiswa inputkan tidak sesuai</p>
                                                                            </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-success" style="margin:0">Proses</button>
                                                                        <button type="submit" class="btn btn-danger" style="margin:0; margin-left:10"><a href=<?= base_url('admin/mahasiswa'); ?>>Batal Proses</a></button>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <!--end form input-->
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
                    <!-- end tabel data verifikasi -->
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
<?= $this->endSection();?>
<!--end content-->