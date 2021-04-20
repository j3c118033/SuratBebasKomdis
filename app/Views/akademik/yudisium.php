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
                                <h1 class="judul1">Input Data Yudisium Mahasiswa *ProgramStudi*</h1>
                                <hr class="garis1">
                                 <!--form input-->
                                 <form class="form1">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputNama" class="label7">Nama</label>
                                            <input type="text" class="form-control" id="inputZip">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputNim" class="label7">NIM</label>
                                            <input type="text" class="form-control" id="inputZip">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputTanggal" class="label7">Tanggal Yudisium</label>
                                            <input type="date" class="form-control" id="inputZip">
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-success" style="margin-top: -5px; margin-bottom:20px; margin-left:450px;"><a href="/InputPengurus"> Tambah Data </a></button>
                                </form>
                                <!--end form input-->
                                <!--data tabel-->
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr class="tabel1">
                                                <th>NIM</th>
                                                <th>Nama</th>
                                                <th>Tanggal Yudisium</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tabel1">
                                                <td>J3C118033</td>
                                                <td>Merry Ardelia Wirastuti</td>
                                                <td>05 Agustus 2021</td>
                                                <td><button type="button" class="btn" style="margin:0">Terverifikasi</button></td>
                                            </tr>
                                            <tr>
                                                <td>J3C118069</td>
                                                <td>Septian Afifi Rizkyana</td>
                                                <td>15 Agustus 2021</td>
                                                <td><button type="button" class="btn" style="margin:0">Terverifikasi</button></td>
                                            </tr>
                                            <tr>
                                                <td>J3C118135</td>
                                                <td>Nabila Fakhiratunisa</td>
                                                <td>07 Agustus 2021</td>
                                                <td><button type="button" class="btn" style="margin:0">Terverifikasi</button></td>
                                            </tr>
                                            <tr>
                                                <td>J3C118138</td>
                                                <td>Additya Rivaldo</td>
                                                <td>15 Agustus 2021</td>
                                                <td><button type="button" class="btn" style="margin:0">Terverifikasi</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--end data tabel-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
<?= $this->endSection();?>
<!--end content-->