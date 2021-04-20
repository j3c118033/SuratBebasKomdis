<!--Panggil Tamplate pada folder layout-->
<?= $this->extend('layout/index');?>
<!--end panggil-->

<!--start content-->
<?= $this->section('page-content');?>
    <!--conten Data Mahasiswa-->
        <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <!-- Pelanggaran Mahasiswa -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body wizard-content">
                        <div class="section4">
                            <p class="label2">Pelanggaran Mahasiswa</p>
                                <hr class="garis" style="margin-bottom:30px">
                                    
                                    <div class="table-responsive">
                                            <table id="zero_config" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr class="tabel1">
                                                        <th>No</th>
                                                        <th>NIM</th>
                                                        <th>Nama</th>
                                                        <th>Pelanggaran</th>
                                                        <th>tanggal</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php $no = 1 ?>
                                                <?php foreach ($data as $data_pelanggaran) : ?> 
                                                    <tr class="tabel1">
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $data_pelanggaran->nim ?></td>
                                                        <td><?= $data_pelanggaran->nama ?></td>
                                                        <td><?= $data_pelanggaran->keterangan ?></td>
                                                        <td><?= $data_pelanggaran->tanggal ?></td>
                                                        <td>
                                                        <?php 
                                                            if (is_null($data_pelanggaran->inspektur) == TRUE){
                                                                echo '<span class="badge badge-danger">Menunggu</span>';
                                                            } elseif ((is_null($data_pelanggaran->inspektur)== FALSE) AND  (is_null($data_pelanggaran->tgl_surat_bebas)== TRUE)){
                                                                echo '<span class="badge badge-warning">Proses</span>';
                                                            } elseif ((is_null($data_pelanggaran->inspektur)== FALSE) AND  (is_null($data_pelanggaran->tgl_surat_bebas)== FALSE)){
                                                                echo '<span class="badge badge-success">Selesai</span>';
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
                            <!-- button tambahan -->
                            <!--<div class="kirim">
                                <button type="button" class="btn btn-primary col-10"><a href="#">Kirim Data</a></button>
                            </div>-->
                    </div>
            </div>
            <br><br>
            <br><br>
            <br><br>
            <br><br>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
<?= $this->endSection();?>
<!--end content-->