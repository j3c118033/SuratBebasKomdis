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
                        <div class="col-xl-4 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-body" style="border-radius:15px">
                                    <h1 class="judul1">Tambah Tanggal Sidang Mahasiswa</h1>
                                    <hr class="garis1">

                                    <!--form input-->
                                    <form class="form1" method="POST" action="/akademik/input/update">
                                        <?= csrf_field();?>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="label7" style="margin-left:10px">NIM Mahasiswa</label>
                                                <div class="col-sm-12">
                                                <input list="brow" class="form-control" name="nim">
                                                <datalist id="brow" name="nim">
                                                    <option value="" selected disabled>Masukan NIM Mahasiswa</option>
                                                    <?php foreach($data as $key => $value):?>
                                                        <option value="<?= $value->nim;?>"><?= $value->nim;?> - <?= $value->nama ;?></option>
                                                    <?php endforeach;?>
                                                </datalist>
                                                    <!--<select name="nim" class="form-control" id="select-state">
                                                        <option value="" selected disabled>Masukan NIM Mahasiswa</option>
                                                        </?php foreach($data as $key => $value):?>
                                                        <option value="</?= $value->nim;?>"></?= $value->nim;?> - </?= $value->nama ;?></option>
                                                        </?php endforeach;?>
                                                    </select>-->
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="label7">Tanggal Sidang</label>
                                                <input type="date" class="form-control" name="tgl_sidang" id="tgl_sidang">
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

                        <!-- filter mahasiswa -->
                        <!--<div class="col-xl-4 col-lg-12">
                                <div class="card shadow mb-4">
                                    <div class="card-body" style="border-radius:15px">
                                    <form action="</?= base_url('akademik/input/pencarian/'); ?>" method="POST">
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
                        </div>-->
                        
                        <!-- tabel data verifikasi -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="judul1">Data Tanggal Sidang Mahasiswa</h1>
                                    <hr class="garis1">

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
                                                    <th>Mahasiswa</th>
                                                    <th>Program Studi</th>
                                                    <th>Tanggal Sidang</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $no = 1; ?>
                                                <?php foreach ($data as $data) : ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $data->nim;?> - <?= $data->nama;?></td>
                                                        <td><?= $data->prodi;?></td>
                                                        <td>
                                                        <?php
                                                        if (is_null($data->tgl_sidang)==TRUE){
                                                            echo "Belum diinput";
                                                        } else {
                                                            setlocale(LC_TIME, 'Indonesian');
                                                            $newDate = strftime("%d %B %Y",strtotime($data->tgl_sidang));
                                                            echo $newDate;
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
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
<?= $this->endSection();?>
<!--end content-->