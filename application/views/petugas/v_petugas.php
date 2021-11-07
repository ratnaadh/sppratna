<div class="card bg-light ">
    <div class="card-header">
        <a class="btn btn-outline-primary" href="<?php echo site_url('admin/petugas/add') ?>">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Tambah
        </a>
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%; background-color:aliceblue;">
            <thead>
                <tr>
                    <th style="width: 500px;">Nama Petugas</th>
                    <th style="width: 150px;">Foto</th>
                    <th class="text-center" style="width: 500px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($GetPetugas)) {
                    foreach ($GetPetugas as $GetR) {
                ?>
                        <tr>

                            <td><?php echo $GetR->nama_petugas; ?></td>
                            <td><img src="<?php echo base_url('assets/admin/images/icon/profile.png') ?>" style="width: 50px; height:50px;"></td>
                            <td class="text-center">
                                <a class="btn btn-outline-primary" href="<?php echo site_url('admin/petugas/edit/') . $GetR->id_petugas ?>">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    Edit
                                </a>
                                <a class="btn btn-outline-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" href="<?php echo site_url('admin/petugas/delete/') . $GetR->id_petugas ?>">
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