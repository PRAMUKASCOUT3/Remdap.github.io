<section class="content mt-2">

<div class="container">

    <div class="card border-primary">
        <!-- tes -->
        <div class="card-body">
            <a href="<?= base_url('imunisasi'); ?>" class="btn btn-secondary">Kembali</a>
            <h5 class="card-title">Tambah Data Imunisasi</h5>

            <!-- General Form Elements -->
            <form method="post" action="<?= base_url('imunisasi/insert'); ?>">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="">pasien</label>
                    <p></p>
                    <select name="id_pasien" id="" class="form-control">
                        <option value="">Pilih pasien</option>
                        <?php foreach ($pasien as $r) { ?>
                            <option value="<?= $r['id_pasien']; ?>"><?= $r['nama_pasien']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" name="tanggal_lahir" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Orang Tua</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_orang_tua" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">alamat</label>
                    <div class="col-sm-10">
                        <input type="text" name="alamat" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Jenis Imunisasi</label>
                    <div class="col-sm-10">
                        <input type="text" name="jenis_imunisasi" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Pengobatan</label>
                    <div class="col-sm-10">
                        <input type="text" name="pengobatan" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="number" name="keterangan" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </div>

            </form><!-- End General Form Elements -->

        </div>

    </div>
</div>
</section>