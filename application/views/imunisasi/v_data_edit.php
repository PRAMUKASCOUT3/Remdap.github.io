<section class="content mt-2">

    <div class="container-fluid">

        <div class="card border">
            <div class="card-header ">
                <?= $title; ?>

                <a href="<?= base_url('imunisasi'); ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">

            <form method="post" action="<?= base_url('imunisasi/update'); ?>">
            <input type="hidden" name="id_imunisasi" value="<?= $r['id_imunisasi']; ?>">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" name="tanggal" class="form-control"  value="<?= $r['tanggal']; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Bayi</label>
                        <div class="col-sm-10">
                            <input type="text" name="id_pasien" class="form-control"  value="<?= $r['id_pasien']; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" name="tanggal_lahir" class="form-control" value="<?= $r['tanggal_lahir']; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Orang Tua</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_orang_tua" class="form-control" value="<?= $r['nama_orang_tua']; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat" class="form-control" value="<?= $r['alamat']; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Jenis Imunisasi</label>
                        <div class="col-sm-10">
                            <input type="text" name="jenis_imunisasi" class="form-control" value="<?= $r['jenis_imunisasi']; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Pengobatan</label>
                        <div class="col-sm-10">
                            <input type="text" name="pengobatan" class="form-control" value="<?= $r['pengobatan']; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="number" name="keterangan" class="form-control" value="<?= $r['keterangan']; ?>" required>
                        </div>
                    </div>

                    <div class="row mb-3">
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