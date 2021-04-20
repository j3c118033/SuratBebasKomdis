<!--Panggil Tamplate pada folder layout-->
<?= $this->extend('layout/index');?>
<!--end panggil-->

<!--start content-->
<?= $this->section('page-content');?>
    <!--conten Data Yudisium-->
        <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="judul1">Data Yudisium Mahasiswa *ProgramStudi*</h1>
                                <hr class="garis1">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr class="tabel1">
                                                <th>No</th>
                                                <th>NIM</th>
                                                <th>Nama</th>
                                                <th>Tanggal Yudisium</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tabel1">
                                                <td>1</td>
                                                <td>J3C118033</td>
                                                <td>Merry Ardelia Wirastuti</td>
                                                <td>05 Agustus 2021</td>
                                                <td><span class="badge badge-success">Terverifikasi</span></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>J3C118069</td>
                                                <td>Septian Afifi Rizkyana</td>
                                                <td>15 Agustus 2021</td>
                                                <td><span class="badge badge-success">Terverifikasi</span></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>J3C118135</td>
                                                <td>Nabila Fakhiratunisa</td>
                                                <td>07 Agustus 2021</td>
                                                <td><span class="badge badge-success">Terverifikasi</span></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>J3C118138</td>
                                                <td>Additya Rivaldo</td>
                                                <td>-</td>
                                                <td><span class="badge badge-danger">Belum Di Proses</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
<?= $this->endSection();?>
<!--end content-->