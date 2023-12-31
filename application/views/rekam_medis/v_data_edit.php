<section class="content mt-2">

    <div class="container">

        <div class="card border-primary">
            <!-- tes -->
            <div class="card-body">
                <a href="<?= base_url('rekam_medis'); ?>" class="btn btn-secondary">Kembali</a>
                <h5 class="card-title">Edit Data Rekam Medis</h5>

                <!-- General Form Elements -->
                <form method="post" action="<?= base_url('rekam_medis/update'); ?>">
                <input type="hidden" name="id_rekam_medis" value="<?= $r['id_rekam_medis']; ?>">
                    <div class="form-group">
                        <label class="p-2" for="">tanggal</label>
                        <input type="date" name="tanggal"value="<?= $r['tanggal']; ?>" class="form-control" required>
                    </div>
                    
                    <div class="row mb-3">
                    <label class="p-2" for="">Nama pasien</label>
                    <select name="id_pasien" id="" class="form-control">
                        <option value="">Pilih pasien</option>
                        <?php foreach ($pasien as $p) { ?>
                                <option value="<?= $p['id_pasien']; ?>" <?= $p['id_pasien'] == $r['id_pasien'] ? 'selected' : '' ?>><?= $p['nama_pasien']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="row mb-3">
                    <label class="p-2" for="">Nama pemeriksa</label>
                    <select name="id_pegawai" id="" class="form-control">
                        <option value="">Pilih pemeriksa</option>
                        <?php foreach ($pegawai as $p) { ?>
                                <option value="<?= $p['id_pegawai']; ?>" <?= $p['id_pegawai'] == $r['id_pegawai'] ? 'selected' : '' ?>><?= $p['nama_pegawai']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                    
                <div class="row mb-3">
                    <label class="p-2" for="">Diagnosa</label>
                    <select name="id_pemeriksaan" id="" class="form-control">
                        <option value="">Diagnosa</option>
                        <?php foreach ($pemeriksaan as $p) { ?>
                                <option value="<?= $p['id_pemeriksaan']; ?>" <?= $p['id_pemeriksaan'] == $r['id_pemeriksaan'] ? 'selected' : '' ?>><?= $p['diagnosa']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="row mb-3">
                    <label class="p-2" for="">Pengobatan</label>
                    <select name="id_obat" id="" class="form-control">
                        <option value="">Pengobatan</option>
                        <?php foreach ($obat as $r) { ?>
                            <option value="<?= $r['id_obat']; ?>" <?= $r['id_obat'] == $r['id_obat'] ? 'selected' : '' ?>><?= $r['nama_obat']; ?></option>
                        <?php } ?>
                    </select>
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

                <a href="<?= base_url('users'); ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">

                <form method="post" action="<?= base_url('users/update'); ?>">
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