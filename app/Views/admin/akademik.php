<!--Panggil Tamplate pada folder layout-->
<?= $this->extend('layout/index');?>
<!--end topbar-->

<!--start content-->
<?= $this->section('page-content');?>
    <!--conten Input Data Pengurus-->
        <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <!-- form tambah data akademik --> 
                        <div class="col-xl-4 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-body" style="border-radius:15px">
                                    <h1 class="judul1">Tambah Data Akademik Pengurus Sistem</h1>
                                    <hr class="garis1">

                                    <!--form input-->
                                    <form class="form1" method="POST" action="<?php echo base_url('admin/akademik/create'); ?>">
                                        <?= csrf_field();?>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="label7">Nama Petugas Akademik</label>
                                                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Akademik">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="label7">ID Akademik</label>
                                                <input type="text" class="form-control" name="id" placeholder="Masukan NIK/NIP/NPI/NIDN Akademik">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <button type="submit" class="btn btn-success" style="margin:0; margin-bottom: 20px" >Simpan Data</button>
                                        </div>
                                    </form>
                                    <!--end form input-->
                                </div>
                            </div>
                        </div>
                        <!-- end form tambah data akademik --> 
                        <!-- tabel data akademin --> 
                        <div class="col-xl-4 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <!--data tabel-->
                                    <h1 class="judul1">Data Akademik Pengurus Sistem</h1>
                                    <hr class="garis1">

                                    <!-- alert tambah data akademik -->
                                    <?php
                                        if(!empty(session()->getFlashdata('sukses'))) { ?>
                                            <div class="alert alert-success alert-dismissible" role="alert">
                                                <?php echo session()->getFlashdata('sukses');?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                    <?php } ?>

                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr class="tabel1">
                                                    <th>No</th>
                                                    <th>ID Akademik</th>
                                                    <th>Nama</th>
                                                    <th>Foto</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach ($akademik as $akademik) : ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $akademik->id;?></td>
                                                        <td><?= $akademik->nama;?></td>
                                                        <td><img class="profile" src="<?= base_url('/assets/images/users/'.$akademik->foto); ?>"></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                <?php $no ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end data tabel-->
                                </div>
                            </div>
                        </div>
                        <!-- end tabel data akademik --> 
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
<?= $this->endSection();?>
<!--end content-->
