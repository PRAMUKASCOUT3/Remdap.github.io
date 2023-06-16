<section class="content mt-2">

    <div class="container">

    <div class="card border-primary">
            <!-- tes -->
            <div class="card-body">
                <a href="<?= base_url('imunisasi'); ?>" class="btn btn-secondary">Kembali</a>
                <h5 class="card-title"><?php echo($title)?></h5>
            <div class="card-body">

            <form method="post" action="<?= base_url('imunisasi/update'); ?>">
            <input type="hidden" name="id_imunisasi" value="<?= $r['id_imunisasi']; ?>">
                    <div class="form-group col-sm-5">
                        <label for="inputText" class="col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" name="tanggal" class="form-control"  value="<?= $r['tanggal']; ?>" required>
                        </div>
                    </div><br>
                <div class="form-group col-sm-5">
                    <label for="">pasien</label>
                    <select name="id_pasien" id="" class="form-control">
                        <option value="">Pilih pasien</option>
                        <?php foreach ($imunisasi as $p) { ?>
                                <option value="<?= $p['id_pasien']; ?>" <?= $p['id_pasien'] == $r['id_pasien'] ? 'selected' : '' ?>><?= $p['nama_pasien']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                    </div>
                    <div class="form-group col-sm-5">
                        <label for="inputText" class="col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" name="tanggal_lahir" class="form-control" value="<?= $r['tanggal_lahir']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group col-sm-5">
                        <label for="inputText" class=" col-form-label">Nama Orang Tua</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_orang_tua" class="form-control" value="<?= $r['nama_orang_tua']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group col-sm-5">
                        <label for="inputText" class=" col-form-label">alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat" class="form-control" value="<?= $r['alamat']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group col-sm-5">
                        <label for="inputText" class=" col-form-label">Jenis Imunisasi</label>
                        <div class="col-sm-10">
                            <input type="text" name="jenis_imunisasi" class="form-control" value="<?= $r['jenis_imunisasi']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group col-sm-5">
                        <label for="inputText" class=" col-form-label">Pengobatan</label>
                        <div class="col-sm-10">
                            <input type="text" name="pengobatan" class="form-control" value="<?= $r['pengobatan']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group col-sm-5">
                        <label for="inputText" class="col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="number" name="keterangan" class="form-control" value="<?= $r['keterangan']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group col-sm-3">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Ubah Data</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</section>