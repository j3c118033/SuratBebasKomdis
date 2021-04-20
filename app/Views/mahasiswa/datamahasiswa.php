<!--Panggil Tamplate pada folder layout-->
<?= $this->extend('layout/index');?>
<!--end panggil-->

<!--start content-->
<?= $this->section('page-content');?>
    <!--conten Data Mahasiswa-->
        <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <?php foreach ($data as $data) : ?>  
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body wizard-content">
                        <div class="section1">
                            <p class="label1">Data Mahasiswa</p>
                            <hr class="garis">

                            <?php
                                    if(!empty(session()->getFlashdata('sukses'))) { ?>
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                            <?php echo session()->getFlashdata('sukses');?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                            <?php } ?>

                            <div class="profil">
                            <img src="<?= base_url('../fotoKTM/'.$data->foto_ktm) ;?>">
                            </div>
                                <!-- Button simpan trigger modal -->
                                    <button type="button" class="btn btn-success " data-toggle="modal" data-target="#exampleModal">
                                        Lengkapi Data Mahasiswa
                                    </button>
                                    

                                    <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel" style="color:#707070">Peringatan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="color:#FB1717">
                                                    Bersama ini saya menyatakan bahwa akan mematuhi segala ketentuan pada Peraturan Rektor Institut Pertanian Bogor No. 13/I3/KM/2015 
                                                    tentang Tata Tertib Kehidupan Kampus Bagi Mahasiswa Institut Pertanian Bogor sampai hari wisuda. Apabila saya melanggar ketentuan 
                                                    tersebut maka saya bersedia menerima sanksi sesuai ketentuan yang berlaku.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success"><a href=<?= base_url('mahasiswa/InputData'); ?>>Yakin</a></button>
                                                    <button type="button" class="btn btn-warning"><a href=<?= base_url('mahasiswa/DataMahasiswa'); ?>>Batal</a></button>
                                                </div>
                                                </div>
                                        </div>
                                        </div>
                                <!--end button simpan -->
                        </div>
                        <div class="section2">
                            <p class="label2">Data Diri Mahasiswa</p>
                            <hr class="garis">
                            <table class="datamahasiswa">
                                <tr>
                                    <td class="kolom1">NIM</td>
                                    <td>:</td>
                                    <td><?= $data->nim; ?></td>
                                </tr>
                                <tr>
                                    <td class="kolom1">Nama</td>
                                    <td>:</td>
                                    <td><?= $data->nama; ?></td>
                                </tr>
                                <tr>
                                    <td class="kolom1">Program Studi</td>
                                    <td>:</td>
                                    <td><?= $data->prodi; ?></td>
                                </tr>
                                <tr>
                                    <td class="kolom1">Tanggal Sidang</td>
                                    <td>:</td>
                                    <td>
                                    <?php
                                        if (is_null($data->tgl_sidang)==TRUE){
                                            echo "Tanggal sidang belum diinputkan";
                                        } else {
                                            setlocale(LC_TIME, 'Indonesian');
                                            $newDate = strftime("%d %B %Y",strtotime($data->tgl_sidang));
                                            echo $newDate;
                                        }  
                                    ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="kolom1">Status</td>
                                    <td>:</td>
                                    <td>
                                    <?php 
                                        $status = $method->getStatus($data->nim);
                                            if ($status == "belumproses"){
                                                echo '<span class="badge badge-danger">Belum di Proses</span>';
                                                echo '<p>Data belum diverifikasi oleh komdisma</p>';
                                            } elseif ($status == "proses"){
                                                echo '<span class="badge badge-success">Selesai di Proses</span>';
                                                echo '<p>Unduh Surat Bebas Komdis</p>';
                                            } elseif ($status == "menunggu"){
                                                echo '<span class="badge badge-warning">Verifikasi di Tunda</span>';
                                                echo '<p>Periksa bagian unduh surat untuk melihat komentar yang diberikan oleh komdisma</p>';
                                            } 
                                    ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="section3">
                            <p class="label2">Kelengkapan Surat Bebas Komdisma</p>
                            <hr class="garis">
                            <table class="datamahasiswa">
                                <tr>
                                    <td class="kolom1">Mengisi Portal SIMAWA</td>
                                    <td><img class="profile" src="<?= base_url('../fotoSIMAWA/'.$data->foto_simawa) ;?>"></td>
                                </tr>
                            </table>
                            <p class="label3">Untuk pengisian Portal SIMAWA silahkan masuk kedalam link berikut<a href="https://simawa.ipb.ac.id/">  Pengisian SIMAWA</a></p>

                            <table class="datamahasiswa">
                                <tr>
                                    <td class="kolom1">Mengisi Data lulusan</td>
                                    <td><img class="profile" src="<?= base_url('../fotoDATALULUSAN/'.$data->foto_datalulusan) ;?>"></td>
                                </tr>
                            </table>
                            <p class="label3">Untuk pengisian Data Kelulusan silahkan masuk kedalam link berikut<a href="https://docs.google.com/forms/d/e/1FAIpQLSfOP0AE5WgFza5IlPLizibc0C_h91oBpeLU5AjXQ_bgTdRB7A/viewform">  Pengisian Data Lulusan</a></p>

                            <p class="label4">Catatan:</p>
                            <p class="label5">Sertakan bukti screenshot pengisian portal SIMAWA dan Data lulusan yang diupload bersamaan dengan upload Foto Diri dan KTM</p>
                        </div>
                            
                            <!-- button tambahan -->
                            <!--<div class="kirim">
                                <button type="button" class="btn btn-primary col-10"><a href="#">Kirim Data</a></button>
                            </div>-->
                    </div>
            <?php endforeach ?>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
<?= $this->endSection();?>
<!--end content-->