<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a class="navbar-brand" href="<?php echo site_url('admin') ?>">
            <?php echo SITE_NAME ?>
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">

            <ul class="list-unstyled navbar__list">

                <!-- Akses menu Untuk Admin -->
                <?php if ($this->session->userdata('akses') == 'admin') : ?>

                    <li class="active has-sub">
                        <a class="js-arrow" href="<?php echo site_url('admin/overview') ?>">
                            <i class="fas fa-home"></i>Beranda</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/spp') ?>">
                            <i class="fas fa-money-bill-alt"></i>SPP</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/kompetensi_keahlian') ?>">
                            <i class="fas fa-list-ul"></i>Kompetensi Keahlian</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/kelas') ?>">
                            <i class="fas fa-list-ul"></i>Kelas</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/siswa') ?>">
                            <i class="fas fa-users"></i>Siswa</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/petugas') ?>">
                            <i class="fas fa-users"></i>Petugas</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/pembayaran') ?>">
                            <i class="fas fa-history"></i>Transaksi Pembayaran</a>
                    </li>


                    <!-- Akses Menu Untuk Petugas -->
                <?php elseif ($this->session->userdata('akses') == 'petugas') : ?>

                    <li class="active has-sub">
                        <a class="js-arrow" href="<?php echo site_url('admin/overview') ?>">
                            <i class="fas fa-tachometer-alt"></i>Beranda</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/spp') ?>">
                            <i class="fas fa-chart-bar"></i>SPP</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/siswa') ?>">
                            <i class="far fa-check-square"></i>Siswa</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/pembayaran') ?>">
                            <i class="fas fa-calendar-alt"></i>Transaksi Pembayaran</a>
                    </li>

                    <!-- Akses Menu Untuk Siswa -->
                <?php else : ?>

                    <li class="active has-sub">
                        <a class="js-arrow" href="<?php echo site_url('admin/overview') ?>">
                            <i class="fas fa-tachometer-alt"></i>Beranda</a>
                    </li>

                <?php endif; ?>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->