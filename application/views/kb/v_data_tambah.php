<section class="content mt-2">

    <div class="container">

        <div class="card border-primary">
            <!-- tes -->
            <div class="card-body">
                <a href="<?= base_url('kb'); ?>" class="btn btn-secondary">Kembali</a>
                <h5 class="card-title">Tambah Data Keluarga Berencana</h5>

                <!-- General Form Elements -->
                <form method="post" action="<?= base_url('kb/insert'); ?>">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" name="tanggal" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">No.Regis</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="no_regis" aria-label="Default select example" >
                                <option selected=""></option>
                                <option value="BARU">BARU</option>
                                <option value="LAMA">LAMA</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Istri</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_istri" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Suami</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_suami" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tanggal Lahir Istri</label>
                        <div class="col-sm-10">
                            <input type="date" name="umur_istri" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">TD</label>
                        <div class="col-sm-10">
                            <input type="number" name="TD" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">BB</label>
                        <div class="col-sm-10">
                            <input type="number" name="BB" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Metode</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="metode" aria-label="Default select example">
                                <option selected=""></option>
                                <option value="KDM">KMD</option>
                                <option value="PIL">PIL</option>
                                <option value="SUNTIK">SUNTIK</option>
                                <option value="IMP">IMP</option>
                                <option value="IUD">IUD</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Kunjungan Ulang</label>
                        <div class="col-sm-10">
                            <input type="date"  name="kunjungan_ulang" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">NIK/NO.HP</label>
                        <div class="col-sm-10">
                            <input type="number" name="NIK_NO_HP" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" name="keterangan" class="form-control" required>
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