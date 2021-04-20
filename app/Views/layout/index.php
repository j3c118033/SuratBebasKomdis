<!-- start header-->
<?= $this->include('layout/header_v');?>
<!--end Header-->

<!--start topbar-->
<?= $this->include('layout/topbar_v');?>
<!--end topbar-->

<!--start sidebar-->
<?= $this->include('layout/sidebar_v');?>
<!--end sidebar-->

<!--start sidebar-->
<?= $this->renderSection('page-content');?>
<!--end sidebar-->

<!--start footer-->
<?= $this->include('layout/footer_v');?>
<!--end footer-->