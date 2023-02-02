<section class="content mt-2">

    <div class="container">

        <div class="card border-primary">
            <!-- tes -->
            <div class="card-body">
                <a href="<?= base_url('periksa_kehamilan'); ?>" class="btn btn-secondary">Kembali</a>
                <h5 class="card-title"><?php echo($title)?></h5>

                <!-- General Form Elements -->
                <form method="post" action="<?= base_url('periksa_kehamilan/update'); ?>">
                    <input type="hidden" name="id_periksa" value="<?= $r['id_periksa']; ?>">
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" name="Tanggal" class="form-control" value="<?= $r['Tanggal']; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="">nama Istri</label>
                        <input type="text" name="nama_istri" value="<?= $r['nama_istri']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">nama suami</label>
                        <input type="text" name="nama_suami" value="<?= $r['nama_suami']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir istri</label>
                        <input type="number" name="umur_istri" value="<?= $r['umur_istri']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir Suami</label>
                        <input type="number" name="umur_suami" value="<?= $r['umur_suami']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" value="<?= $r['alamat']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">No.Telpon</label>
                        <input type="number" name="no_telpon" value="<?= $r['no_telpon']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Gravida</label>
                        <input type="number" name="Gravida" value="<?= $r['Gravida']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Partus</label>
                        <input type="number" name="Partus" value="<?= $r['Partus']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Abortus</label>
                        <input type="number" name="Abortus" value="<?= $r['Abortus']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">HPHT</label>
                        <input type="date" name="HPHT" value="<?= $r['HPHT']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">TP</label>
                        <input type="date" name="TP" value="<?= $r['TP']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Pemeriksaan</label>
                        <input type="textarea" name="pemeriksaan" value="<?= $r['pemeriksaan']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">keluhan</label>
                        <input type="text" name="keluhan" value="<?= $r['keluhan']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Terapi</label>
                        <input type="text" name="terapi" value="<?= $r['terapi']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <input type="text" name="keterangan" value="<?= $r['keterangan']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group pt-2">
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                    </div>

                </form>

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

                <a href="<?= base_url('lahiran'); ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">

                <form method="post" action="<?= base_url('lahiran/update'); ?>">
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