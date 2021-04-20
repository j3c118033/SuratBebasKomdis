<!--Panggil Tamplate pada folder layout-->
<?= $this->extend('layout/index');?>
<!--end panggil-->

<!--start content-->
<?= $this->section('page-content');?>
    <!--conten Unduh Surat-->
                    <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body wizard-content">
                        <div class="section5">
                            <p class="label1">Unduh Surat Bebas Komdisma</p>
                            <hr class="garis">
                        </div>
                        <div class="section10">
                            <div class="alert alert-warning" role="alert">
                                Tombol Unduh dapat di akses apabila :
                                <?php foreach ($data as $data) : ?>
                                <ul type="disk">
                                    <li>Mahasiswa Merupakan Mahasiswa Aktif Tingkat Akhir Sekolah Vokasi IPB</li>
                                    <li>Mahasiswa Sudah Melakukan Sidang Sebelum Mengisikan Data Pada Sistem 
                                        (<?php
                                            if (is_null($data->tgl_sidang)==TRUE){
                                                echo "Tanggal sidang belum diinputkan";
                                            } else {
                                                setlocale(LC_TIME, 'Indonesian');
                                                $newDate = strftime("%d %B %Y",strtotime($data->tgl_sidang));
                                                echo $newDate;
                                            }  
                                        ?>)
                                    </li>
                                    <li>Mahasiswa Sudah Mengupload Foto diri beserta Kartu Tanda Mahasiswa (KTM) 
                                        (<?php
                                            if (is_null($data->foto_ktm)==TRUE){
                                                echo "Foto KTM belum di input";
                                            } else {
                                                echo "Selesai di Upload";
                                            }  
                                        ?>)
                                    </li>
                                    <li>Mahasiswa Sudah Mengupload Bukti Pengisian SIMAWA 
                                        (<?php
                                            if (is_null($data->foto_simawa)==TRUE){
                                                echo "Foto Penggisian SIMAWA belum di input";
                                            } else {
                                                echo "Selesai di Upload";
                                            }  
                                        ?>)
                                    </li>
                                    <li>Mahasiswa Sudah Mengupload Bukti Pengisian Data Lulusan 
                                    (<?php
                                        if (is_null($data->foto_datalulusan)==TRUE){
                                            echo "Foto Penggisian Data Lulusan belum di input";
                                        } else {
                                            echo "Selesai di Upload";
                                        }  
                                    ?>)
                                    </li>
                                    <li>Pihak Komdisma Sudah Melakukan Verifikasi Pada Mahasiswa 
                                        (<?php
                                            if (is_null($data->tgl_bebas_komdis)==TRUE){
                                                echo "Verifikasi Belum dilakukan";
                                            } else {
                                                setlocale(LC_TIME, 'Indonesian');
                                                $newDate = strftime("%d %B %Y",strtotime($data->tgl_bebas_komdis));
                                                echo $newDate;
                                            }  
                                        ?>)
                                    </li>
                                    <li>Komentar :  
                                        <b>
                                            <?php
                                                if (empty($data->komentar)==TRUE){
                                                    echo "Tidak ada komentar yang diberikan";
                                                } else {
                                                    echo $data->komentar;
                                                }  
                                            ?>
                                        </b>
                                    </li>
                                    <p class="label11">Komentar diberikan apabila ada data yang mahasiswa inputkan tidak sesuai</p>
                                </ul>
                                <?php endforeach; ?>
                            </div>
                            
                            <?php if((is_null($data->tgl_bebas_komdis)== FALSE)) { ?>
                                <div class="alert alert-success" role="alert">
                                    <b>Catatan : </b> <br>
                                        Bersama ini saya menyatakan bahwa akan mematuhi segala ketentuan pada Peraturan Rektor Institut Pertanian Bogor No. 13/I3/KM/2015 
                                        tentang Tata Tertib Kehidupan Kampus Bagi Mahasiswa Institut Pertanian Bogor sampai hari wisuda. Apabila saya melanggar ketentuan 
                                        tersebut maka saya bersedia menerima sanksi sesuai ketentuan yang berlaku.
                                </div>
                            <?php } elseif((is_null($data->tgl_bebas_komdis)== TRUE)) { ?>
                                <div class="alert alert-success" role="alert">
                                    <b>Catatan : </b> <br>
                                        Tunggu Verifikasi agar surat bebas komdisma dapat di unduh
                                </div>
                            <?php } ?>
                            
                            <div class="unduh">
                                <?php if((is_null($data->tgl_bebas_komdis)== FALSE) AND  (is_null($data->tgl_sidang)== TRUE)){ ?>
                                    <a href="<?= base_url('mahasiswa/unduhsurat/suratbebaskomdis'); ?>" class="btn btn-warning btn-md disabled" tabindex="-1" role="button" aria-disabled="true"><i class="fas fa-download"> &nbsp;Unduh Surat</i></a>;
                                <?php } elseif((is_null($data->tgl_bebas_komdis)== TRUE) AND  (is_null($data->tgl_sidang)== TRUE)) { ?>
                                    <a href="<?= base_url('mahasiswa/unduhsurat/suratbebaskomdis'); ?>" class="btn btn-warning btn-md disabled" tabindex="-1" role="button" aria-disabled="true"><i class="fas fa-download"> &nbsp;Unduh Surat</i></a>;
                                <?php } elseif((is_null($data->tgl_bebas_komdis)== TRUE) AND  (is_null($data->tgl_sidang)== FALSE)) { ?>
                                    <a href="<?= base_url('mahasiswa/unduhsurat/suratbebaskomdis'); ?>" class="btn btn-warning btn-md disabled" tabindex="-1" role="button" aria-disabled="true"><i class="fas fa-download"> &nbsp;Unduh Surat</i></a>;
                                <?php } elseif((is_null($data->tgl_bebas_komdis)== FALSE) AND  (is_null($data->tgl_sidang)== FALSE) AND (empty($data->komentar)==FALSE)) { ?>
                                    <a href="<?= base_url('mahasiswa/unduhsurat/suratbebaskomdis'); ?>" class="btn btn-warning btn-md disabled" tabindex="-1" role="button" aria-disabled="true"><i class="fas fa-download"> &nbsp;Unduh Surat</i></a>;
                                <?php } else { ?>
                                    <a href="<?= base_url('mahasiswa/unduhsurat/suratbebaskomdis'); ?>" class="btn btn-warning btn-md " tabindex="-1" role="button"><i class="fas fa-download">&nbsp;&nbsp;Unduh Surat</i></a>
                                <?php } ?>
                            </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            </div>
            <br><br>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            
<?= $this->endSection();?>
<!--end content-->