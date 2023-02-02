<section class="content mt-2">

    <div class="container">

        <div class="card border-primary">
            <!-- tes -->
            <div class="card-body">
                <a href="<?= base_url('pemeriksaan'); ?>" class="btn btn-secondary">Kembali</a>
                <h5 class="card-title"><?php echo($title)?></h5>

                <!-- General Form Elements -->
                <form method="post" action="<?= base_url('pemeriksaan/update'); ?>">
                <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" value="<?= $r['tanggal_lahir']?>" required>
                    </div>
                    
                    <div class="row mb-3">
                    <label for="">Nama pasien</label>
                    <select name="id_pasien" id="" class="form-control">
                        <option value="">Pilih pasien</option>
                        <?php foreach ($pasien as $r) { ?>
                            <option value="<?= $r['id_pasien']; ?>"><?= $r['nama_pasien']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                    
                    <div class="form-group">
                        <label for="">Keluhan</label>
                        <input type="text" name="keluhan" class="form-control" value="<?= $r['keluhan']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Diagnosa</label>
                        <input type="text" name="diagnosa" class="form-control" value="<?= $r['diagnosa']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Hasil Pemeriksaan</label>
                        <input type="text" name="hasil_pemeriksaan" value="<?= $r['hasil_pemeriksaan']?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Terapi</label>
                        <input type="text" name="terapi" class="form-control" value="<?= $r['terapi']?>" required>
                    </div>
                </form>

                        <label class="col col-form-label"></label>
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </div>

                <!-- End General Form Elements -->

            </div>

        </div>
    </div>
</section>









<!-- <section class="content mt-2">

    <div class="container-fluid">

        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('pemeriksaan'); ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">

                <form method="post" action="<?= base_url('pemeriksaan/update'); ?>">
                    <input type="hidden" name="id" value="<?= $r['id']; ?>">
                    <div class="form-group">
                        <label for="">username</label>
                        <input type="text" name="username" value="<?= $r['username']; ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">nama lengkap</label>
                        <input type="text" name="nama_lengkap" value="<?= $r['nama_lengkap']; ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">password</label>
                        <input type="password" name="password" value="<?= $r['password']; ?>" class="form-control" placeholder="kosongkan jika tidak merubah password....">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</section> -->