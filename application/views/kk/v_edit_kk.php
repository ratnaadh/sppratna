<div class="card bg-light ">
    <form action="" method="POST">
        <div class="card-header">
            <a class="btn btn-outline-primary" href="<?php echo site_url('admin/kompetensi_keahlian/') ?>">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                Kembali
            </a>
        </div>
        <div class="card-body">
            <input type="hidden" name="id_kk" value="<?php echo $GetKK->id_kk ?>">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tahun Ajaran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" value="<?php echo $GetKK->nama_kk; ?>" name="nama_kk" required>
                </div>
            </div>

        </div>

        <div class="card-footer text-right">
            <button type="submit" class="btn btn-outline-primary">Simpan</button>
        </div>
    </form>
</div>