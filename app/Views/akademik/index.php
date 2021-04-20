            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="card" align="center">
                    <div class="card-body wizard-content">
                        <div class="info1">
                            <h1>Selamat Datang di Halaman Akademik</h1>
                            <h2>Sistem Surat Bebas <span>Komdisma<span></h2>
                        </div>
                        <br>
                        <div class="info2">
                            <h4>
                                Periksa kembali data mahasiswa yang telah melakukan verifikasi. <br>
                                Laporkan segera apabila terdapat kesalahan data mahasiswa kepada pihak Komdisma.
                            </h4>
                        </div>
                    </div>

                    <!-- Bar Chart Data Verifikasi -->
                        <div class="col-xl-4 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Data Verifikasi Mahasiswa Per Prodi</h6>
                                    </div>
                                <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-bar pt-4">
                                            <canvas id="myBarChart"></canvas>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    <!-- end Bar Chart-->

                    <!-- Bar Chart Data Tanggal Sidang -->
                    <div class="col-xl-4 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Data Jumlah Input Tanggal Sidang Mahasiswa Per Prodi</h6>
                                    </div>
                                <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-bar pt-4">
                                            <canvas id="myBarChart1"></canvas>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    <!-- end Bar Chart-->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
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

    </script>
    <!-- Grafik verifikasi perprodi -->
    <script>
    // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = 'black';

        function number_format(number, decimals, dec_point, thousands_sep) {
        // *     example: number_format(1234.56, 2, ',', ' ');
        // *     return: '1 234,56'
        number = (number + '').replace(',', '').replace(' ', '');
        var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
            dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
            s = '',
            toFixedFix = function(n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
            };
        // Fix for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
        }
        return s.join(dec);
        }

        // Bar Chart Example
        var ctx = document.getElementById("myBarChart");
        var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php
                    if (count($grafik)>0) {
                    foreach ($grafik as $data) {
                        echo "'" .$data['prodi'] ."',";
                    }
                    }
                ?>
            ],
            datasets: [{
            label: "Mahasiswa",
            backgroundColor: "#F6C065",
            hoverBackgroundColor: "#F6C065",
            borderColor: "#F6C065",
            data: [
                <?php
                    if (count($grafik)>0) {
                    foreach ($grafik as $data) {
                        echo "'" .$data['total'] ."',";
                    }
                    }
                ?>
            ],
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
            padding: {
                left: 10,
                right: 25,
                top: 0,
                bottom: 20
            }
            },
            scales: {
            xAxes: [{
                time: {
                unit: 'ProgramStudi'
                },
                gridLines: {
                display: false,
                drawBorder: false
                },
                ticks: {
                maxTicksLimit: 17
                },
                maxBarThickness: 25,
            }],
            yAxes: [{
                ticks: {
                min: 0,
                max: 400,
                maxTicksLimit: 3,
                padding: 10,
                // Include a dollar sign in the ticks
                callback: function(value, index, values) {
                    return number_format(value);
                }
                },
                gridLines: {
                color: "rgb(234, 236, 244)",
                zeroLineColor: "rgb(234, 236, 244)",
                drawBorder: false,
                borderDash: [2],
                zeroLineBorderDash: [2]
                }
            }],
            },
            legend: {
            display: false
            },
            tooltips: {
            titleMarginBottom: 10,
            titleFontColor: '#6e707e',
            titleFontSize: 14,
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
            callbacks: {
                label: function(tooltipItem, chart) {
                var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                return datasetLabel + ': '+number_format(tooltipItem.yLabel);
                }
            }
            },
        }
        });
        </script>

    <!-- Grafik Tanggal Sidang perprodi -->
    <script>
    // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#black';

        function number_format(number, decimals, dec_point, thousands_sep) {
        // *     example: number_format(1234.56, 2, ',', ' ');
        // *     return: '1 234,56'
        number = (number + '').replace(',', '').replace(' ', '');
        var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
            dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
            s = '',
            toFixedFix = function(n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
            };
        // Fix for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
        }
        return s.join(dec);
        }

        // Bar Chart Example
        var ctx = document.getElementById("myBarChart1");
        var myBarChart1 = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php
                    if (count($grafik_sidang)>0) {
                    foreach ($grafik_sidang as $data) {
                        echo "'" .$data['prodi'] ."',";
                    }
                    }
                ?>
            ],
            datasets: [{
            label: "Mahasiswa",
            backgroundColor: "#55B3B1",
            hoverBackgroundColor: "#55B3B1",
            borderColor: "#55B3B1",
            data: [
                <?php
                    if (count($grafik_sidang)>0) {
                    foreach ($grafik_sidang as $data) {
                        echo "'" .$data['total'] ."',";
                    }
                    }
                ?>
            ],
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
            padding: {
                left: 10,
                right: 25,
                top: 0,
                bottom: 20
            }
            },
            scales: {
            xAxes: [{
                time: {
                unit: 'ProgramStudi'
                },
                gridLines: {
                display: false,
                drawBorder: false
                },
                ticks: {
                maxTicksLimit: 17
                },
                maxBarThickness: 25,
            }],
            yAxes: [{
                ticks: {
                min: 0,
                max: 400,
                maxTicksLimit: 3,
                padding: 10,
                // Include a dollar sign in the ticks
                callback: function(value, index, values) {
                    return number_format(value);
                }
                },
                gridLines: {
                color: "rgb(234, 236, 244)",
                zeroLineColor: "rgb(234, 236, 244)",
                drawBorder: false,
                borderDash: [2],
                zeroLineBorderDash: [2]
                }
            }],
            },
            legend: {
            display: false
            },
            tooltips: {
            titleMarginBottom: 10,
            titleFontColor: '#6e707e',
            titleFontSize: 14,
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
            callbacks: {
                label: function(tooltipItem, chart) {
                var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                return datasetLabel + ': '+number_format(tooltipItem.yLabel);
                }
            }
            },
        }
        });
        </script>

    <!-- images js -->
    <script src="<?= base_url('../js/previewKTM.js');?>"></script>
    <script src="<?= base_url('../js/previewSimawa.js');?>"></script>
</body>

</html>
            