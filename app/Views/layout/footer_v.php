
<!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                Copyright &copy </font> <font> 2021 - Komisi Disiplin dan Kemahasiswaan SV IPB </font></p>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url('../assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url('../assets/libs/popper.js/dist/umd/popper.min.js'); ?>"></script>
    <script src="<?= base_url('../assets/libs/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url('../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js'); ?>"></script>
    <script src="<?= base_url('../assets/extra-libs/sparkline/sparkline.js'); ?>"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('../dist/js/waves.js'); ?>"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url('../dist/js/sidebarmenu.js'); ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url('../dist/js/custom.min.js'); ?>"></script>
    <!-- This Page JS -->
    <script src="<?= base_url('../assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('../dist/js/pages/mask/mask.init.js'); ?>"></script>
    <script src="<?= base_url('../assets/libs/select2/dist/js/select2.full.min.js'); ?>"></script>
    <script src="<?= base_url('../assets/libs/select2/dist/js/select2.min.js'); ?>"></script>
    <script src="<?= base_url('../assets/libs/jquery-asColor/dist/jquery-asColor.min.js'); ?>"></script>
    <script src="<?= base_url('../assets/libs/jquery-asGradient/dist/jquery-asGradient.js'); ?>"></script>
    <script src="<?= base_url('../assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js'); ?>"></script>
    <script src="<?= base_url('../assets/libs/jquery-minicolors/jquery.minicolors.min.js'); ?>"></script>
    <script src="<?= base_url('../assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>
    <script src="<?= base_url('../assets/libs/quill/dist/quill.min.js'); ?>"></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
    </script>

    </script>
    <script src="<?= base_url('../assets/extra-libs/multicheck/datatable-checkbox-init.js'); ?>"></script>
    <script src="<?= base_url('../assets/extra-libs/multicheck/jquery.multicheck.js'); ?>"></script>
    <script src="<?= base_url('../assets/extra-libs/DataTables/datatables.min.js'); ?>"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

    <!-- this chart js -->
    <script src="<?= base_url('../vendor/chart.js/Chart.min.js');?>"></script>
    <script src="<?= base_url('../js/chart-area-demo.js');?>"></script>
    <!-- Grafik verifikasi keseluruhan -->

    <!-- images js -->
    <script src="<?= base_url('../js/previewKTM.js');?>"></script>
    <script src="<?= base_url('../js/previewSimawa.js');?>"></script>

    <!-- dropdwon search -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
        $('select1').selectize({
            sortField: 'text'
        });
        });
    </script>
    
</body>

</html>