<div class="card bg-light ">
    <form action="" method="POST">
        <div class="card-header">
            <a class="btn btn-outline-primary" href="<?php echo site_url('admin/pembayaran/') ?>">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                Kembali
            </a>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama Petugas</label>
                <div class="col-sm-10">
                    <select class="form-control" name="id_petugas" required>
                        <option value="">Pilih Petugas</option>
                        <?php foreach ($GetPetugas as $GetR) : ?>
                            <option value="<?php echo $GetR->id_petugas; ?>"><?php echo $GetR->nama_petugas; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama Siswa</label>
                <div class="col-sm-10">
                    <select class="form-control" name="nisn" required>
                        <option value="">Pilih Siswa</option>
                        <?php foreach ($GetSiswa as $GetR) : ?>
                            <option value="<?php echo $GetR->nisn; ?>"><?php echo $GetR->nama; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Bayar</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="staticEmail" name="tgl_bayar" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Bulan Bayar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" name="bulan_bayar" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tahun Bayar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" name="tahun_bayar" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nominal</label>
                <div class="col-sm-10">
                    <select class="form-control" name="id_spp" required>
                        <option value="">Pilih Nominal</option>
                        <?php foreach ($GetSpp as $GetR) : ?>
                            <option value="<?php echo $GetR->id_spp; ?>"><?php echo $GetR->nominal; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Jumlah Bayar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" name="jumlah_bayar" required>
                </div>
            </div>
        </div>

        <div class="card-footer text-right">
            <button type="submit" class="btn btn-outline-primary">Simpan</button>
        </div>
    </form>
</div>