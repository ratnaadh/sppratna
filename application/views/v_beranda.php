<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Dashboard</h2>
            <button class="au-btn au-btn-icon au-btn--blue">

        </div>
    </div>
</div>
<div class="row m-t-25">
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c1">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-accounts-outline"></i>
                    </div>
                    <div class="text">
                        <h2><?php echo $jumlahSiswa ?></h2>
                        <span>Siswa</span>
                    </div>
                </div>
                <div class="overview-chart">

                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c2">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-accounts-outline"></i>
                    </div>
                    <div class="text">
                        <h2><?php echo $jumlahPetugas ?></h2>
                        <span>Petugas</span>
                    </div>
                </div>
                <div class="overview-chart">

                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c3">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-format-list-bulleted"></i>
                    </div>
                    <div class="text">
                        <h2><?php echo $jumlahKelas ?></h2>
                        <span>Kelas</span>
                    </div>
                </div>
                <div class="overview-chart">

                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c4">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                    <div class="text">
                        <h2><?php echo $jumlahPembayaran ?></h2>
                        <span>Transaksi Pembayaran</span>
                    </div>
                </div>
                <div class="overview-chart">

                </div>
            </div>
        </div>
    </div>
</div>

                                <div class="card bg-light ">
                                <div class="col-lg-9">
                                <h2 style="text-align: left; margin-top: 30px;" class="title-1 m-b-25">Transaksi Pembayaran</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                    <thead>
                <tr>
                    <th style="width: 150px;">Nama Petugas</th>
                    <th style="width: 50px;">NISN</th>
                    <th style="width: 50px;">Tanggal Pembayaran</th>
                    <th style="width: 50px;">Bulan dibayar</th>
                    <th style="width: 50px;">Tahun dibayar</th>
                    <th style="width: 200px;">Nominal</th>
                    <th style="width: 200px;">Jumlah Bayar</th>
                </tr>
            </thead>
                                <tbody>
                <?php
                if (!empty($GetPembayaran)) {
                    foreach ($GetPembayaran as $GetR) {
                ?>
                        <tr>

                            <td><?php echo $GetR->nama_petugas; ?></td>
                            <td><?php echo $GetR->nisn; ?></td>
                            <td><?php echo $GetR->tgl_bayar; ?></td>
                            <td><?php echo $GetR->bulan_bayar; ?></td>
                            <td><?php echo $GetR->tahun_bayar; ?></td>
                            <td><?php echo $GetR->nominal; ?></td>
                            <td><?php echo $GetR->jumlah_bayar; ?></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
                                        
                                    </table>
                                </div>
                            </div>