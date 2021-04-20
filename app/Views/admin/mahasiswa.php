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
                    <!-- form tambah data mahasiswa -->
                        <div class="col-xl-4 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-body" style="border-radius:15px">
                                    <h1 class="judul1">Tambah Data Mahasiswa</h1>
                                    <hr class="garis1">

                                    <!--form input-->
                                    <form class="form1" method="POST" action="<?php echo base_url('admin/mahasiswa/create'); ?>">
                                        <?= csrf_field();?>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label class="label7">Nama Mahasiswa</label>
                                                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Mahasiswa">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="label7">NIM Mahasiswa</label>
                                                <input type="text" class="form-control" name="nim" placeholder="Masukan NIM Mahasiswa">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label class="label7">Program Studi</label>
                                                <select class="form-control" name="prodi">
                                                    <option disabled selected>Pilih Program Studi....</option>
                                                    <option>A-KMN</option>
                                                    <option>B-EKW</option>
                                                    <option>C-INF</option>
                                                    <option>D-TEK</option>
                                                    <option>E-JMP</option>
                                                    <option>F-GZI</option>
                                                    <option>G-TIB</option>
                                                    <option>H-IKN</option>
                                                    <option>I-TNK</option>
                                                    <option>J-MAB</option>
                                                    <option>K-MNI</option>
                                                    <option>L-KIM</option>
                                                    <option>M-LNK</option>
                                                    <option>N-AKN</option>
                                                    <option>P-PVT</option>
                                                    <option>T-TMP</option>
                                                    <option>W-PPP</option>
                                                </select>
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
                    <!-- end tambah data mahasiswa -->

                    <!-- filter mahasiswa -->
                    <div class="col-xl-4 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-body" style="border-radius:15px">
                                <form action="<?= base_url('admin/mahasiswa/pencarian/'); ?>" method="POST">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="label7">Program Studi</label>
                                                <select class="form-control" name="prodi" id="prodi">
                                                        <option>Pilih Program Studi....</option>
                                                        <option value="A-KMN">A-KMN</option>
                                                        <option value="B-EKW">B-EKW</option>
                                                        <option value="C-INF">C-INF</option>
                                                        <option value="D-TEK">D-TEK</option>
                                                        <option value="E-JMP">E-JMP</option>
                                                        <option value="G-GZI">F-GZI</option>
                                                        <option value="G-TIB">G-TIB</option>
                                                        <option value="H-IKN">H-IKN</option>
                                                        <option value="I-TNK">I-TNK</option>
                                                        <option value="J-MAB">J-MAB</option>
                                                        <option value="K-MNI">K-MNI</option>
                                                        <option value="L-KIM">L-KIM</option>
                                                        <option value="M-LNK">M-LNK</option>
                                                        <option value="N-AKN">N-AKN</option>
                                                        <option value="P-PVT">P-PVT</option>
                                                        <option value="T-TMP">T-TMP</option>
                                                        <option value="W-PPP">W-PPP</option>
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
                    
                    <!-- tabel data mahasiswa-->
                    <div class="col-xl-4 col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <h1 class="judul1">Data Mahasiswa</h1>
                                <hr class="garis1">

                                <!-- alert tambah data mahasiswa -->
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
                                                <th>NIM</th>
                                                <th>Nama</th>
                                                <th>Program Studi</th>
                                                <th>Foto</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($siswa as $siswa) : ?>
                                                <tr class="tabel2">
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $siswa->nim ?></td>
                                                    <td><?= $siswa->nama ?></td>
                                                    <td><?= $siswa->prodi ?></td>
                                                    <td><img class="profile" src="<?= base_url('../fotoKTM/'.$siswa->foto_ktm) ;?>"></td>
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
                    <!-- end tabel data mahasiswa-->
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
<?= $this->endSection();?>
<!--end content-->