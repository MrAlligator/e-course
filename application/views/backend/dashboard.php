        <!-- Header -->
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0"><?= $title ?></h6>
                        </div>
                    </div>
                    <!-- Card stats -->
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Total Data Importir / Buyers</h5>
                                            <span class="h2 font-weight-bold mb-0"><?= $jumlah_importir ?></span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                                <i class="ni ni-active-40"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <?php if ($impenambahan > 0) : ?>
                                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>
                                                <?php
                                                $persentase = ($impenambahan / $jumlah_importir) * 100;
                                                echo round($persentase, 2) . '%';
                                                ?>
                                            </span>
                                            <span class="text-nowrap text-sm">Dari bulan kemarin</span>
                                        <?php else : ?>
                                            <span class="text-nowrap text-sm">Belum ada Pemanbahan data bulan ini</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Total Data Permintaan / Inquiry</h5>
                                            <span class="h2 font-weight-bold mb-0"><?= $jumlah_permintaan ?></span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                                <i class="ni ni-chart-pie-35"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <div class="text-right">
                                            <?php if ($iqpenambahan > 0) : ?>
                                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>
                                                    <?php
                                                    $persentase = ($iqpenambahan / $jumlah_importir) * 100;
                                                    echo round($persentase, 2) . '%';
                                                    ?>
                                                </span>
                                                <span class="text-nowrap text-sm">Dari bulan kemarin</span>
                                            <?php else : ?>
                                                <span class="text-nowrap text-sm">Belum ada Pemanbahan data bulan ini</span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-xl-4 col-md-6">
                            <div class="card card-stats"> -->
                        <!-- Card body -->
                        <!-- <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Pembayaran Belum Konfirmasi</h5>
                                            <span class="h2 font-weight-bold mb-0"><?= $jumlah_belum_konfirmasi ?></span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                                <i class="ni ni-money-coins"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <span class="text-nowrap text-sm"><a href="<?= base_url('backend/konfirmasi') ?>" class="text-green text-decoration-none">Konfirmasi Sekarang <i class="fa fa-arrow-right"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header bg-transparent">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="h3 mb-0">Jumlah Pendaftar Tiap Bulannya</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Chart -->
                            <div class="chart">
                                <canvas id="myChart" class="chart-canvas"></canvas>
                                <script src="<?= base_url() ?>adminast/js/Chart.js"></script>
                                <script type="text/javascript">
                                    var ctx = document.getElementById('myChart').getContext('2d');
                                    var chart = new Chart(ctx, {
                                        type: 'line',
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    scaleLabel: {
                                                        display: true,
                                                        labelString: 'Jumlah Pendaftar'
                                                    },
                                                    ticks: {
                                                        beginAtZero: true,
                                                        max: 20
                                                    }
                                                }],
                                                xAxes: [{
                                                    scaleLabel: {
                                                        display: true,
                                                        labelString: 'Bulan dan Tahun'
                                                    }
                                                }]
                                            }
                                        },
                                        data: {
                                            labels: [
                                                <?php
                                                if (count($perbulan) > 0) {
                                                    foreach ($perbulan as $data) {
                                                        if ($data->month_created == 1) {
                                                            echo "'Januari " . $data->year_created . "',";
                                                        } else if ($data->month_created == 2) {
                                                            echo "'Februari " . $data->year_created . "',";
                                                        } else if ($data->month_created == 3) {
                                                            echo "'Maret " . $data->year_created . "',";
                                                        } else if ($data->month_created == 4) {
                                                            echo "'April " . $data->year_created . "',";
                                                        } else if ($data->month_created == 5) {
                                                            echo "'Mei " . $data->year_created . "',";
                                                        } else if ($data->month_created == 6) {
                                                            echo "'Juni " . $data->year_created . "',";
                                                        } else if ($data->month_created == 7) {
                                                            echo "'Juli " . $data->year_created . "',";
                                                        } else if ($data->month_created == 8) {
                                                            echo "'Agustus " . $data->year_created . "',";
                                                        } else if ($data->month_created == 9) {
                                                            echo "'September " . $data->year_created . "',";
                                                        } else if ($data->month_created == 10) {
                                                            echo "'Oktober " . $data->year_created . "',";
                                                        } else if ($data->month_created == 11) {
                                                            echo "'November " . $data->year_created . "',";
                                                        } else if ($data->month_created == 12) {
                                                            echo "'Desember " . $data->year_created . "',";
                                                        }
                                                    }
                                                }
                                                ?>
                                            ],
                                            datasets: [{
                                                label: 'Jumlah User yang Mendaftar',
                                                backgroundColor: 'transparent',
                                                fill: true,
                                                borderColor: 'blue',
                                                pointBorderColor: 'blue',
                                                pointBackgroundColor: 'blue',
                                                data: [
                                                    <?php
                                                    if (count($perbulan) > 0) {
                                                        foreach ($perbulan as $data) {
                                                            echo $data->total . ", ";
                                                        }
                                                    }
                                                    ?>
                                                ]
                                            }]
                                        },
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header bg-transparent">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="h3 mb-0">Log Kunjungan Terbaru</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="tabel_importir" class="table table-bordered table-striped" width="100%" cellspacing="0">
                                    <thead class="thead-dark text-primary">
                                        <tr>
                                            <th>User</th>
                                            <th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($newestlogs as $log) : ?>
                                            <tr>
                                                <th width="100px"><?= $log['log_user'] ?></th>
                                                <th width="100px"><?= $log['log_desc'] ?></th>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="<?= base_url('backend/logger') ?>" class="badge badge-primary text-decoration-none">Lihat Seluruh Log Kunjungan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header bg-transparent">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="h3 mb-0">Jumlah Pengunjung Tiap Hari</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Chart -->
                            <div class="chart">
                                <canvas id="visitChart" class="chart-canvas"></canvas>
                                <script src="<?= base_url() ?>adminast/js/Chart.js"></script>
                                <script type="text/javascript">
                                    var ctx = document.getElementById('visitChart').getContext('2d');
                                    var chart = new Chart(ctx, {
                                        type: 'line',
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    scaleLabel: {
                                                        display: true,
                                                        labelString: 'Jumlah Pengunjung'
                                                    },
                                                    ticks: {
                                                        beginAtZero: true,
                                                        max: 100
                                                    }
                                                }]
                                            }
                                        },
                                        data: {
                                            labels: [
                                                <?php
                                                if (count($visitors) > 0) {
                                                    foreach ($visitors as $data) {
                                                        if ($data->visitor_month == 1) {
                                                            echo "'" . $data->visitor_date . " Jan " . $data->visitor_year . "',";
                                                        } else if ($data->visitor_month == 2) {
                                                            echo "'" . $data->visitor_date . " Feb " . $data->visitor_year . "',";
                                                        } else if ($data->visitor_month == 3) {
                                                            echo "'" . $data->visitor_date . " Mar " . $data->visitor_year . "',";
                                                        } else if ($data->visitor_month == 4) {
                                                            echo "'" . $data->visitor_date . " Apr " . $data->visitor_year . "',";
                                                        } else if ($data->visitor_month == 5) {
                                                            echo "'" . $data->visitor_date . " Mei " . $data->visitor_year . "',";
                                                        } else if ($data->visitor_month == 6) {
                                                            echo "'" . $data->visitor_date . " Jun " . $data->visitor_year . "',";
                                                        } else if ($data->visitor_month == 7) {
                                                            echo "'" . $data->visitor_date . " Jul " . $data->visitor_year . "',";
                                                        } else if ($data->visitor_month == 8) {
                                                            echo "'" . $data->visitor_date . " Agu " . $data->visitor_year . "',";
                                                        } else if ($data->visitor_month == 9) {
                                                            echo "'" . $data->visitor_date . " Sep " . $data->visitor_year . "',";
                                                        } else if ($data->visitor_month == 10) {
                                                            echo "'" . $data->visitor_date . " Okt " . $data->visitor_year . "',";
                                                        } else if ($data->visitor_month == 11) {
                                                            echo "'" . $data->visitor_date . " Nov " . $data->visitor_year . "',";
                                                        } else if ($data->visitor_month == 12) {
                                                            echo "'" . $data->visitor_date . " Des " . $data->visitor_year . "',";
                                                        }
                                                    }
                                                }
                                                ?>
                                            ],
                                            datasets: [{
                                                label: 'Jumlah Pengunjung',
                                                backgroundColor: 'transparent',
                                                fill: true,
                                                borderColor: 'blue',
                                                pointBorderColor: 'blue',
                                                pointBackgroundColor: 'blue',
                                                data: [
                                                    <?php
                                                    if (count($visitors) > 0) {
                                                        foreach ($visitors as $data) {
                                                            echo $data->total . ", ";
                                                        }
                                                    }
                                                    ?>
                                                ]
                                            }]
                                        },
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>