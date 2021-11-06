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
                    <input type="text" class="form-control" id="staticEmail" name="nisn" value="<?php echo $GetSiswa->nisn; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">NIS</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" name="nis" value="<?php echo $GetSiswa->nis; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" name="nama" value="<?php echo $GetSiswa->nama; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                    <select class="form-control" name="id_kelas" required>
                        <option value="<?php echo $GetSiswa->id_kelas; ?>"><?php echo $GetSiswa->nama_kelas; ?></option>
                        <?php foreach ($GetKelas as $GetR) : ?>
                            <?php if ($GetR->id_kelas !== $GetSiswa->id_kelas) : ?>
                                <option value="<?php echo $GetR->id_kelas; ?>"><?php echo $GetR->nama_kelas; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" name="alamat" value="<?php echo $GetSiswa->alamat; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">No Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" name="no_telp" value="<?php echo $GetSiswa->no_telp; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Tahun SPP</label>
                <div class="col-sm-10">
                    <select class="form-control" name="id_spp" required>
                        <option value="<?php echo $GetSiswa->id_spp; ?>"><?php echo $GetSiswa->tahun; ?></option>
                        <?php foreach ($GetSpp as $GetR) : ?>
                            <?php if ($GetR->id_spp !== $GetSiswa->id_spp) : ?>
                                <option value="<?php echo $GetR->id_spp; ?>"><?php echo $GetR->tahun; ?></option>
                            <?php endif; ?>
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