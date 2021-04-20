<!--Panggil Tamplate pada folder layout-->
<?= $this->extend('layout/index');?>
<!--end topbar-->

<!--start content-->
<?= $this->section('page-content');?>
    <!--conten Data Mahasiswa-->
        <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                <!-- filter mahasiswa -->
                    <div class="col-xl-4 col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <form action="<?= base_url('admin/akun/pencarian/'); ?>" method="POST">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="label7">Role Pengguna Sistem</label>
                                                <select class="form-control" name="name" id="name">
                                                        <option>Pilih Role....</option>
                                                        <option value="Admin">Admin</option>
                                                        <option value="Akademik">Akademik</option>
                                                        <option value="Dosen">Dosen</option>
                                                        <option value="Mahasiswa">Mahasiswa</option>
                                                </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <button type="submit" class="btn btn-primary" style="margin-top:30px;margin-left:-5px;border-radius:5px" >Cari</button>
                                        </div>  
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end filter mahasiswa -->

                <!-- Tabel Data User -->
                <div class="row">
                    <div class="col-xl-4 col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <h1 class="judul1">Data Akun User Sistem Surat Bebas Komdisma</h1>
                                <hr class="garis1">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr class="tabel1">
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($akun as $akun) : ?>
                                                <tr class="tabel2">
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $akun->username ?></td>
                                                    <td><?= $akun->email ?></td>
                                                    <td><?= $akun->name ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                            <?php $no ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tabel Data User -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
<?= $this->endSection();?>
<!--end content-->