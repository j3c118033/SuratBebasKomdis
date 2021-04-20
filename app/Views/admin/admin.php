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
                        <!-- form tambah data admin --> 
                        <div class="col-xl-4 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-body" style="border-radius:15px">
                                    <h1 class="judul1">Tambah Data Admin Pengurus Sistem</h1>
                                    <hr class="garis1">

                                    <!--form input-->
                                    <form class="form1" method="POST" action="<?php echo base_url('admin/admin/create'); ?>">
                                        <?= csrf_field();?>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="label7">Nama Admin</label>
                                                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Admin">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="label7">ID Admin</label>
                                                <input type="text" class="form-control" name="id" placeholder="Masukan NIK/NIP/NPI/NIDN Admin">
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
                        <!-- end form tambah data admin --> 
                        <!-- tabel data admin --> 
                        <div class="col-xl-4 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <!--data tabel-->
                                    <h1 class="judul1">Data Admin Pengurus Sistem</h1>
                                    <hr class="garis1">

                                    <!-- alert tambah data admin -->
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
                                                    <th>ID Admin</th>
                                                    <th>Nama</th>
                                                    <th>Foto</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach ($admin as $admin) : ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $admin->id;?></td>
                                                        <td><?= $admin->nama;?></td>
                                                        <td><img class="profile" src="<?= base_url('/assets/images/users/'.$admin->foto); ?>"></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                <?php $no ?>
                                        </table>
                                    </div>
                                    <!--end data tabel-->
                                </div>
                            </div>
                        </div>
                        <!-- end tabel data admin --> 
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
<?= $this->endSection();?>
<!--end content-->