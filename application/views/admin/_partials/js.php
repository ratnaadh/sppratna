<!-- Jquery JS-->
<script src="<?php echo base_url('assets/CoolAdmin-master/') ?>vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="<?php echo base_url('assets/CoolAdmin-master/') ?>vendor/bootstrap-4.1/popper.min.js"></script>
<script src="<?php echo base_url('assets/CoolAdmin-master/') ?>vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="<?php echo base_url('assets/CoolAdmin-master/') ?>vendor/slick/slick.min.js">
</script>
<script src="<?php echo base_url('assets/CoolAdmin-master/') ?>vendor/wow/wow.min.js"></script>
<script src="<?php echo base_url('assets/CoolAdmin-master/') ?>vendor/animsition/animsition.min.js"></script>
<script src="<?php echo base_url('assets/CoolAdmin-master/') ?>vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="<?php echo base_url('assets/CoolAdmin-master/') ?>vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url('assets/CoolAdmin-master/') ?>vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="<?php echo base_url('assets/CoolAdmin-master/') ?>vendor/circle-progress/circle-progress.min.js"></script>
<script src="<?php echo base_url('assets/CoolAdmin-master/') ?>vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?php echo base_url('assets/CoolAdmin-master/') ?>vendor/chartjs/Chart.bundle.min.js"></script>
<script src="<?php echo base_url('assets/CoolAdmin-master/') ?>vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="<?php echo base_url('assets/CoolAdmin-master/') ?>js/main.js"></script>

<!-- Boostrap core JavaScript -->
<script src="<?php echo base_url('assets/CoolAdmin-master/') ?>jquery/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url('assets/CoolAdmin-master/') ?>bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Chart -->
<?php
foreach ($jumlahBayar as $Read) {
    $tahun[] = $Read->tahun_bayar;
    $total[] = $Read->jumlah_bayar;
}
?>
<script>
    try {

        //Team chart
        var ctx = document.getElementById("team1-chart");
        if (ctx) {
            ctx.height = 150;
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: <?php echo json_encode($tahun) ?>,
                    type: 'line',
                    defaultFontFamily: 'Poppins',
                    datasets: [{
                        data: <?php echo json_encode($total) ?>,
                        label: "Expense",
                        backgroundColor: 'rgba(0,103,255,.15)',
                        borderColor: 'rgba(0,103,255,0.5)',
                        borderWidth: 3.5,
                        pointStyle: 'circle',
                        pointRadius: 5,
                        pointBorderColor: 'transparent',
                        pointBackgroundColor: 'rgba(0,103,255,0.5)',
                    }, ]
                },
                options: {
                    responsive: true,
                    tooltips: {
                        mode: 'index',
                        titleFontSize: 12,
                        titleFontColor: '#000',
                        bodyFontColor: '#000',
                        backgroundColor: '#fff',
                        titleFontFamily: 'Poppins',
                        bodyFontFamily: 'Poppins',
                        cornerRadius: 3,
                        intersect: false,
                    },
                    legend: {
                        display: false,
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            fontFamily: 'Poppins',
                        },


                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            scaleLabel: {
                                display: false,
                                labelString: 'Month'
                            },
                            ticks: {
                                fontFamily: "Poppins"
                            }
                        }],
                        yAxes: [{
                            display: true,
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Value',
                                fontFamily: "Poppins"
                            },
                            ticks: {
                                fontFamily: "Poppins"
                            }
                        }]
                    },
                    title: {
                        display: false,
                    }
                }
            });
        }


    } catch (error) {
        console.log(error);
    }
</script>

<!-- Page level plugin JavaScript-->
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<script src="<?php echo base_url('assets/CoolAdmin-master/datatables/js/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/CoolAdmin-master/datatables/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/CoolAdmin-master/datatables/js/dataTables.bootstrap4.min.js') ?>"></script>