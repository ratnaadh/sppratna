<div class="card bg-light ">
    <form action="" method="POST">
        <div class="card-header">
            <a class="btn btn-outline-primary" href="<?php echo site_url('admin/siswa/') ?>">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                Kembali
            </a>
        </div>
        <div class="card-body">

            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" name="nisn" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">NIS</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" name="nis" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" name="nama" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                    <select class="form-control" name="id_kelas" required>
                        <option value="">Pilih Kelas</option>
                        <?php foreach ($GetKelas as $GetR) : ?>
                            <option value="<?php echo $GetR->id_kelas; ?>"><?php echo $GetR->nama_kelas; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" name="alamat" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">No Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" name="no_telp" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Tahun SPP</label>
                <div class="col-sm-10">
                    <select class="form-control" name="id_spp" required>
                        <option value="">Pilih Kelas</option>
                        <?php foreach ($GetSpp as $GetR) : ?>
                            <option value="<?php echo $GetR->id_spp; ?>"><?php echo $GetR->tahun; ?></option>
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