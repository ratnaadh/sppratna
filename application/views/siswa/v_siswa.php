<div class="card bg-light ">
    <div class="card-header">
        <a class="btn btn-outline-primary" href="<?php echo site_url('admin/siswa/add') ?>">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Tambah
        </a>
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%; background-color:aliceblue;">
            <thead>
                <tr>
                    <th style="width: 50px;">NISN</th>
                    <th style="width: 50px;">NIS</th>
                    <th style="width: 600px;">Nama Lengkap</th>
                    <th style="width: 150px;">Kelas</th>
                    <th style="width: 50px;">Alamat</th>
                    <th style="width: 200px;">No Telepon</th>
                    <th style="width: 200px;">Tahun SPP</th>
                    <th style="width: 50px;">Foto</th>
                    <th class="text-center" style="width: 500px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($GetSiswa)) {
                    foreach ($GetSiswa as $GetR) {
                ?>
                        <tr>

                            <td><?php echo $GetR->nisn; ?></td>
                            <td><?php echo $GetR->nis; ?></td>
                            <td><?php echo $GetR->nama; ?></td>
                            <td><?php echo $GetR->nama_kelas; ?></td>
                            <td><?php echo $GetR->alamat; ?></td>
                            <td><?php echo $GetR->no_telp; ?></td>
                            <td><?php echo $GetR->tahun; ?></td>
                            <td><img src="<?php echo base_url('assets/admin/images/icon/profile.png') ?>" style="width:45px; height:43px;"></td>
                            <td class="text-center">
                                <a class="btn btn-outline-primary" href="<?php echo site_url('admin/siswa/edit/') . $GetR->nisn ?>">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    Edit
                                </a>
                                <a class="btn btn-outline-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" href="<?php echo site_url('admin/siswa/delete/') . $GetR->nisn ?>">
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