<div class="card bg-light ">
    <form action="" method="POST">
        <div class="card-header">
            <a class="btn btn-outline-primary" href="<?php echo site_url('admin/pembayaran/') ?>">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                Kembali
            </a>
        </div>
        <div class="card-body">
            <input type="hidden" name="id_pembayaran" value="<?php echo $GetPembayaran->id_pembayaran ?>">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama Petugas</label>
                <div class="col-sm-10">
                    <select class="form-control" name="id_petugas" required>
                        <option value="<?php echo $GetPembayaran->id_petugas; ?>"><?php echo $GetPembayaran->nama_petugas; ?></option>
                        <?php foreach ($GetPetugas as $GetR) : ?>
                            <?php if ($GetR->id_petugas !== $GetPembayaran->id_petugas) : ?>
                                <option value="<?php echo $GetR->id_petugas; ?>"><?php echo $GetR->nama_petugas; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama Siswa</label>
                <div class="col-sm-10">
                    <select class="form-control" name="nisn" required>
                        <option value="<?php echo $GetPembayaran->nisn; ?>"><?php echo $GetPembayaran->nama; ?></option>
                        <?php foreach ($GetSiswa as $GetR) : ?>
                            <?php if ($GetR->nisn !== $GetPembayaran->nisn) : ?>
                                <option value="<?php echo $GetR->nisn; ?>"><?php echo $GetR->nama; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Bayar</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="staticEmail" name="tgl_bayar" value="<?php echo $GetPembayaran->tgl_bayar; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Bulan Bayar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" name="bulan_bayar" value="<?php echo $GetPembayaran->bulan_bayar; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tahun Bayar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" name="tahun_bayar" value="<?php echo $GetPembayaran->tahun_bayar; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nominal</label>
                <div class="col-sm-10">
                    <select class="form-control" name="id_spp" required>
                        <option value="<?php echo $GetPembayaran->id_spp; ?>"><?php echo $GetPembayaran->nominal; ?></option>
                        <?php foreach ($GetSpp as $GetR) : ?>
                            <?php if ($GetR->id_spp !== $GetPembayaran->id_spp) : ?>
                                <option value="<?php echo $GetR->id_spp; ?>"><?php echo $GetR->nominal; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Jumlah Bayar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" name="jumlah_bayar" value="<?php echo $GetPembayaran->jumlah_bayar; ?>" required>
                </div>
            </div>
        </div>


        <div class="card-footer text-right">
            <button type="submit" class="btn btn-outline-primary">Simpan</button>
        </div>
    </form>
</div>