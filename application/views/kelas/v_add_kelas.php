<div class="card bg-light ">
    <form action="" method="POST">
        <div class="card-header">
            <a class="btn btn-outline-primary" href="<?php echo site_url('admin/kelas/') ?>">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                Kembali
            </a>
        </div>
        <div class="card-body">
            <input type="hidden" name="id_kelas">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Kelas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" name="nama_kelas" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <select class="form-control" name="id_kk" required>
                        <option value="">Pilih Jurusan</option>
                        <?php foreach ($GetKK as $GetR) : ?>
                            <option value="<?php echo $GetR->id_kk; ?>"><?php echo $GetR->nama_kk; ?></option>
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