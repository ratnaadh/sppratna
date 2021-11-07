<div class="card bg-light ">
    <div class="card-header">
        <a class="btn btn-outline-primary" href="<?php echo site_url('admin/pembayaran/add') ?>">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Tambah
        </a>
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%; background-color:aliceblue;">
            <thead>
                <tr>
                    <th style="width: 150px;">Nama Petugas</th>
                    <th style="width: 50px;">NISN</th>
                    <th style="width: 50px;">Tanggal Pembayaran</th>
                    <th style="width: 50px;">Bulan dibayar</th>
                    <th style="width: 50px;">Tahun dibayar</th>
                    <th style="width: 200px;">Nominal</th>
                    <th style="width: 200px;">Jumlah Bayar</th>
                    <th class="text-center" style="width: 500px;">Aksi</th>
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
                            <td class="text-center">
                                <a class="btn btn-outline-primary" href="<?php echo site_url('admin/pembayaran/edit/') . $GetR->id_pembayaran ?>">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    Edit
                                </a>
                                <a class="btn btn-outline-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" href="<?php echo site_url('admin/pembayaran/delete/') . $GetR->id_pembayaran ?>">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                    Hapus
                                </a>
                            </td>

                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>