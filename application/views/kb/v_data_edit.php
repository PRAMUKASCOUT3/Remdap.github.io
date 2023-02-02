<section class="content mt-2">

    <div class="container-fluid">

        <div class="card border-primary">
            <!-- tes -->
            <div class="card-body">
                <a href="<?= base_url('kb'); ?>" class="btn btn-secondary">Kembali</a>
                <h5 class="card-title"><?php echo($title)?></h5>

                <!-- General Form Elements -->
                <form method="post" action="<?= base_url('kb/update'); ?>">
                <input type="hidden" name="id_kb" value="<?= $r['id_kb']; ?>">
                <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" name="tanggal" class="form-control" value="<?= $r['tanggal']; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">No.Regis</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="no_regis" aria-label="Default select example" value="<?= $r['no_regis']; ?>" >
                                <option selected=""></option>
                                <option value="BARU">BARU</option>
                                <option value="LAMA">LAMA</option>
                            </select>
                            <small class="text-danger">harap di isi ulang kembali</small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama istri</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_istri" class="form-control" value="<?= $r['nama_istri']; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Suami</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_suami" class="form-control" value="<?= $r['nama_suami']; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Umur Istri</label>
                        <div class="col-sm-10">
                            <input type="number" name="umur_istri" class="form-control"  value="<?= $r['umur_istri']; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat" class="form-control" value="<?= $r['alamat']; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">TD</label>
                        <div class="col-sm-10">
                            <input type="number" name="TD" class="form-control"  value="<?= $r['TD']; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">BB</label>
                        <div class="col-sm-10">
                            <input type="number" name="BB" class="form-control" value="<?= $r['BB']; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Metode</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="metode" aria-label="Default select example" value="<?= base_url('metode')?>" required >
                                <option selected=""></option>
                                <option value="KDM">KMD</option>
                                <option value="PIL">PIL</option>
                                <option value="SUNTIK">SUNTIK</option>
                                <option value="IMP">IMP</option>
                                <option value="IUD">IUD</option>
                            </select>
                            <small class="text-danger">harap di isi ulang kembali</small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Kunjungan Ulang</label>
                        <div class="col-sm-10">
                            <input type="date" name="kunjungan_ulang" value="<?= $r['kunjungan_ulang']; ?>"class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">NIK/NO.HP</label>
                        <div class="col-sm-10">
                            <input type="number" name="NIK_NO_HP" class="form-control" value="<?= $r['NIK_NO_HP']; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" name="keterangan" class="form-control" value="<?= $r['keterangan']; ?>"required>
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

