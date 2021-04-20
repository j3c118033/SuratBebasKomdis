<!--Panggil Tamplate pada folder layout-->
<?= $this->extend('layout/index');?>
<!--end panggil-->

<!--start content-->
<?= $this->section('page-content');?>
               <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body wizard-content">
                        <div class="section5">
                            <p class="label1">Lengkapi Data Mahasiswa</p>
                            <hr class="garis">
                        </div>
                        <div class="section6">
                        <?php foreach ($data as $data) : ?>                           
                            <form action="<?= base_url('/mahasiswa/inputdata/update/'.$data->nim);?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                                <div class="form-group row">
                                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="nim" name="nim" class="form-control" disable value="<?= $data->nim;?>" size="9" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="nama" name="nama" class="form-control"  disable value="<?= $data->nama;?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="foto_ktm" class="col-sm-2 col-form-label">Foto Diri & KTM</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control <?= ($validation->hasError('foto_ktm')) ? 'is-invalid' : '';?>" id="foto_ktm" name="foto_ktm" value="<?= $data->foto_ktm; ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('foto_ktm'); ?>
                                        </div>
                                        <p class="label8">File yang diupload dalam format .jpg, .jpeg, atau .png<br>Ukuran file max 200KB</p>    
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="foto_simawa" class="col-sm-2 col-form-label">Foto Screenshot Bukti Pengisisan SIMAWA</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control <?= ($validation->hasError('foto_simawa')) ? 'is-invalid' : '';?>" id="foto_simawa" name="foto_simawa" value="<?= $data->foto_simawa; ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('foto_simawa'); ?>
                                        </div>
                                        <p class="label8">File yang diupload dalam format .jpg, .jpeg, atau .png<br>Ukuran file max 200KB</p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="foto_datalulusan" class="col-sm-2 col-form-label">Screenshot Pengisian Data Lulusan</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control <?= ($validation->hasError('foto_datalulusan')) ? 'is-invalid' : '';?>" id="foto_datalulusan" name="foto_datalulusan" value="<?= $data->foto_datalulusan; ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('foto_datalulusan'); ?>
                                            </div>
                                        <p class="label8">File yang diupload dalam format .jpg, .jpeg, atau .png<br>Ukuran file max 200KB</p>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">&nbsp;</label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-success">Simpan Data</button>
                                        <button type="button" class="btn btn-danger" style="margin:0"><a href="<?= base_url('mahasiswa/DataMahasiswa'); ?>">Kembali</a></button>
                                    </div>
                                </div>
                            </form>
                        <?php endforeach; ?>
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