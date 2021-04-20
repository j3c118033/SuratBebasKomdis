        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!--Sidebar Admin-->
        <?php if($group_name == 'Admin') : ?>
            <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <br>
                    <p align="center" class="hide-menu"><b class="sidebar-label">Komisi Disiplin dan Kemahasiswaan SV IPB</b></p>
                    <hr color=white class="hide-menu" style="margin: 0 10px">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Utama</span></a></li>
                        <hr class="garis2" color=white>
                        <li class="sidebar-item"> <a href="<?= base_url('/'); ?>" class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-th-large"></i><span class="hide-menu">Dashboard</span></a></li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Data User Sistem</span></a></li>
                        <hr class="garis2" color=white>
                        <li class="sidebar-item"> <a href="<?= base_url('admin/DataAkun'); ?>" class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-address-book"></i><span class="hide-menu">Akun</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-user"></i><span class="hide-menu">Data Pengurus</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataAdmin'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> Admin </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataAkademik'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> Akademik </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataDosen'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> Dosen Prodi </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a href="<?= base_url('admin/DataMahasiswa'); ?>" class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">Data Mahasiswa</span></a></li>

                        <li class="sidebar-item"> <a  class="sidebar-link waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Pengelolaan Data Mahasiswa</span></a></li>
                        <hr class="garis2" color=white>
                        <!-- sidebar Data Yudisium
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Data Yudisium Mahasiswa</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> A-KMN </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> B-EKW </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> C-INF </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> D-TEK </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> E-JMP </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> F-GZI </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> G-TIB </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> H-IKN </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> I-TNK </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> J-MAB </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> K-MNI </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> L-KIM </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> M-LNK </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> N-AKN </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> P-PVT </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> T-TMP </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> W-PPP </span></a></li>
                            </ul>
                        </li> -->
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Data Verifikasi Mahasiswa</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> Semua Program Studi </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-KMN'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> A-KMN </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-EKW'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> B-EKW </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-INF'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> C-INF </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-TEK'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> D-TEK </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-JMP'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> E-JMP </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-GZI'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> F-GZI </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-TIB'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> G-TIB </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-IKN'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> H-IKN </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-TNK'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> I-TNK </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-MAB'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> J-MAB </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-MNI'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> K-MNI </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-KIM'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> L-KIM </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-LNK'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> M-LNK </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-AKN'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> N-AKN </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-PVT'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> P-PVT </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-TMP'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> T-TMP </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-PPP'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> W-PPP </span></a></li>
                            </ul>
                        </li>
                        <!--<li class="sidebar-item"> <a href="<?= base_url('admin/RekapDataVerifikasi'); ?>" class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-download"></i><span class="hide-menu">Rekap Data Verifikasi</span></a></li>-->
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--end sidebar admin-->

        <!--Sidebar Mahasiswa-->
        <?php elseif($group_name == 'Mahasiswa') : ?>
            <aside class="left-sidebar" data-sidebarbg="skin5">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <br>
                            <p align="center" class="hide-menu"><b class="sidebar-label">Komisi Disiplin dan Kemahasiswaan SV IPB</b></p>
                            <hr color=white class="hide-menu" style="margin: 0 10px; margin-bottom:10px">
                            <?php foreach ($data as $data) : ?>
                                <p align="center" class="hide-menu"><?= $data->nama; ?></p>
                                <p align="center" class="hide-menu" style="margin-top:-15px; font-size:11pt"><?= $data->nim; ?></p>
                            <?php endforeach; ?>
                            <ul id="sidebarnav" class="p-t-30">
                                <li class="sidebar-item"> <a href="<?= base_url('/'); ?>" class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-th-large"></i><span class="hide-menu">Dashboard</span></a></li>
                                <li class="sidebar-item"> <a href="<?= base_url('mahasiswa/DataMahasiswa'); ?>" class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Data Mahasiswa </span></a></li>
                                <li class="sidebar-item"> <a href="<?= base_url('mahasiswa/PelanggaranMahasiswa'); ?>" class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-id-badge"></i><span class="hide-menu">Pelanggaran Mahasiswa </span></a></li>
                                <li class="sidebar-item"> <a href="<?= base_url('mahasiswa/UnduhSuratBebasKomdisma'); ?>" class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-download"></i><span class="hide-menu">Surat Bebas Komdisma</span></a></li>
                            </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!--end sidebar mahasiswa-->

        <!--start sidebar Dosen-->
        <?php elseif($group_name == 'Dosen') : ?>
            <aside class="left-sidebar" data-sidebarbg="skin5">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <br>
                        <p align="center" class="hide-menu"><b class="sidebar-label">Komisi Disiplin dan Kemahasiswaan SV IPB</b></p>
                        <hr color=white class="hide-menu" style="margin: 0 10px; margin-bottom:10px">
                        <ul id="sidebarnav" class="p-t-30">
                            <li class="sidebar-item"> <a href="<?= base_url('/'); ?>" class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-th-large"></i><span class="hide-menu">Dashboard</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Data Verifikasi Mahasiswa</span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="<?= base_url('dosen/DataVerifikasi'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> Semua Program Studi </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('dosen/DataVerifikasi-KMN'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> A-KMN </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('dosen/DataVerifikasi-EKW'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> B-EKW </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('dosen/DataVerifikasi-INF'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> C-INF </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('dosen/DataVerifikasi-TEK'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> D-TEK </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('dosen/DataVerifikasi-JMP'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> E-JMP </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('dosen/DataVerifikasi-GZI'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> F-GZI </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('dosen/DataVerifikasi-TIB'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> G-TIB </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('dosen/DataVerifikasi-IKN'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> H-IKN </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('dosen/DataVerifikasi-TNK'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> I-TNK </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('dosen/DataVerifikasi-MAB'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> J-MAB </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('dosen/DataVerifikasi-MNI'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> K-MNI </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('dosen/DataVerifikasi-KIM'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> L-KIM </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('dosen/DataVerifikasi-LNK'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> M-LNK </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('dosen/DataVerifikasi-AKN'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> N-AKN </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('dosen/DataVerifikasi-PVT'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> P-PVT </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('dosen/DataVerifikasi-TMP'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> T-TMP </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('dosen/DataVerifikasi-PPP'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> W-PPP </span></a></li>
                                </ul>
                            </li>
                            <!--<li class="sidebar-item"> <a href="<?= base_url('dosen/RekapDataVerifikasi'); ?>" class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-download"></i><span class="hide-menu">Rekap Data Verifikasi</span></a></li>-->
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
        <!--end sidebar dosen-->

        <!--Start sidebar akademik-->
        <?php elseif($group_name == 'Akademik') : ?>
            <aside class="left-sidebar" data-sidebarbg="skin5">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <br>
                        <p align="center" class="hide-menu"><b class="sidebar-label">Komisi Disiplin dan Kemahasiswaan SV IPB</b></p>
                        <hr color=white class="hide-menu" style="margin: 0 10px; margin-bottom:10px">
                        <ul id="sidebarnav" class="p-t-30">
                            <li class="sidebar-item"> <a href="<?= base_url('/'); ?>" class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-th-large"></i><span class="hide-menu">Dashboard</span></a></li>
                            <li class="sidebar-item"> <a href="<?= base_url('akademik/InputTanggalSidang'); ?>" class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-calendar-plus"></i><span class="hide-menu">Input Tanggal Sidang</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Data Verifikasi Mahasiswa</span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="<?= base_url('akademik/DataVerifikasi'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> Semua Program Studi </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('akademik/DataVerifikasi-KMN'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> A-KMN </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('akademik/DataVerifikasi-EKW'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> B-EKW </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('akademik/DataVerifikasi-INF'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> C-INF </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('akademik/DataVerifikasi-TEK'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> D-TEK </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('akademik/DataVerifikasi-JMP'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> E-JMP </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('akademik/DataVerifikasi-GZI'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> F-GZI </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('akademik/DataVerifikasi-TIB'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> G-TIB </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('akademik/DataVerifikasi-IKN'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> H-IKN </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('akademik/DataVerifikasi-TNK'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> I-TNK </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('akademik/DataVerifikasi-MAB'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> J-MAB </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('akademik/DataVerifikasi-MNI'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> K-MNI </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('akademik/DataVerifikasi-KIM'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> L-KIM </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('akademik/DataVerifikasi-LNK'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> M-LNK </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('akademik/DataVerifikasi-AKN'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> N-AKN </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('akademik/DataVerifikasi-PVT'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> P-PVT </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('akademik/DataVerifikasi-TMP'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> T-TMP </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('akademik/DataVerifikasi-PPP'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> W-PPP </span></a></li>
                                </ul>
                            </li>
                            <!--<li class="sidebar-item"> <a href="<?= base_url('akademik/RekapDataVerifikasi'); ?>" class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-download"></i><span class="hide-menu">Rekap Data Verifikasi</span></a></li>-->
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!--end sidebar Akademik-->

            <!--start sidebar SuperAdmin-->
            <?php elseif($group_name == 'SuperAdmin') : ?>
                <aside class="left-sidebar" data-sidebarbg="skin5">
                    <!-- Sidebar scroll-->
                    <div class="scroll-sidebar">
                        <!-- Sidebar navigation-->
                        <nav class="sidebar-nav">
                            <br>
                            <p align="center" class="hide-menu"><b class="sidebar-label">Komisi Disiplin dan Kemahasiswaan SV IPB</b></p>
                            <hr color=white class="hide-menu" style="margin: 0 10px">
                            <ul id="sidebarnav" class="p-t-30">
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Utama</span></a></li>
                                <hr class="garis2" color=white>
                                <li class="sidebar-item"> <a href="<?= base_url('/'); ?>" class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-th-large"></i><span class="hide-menu">Dashboard</span></a></li>
                                <li class="sidebar-item"> <a href="<?= base_url('superadmin/LogAktivitas'); ?>" class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-address-book"></i><span class="hide-menu">Log Aktivitas</span></a></li>
                                
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Data User Sistem</span></a></li>
                                <hr class="garis2" color=white>
                                <li class="sidebar-item"> <a href="<?= base_url('admin/DataAkun'); ?>" class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-address-book"></i><span class="hide-menu">Akun</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-user"></i><span class="hide-menu">Data Pengurus</span></a>
                                    <ul aria-expanded="false" class="collapse  first-level">
                                        <li class="sidebar-item"><a href="<?= base_url('superadmin/DataAdmin'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> Admin </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('superadmin/DataAkademik'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> Akademik </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('superadmin/DataDosen'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> Dosen Prodi </span></a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-item"> <a href="<?= base_url('admin/DataMahasiswa'); ?>" class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">Data Mahasiswa</span></a></li>

                                <li class="sidebar-item"> <a  class="sidebar-link waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Pengelolaan Data Mahasiswa</span></a></li>
                                <hr class="garis2" color=white>
                                <!-- sidebar Data Yudisium
                                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Data Yudisium Mahasiswa</span></a>
                                    <ul aria-expanded="false" class="collapse  first-level">
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> A-KMN </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> B-EKW </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> C-INF </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> D-TEK </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> E-JMP </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> F-GZI </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> G-TIB </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> H-IKN </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> I-TNK </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> J-MAB </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> K-MNI </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> L-KIM </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> M-LNK </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> N-AKN </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> P-PVT </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> T-TMP </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataYudisium'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> W-PPP </span></a></li>
                                    </ul>
                                </li> -->
                                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Data Verifikasi Mahasiswa</span></a>
                                    <ul aria-expanded="false" class="collapse  first-level">
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-KMN'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> A-KMN </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-EKW'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> B-EKW </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-INF'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> C-INF </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-TEK'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> D-TEK </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-JMP'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> E-JMP </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-GZI'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> F-GZI </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-TIB'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> G-TIB </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-IKN'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> H-IKN </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-TNK'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> I-TNK </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-MAB'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> J-MAB </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-MNI'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> K-MNI </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-KIM'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> L-KIM </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-LNK'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> M-LNK </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-AKN'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> N-AKN </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-PVT'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> P-PVT </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-TMP'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> T-TMP </span></a></li>
                                        <li class="sidebar-item"><a href="<?= base_url('admin/DataVerifikasi-PPP'); ?>" class="sidebar-link" style="margin-left:20px"><i class="fas fa-sticky-note"></i><span class="hide-menu"> W-PPP </span></a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-item"> <a href="<?= base_url('superadmin/RekapDataVerifikasi'); ?>" class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-download"></i><span class="hide-menu">Rekap Data Verifikasi</span></a></li>
                            </ul>
                        </nav>
                        <!-- End Sidebar navigation -->
                    </div>
                    <!-- End Sidebar scroll-->
                </aside>
                <!--end sidebar admin-->
        <?php endif;?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->