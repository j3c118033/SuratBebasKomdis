<!--Panggil Tamplate pada folder layout-->
<?= $this->extend('layout/index');?>
<!--end topbar-->

<!--start content-->
<?= $this->section('page-content');?>
    <!--conten Data Yudisium-->
                   <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body wizard-content">
                        <div class="section5">
                            <p class="label1">Rekap Data Verifikasi Mahasiswa</p>
                            <hr class="garis">
                        </div>
                        <div class="section7">
                            <form action="<?= base_url('akademik/rekap/pencarian/'); ?>" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="label7">Program Studi</label>
                                            <select class="form-control" name="prodi" id="prodi">
                                                    <option>Semua Prodi</option>
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
                <div class="card">
                    <div class="card-body wizard-content">
                        <div class="card-body">
                                <h1 class="judul1">Rekapan Data Verifikasi Mahasiswa</h1>
                                <hr class="garis1">
                                <div class="col-md">
                                    <a href="<?= base_url('akademik/rekap/printexcel'); ?>" class="btn btn-success" style="margin-bottom:20px; margin-left:0">Excel&nbsp;&nbsp;<i class="fas fa-file-excel"></i></a> 
                                </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr class="tabel1">
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Program Studi</th>
                                                <th>Tanggal Surat Bebas Komdisma</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($hasil as $hasil) : ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $hasil->nama; ?></td>
                                                    <td><?= $hasil->prodi; ?></td>
                                                    <td><?= $hasil->tgl_bebas_komdis; ?></td>
                                                </tr>
                                            <?php $no ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                    </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
<?= $this->endSection();?>
<!--end content-->