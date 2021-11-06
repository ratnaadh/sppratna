<div class="card bg-light ">
    <form action="" method="POST">
        <div class="card-header">
            <a class="btn btn-outline-primary" href="<?php echo site_url('admin/spp/') ?>">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                Kembali
            </a>
        </div>
        <div class="card-body">
            <input type="hidden" name="id_spp">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tahun Ajaran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" name="tahun" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nominal</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="nominal" required>
                </div>
            </div>
        </div>

        <div class="card-footer text-right">
            <button type="submit" class="btn btn-outline-primary">Simpan</button>
        </div>
    </form>
</div>