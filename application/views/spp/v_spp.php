<div class="card bg-light ">
    <div class="card-header">
        <a class="btn btn-outline-primary" href="<?php echo site_url('admin/spp/add') ?>">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Tambah
        </a>
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%; background-color:aliceblue;">
            <thead>
                <tr>
                    <th style="width: 500px;">Tahun Ajaran</th>
                    <th style="width: 500px;">Nominal</th>
                    <th class="text-center" style="width: 250px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($GetSpp)) {
                    foreach ($GetSpp as $GetS) {
                ?>
                        <tr>

                            <td><?php echo $GetS->tahun; ?></td>
                            <td><?php echo $GetS->nominal; ?></td>
                            <td class="text-center">
                                <a class="btn btn-outline-primary" href="<?php echo site_url('admin/spp/edit/') . $GetS->id_spp ?>">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    Edit
                                </a>
                                <a class="btn btn-outline-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" href="<?php echo site_url('admin/spp/delete/') . $GetS->id_spp ?>">
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