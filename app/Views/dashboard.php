<!--Panggil Tamplate pada folder layout-->
<?= $this->extend('layout/index_dash');?>
<!--end topbar-->

<!--start content-->
<?= $this->section('page-content');?>
    <!--start Dashboard Admin-->
    <?php if($group_name == 'Admin') : ?>
        <?= $this->include('admin/index');?>
    <!--end Dashboard Admin-->

    <!--start Dashboard Mahasiswa-->
    <?php elseif($group_name == 'Mahasiswa') : ?>
        <?= $this->include('mahasiswa/index');?>
    <!--end Dashboard Mahasiswa-->

    <!--start Dashboard Dosen-->
    <?php elseif($group_name == 'Dosen') : ?>
        <?= $this->include('dosen/index');?>
    <!--end Dashboard Dosen-->

    <!--start Dashboard Akademik-->
    <?php elseif($group_name == 'Akademik') : ?>
        <?= $this->include('akademik/index');?>
    <!--end Dashboard Akademik-->

    <!--start Dashboard SuperAdmin-->
    <?php elseif($group_name == 'SuperAdmin') : ?>
        <?= $this->include('superAdmin_dashboard/index');?>
    <!--end Dashboard SuperAdmin-->
    <?php endif;?>
<?= $this->endSection();?>
<!--end content-->