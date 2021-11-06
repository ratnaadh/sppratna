<div class="card bg-light ">
    <form action="" method="POST">
        <div class="card-header">
            <a class="btn btn-outline-primary" href="<?php echo site_url('admin/kelas/') ?>">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                Kembali
            </a>
        </div>
        <div class="card-body">
            <input type="hidden" name="id_kelas" value="<?php echo $GetKelas->id_kelas ?>">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Kelas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" value="<?php echo $GetKelas->nama_kelas; ?>" name="nama_kelas" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nominal</label>
                <div class="col-sm-10">
                    <select class="form-control" name="id_kk" required>
                        <option value="<?php echo $GetKelas->id_kk; ?>"><?php echo $GetKelas->nama_kk; ?></option>
                        <?php foreach ($GetKK as $GetR) : ?>
                            <?php if ($GetR->id_kk !== $GetKelas->id_kk) { ?>
                                <option value="<?php echo $GetR->id_kk; ?>"><?php echo $GetR->nama_kk; ?></option>
                            <?php } ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="card-footer text-right">
            <button type="submit" class="btn btn-outline-primary">Simpan</button>
        </div>
    </form>
</div>