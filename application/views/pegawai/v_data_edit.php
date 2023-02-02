<section class="content mt-2">

    <div class="container">

        <div class="card border-primary">
            <!-- tes -->
            <div class="card-body">
                <a href="<?= base_url('pegawai'); ?>" class="btn btn-secondary">Kembali</a>
                <h5 class="card-title">Edit Data Pegawai</h5>

                <!-- General Form Elements -->
                <form method="post" action="<?= base_url('pegawai/update'); ?>">
                    <input type="hidden" name="id_pegawai" value="<?= $r['id_pegawai']; ?>">
                    <div class="form-group pt">
                        <label for="">Nama Pegawai</label>
                        <input type="text" name="nama_pegawai" value="<?= $r['nama_pegawai']; ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" value="<?= $r['tempat_lahir']?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" value="<?= $r['tanggal_lahir']?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                <option selected=""></option>
                                <option value="Laki-laki">laki-laki</option>
                                <option value="Perempuan">perempuan</option>
                            </select>
                            <span>harap diisi kembali</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Umur</label>
                        <input type="number" name="umur" value="<?= $r['umur']?>" class="form-control" required>
                    </div>
                    

                    <div class="form-group pt-2">
                        <label for="">alamat</label>
                        <input type="text" name="alamat" value="<?= $r['alamat']; ?>" class="form-control" required>
                    </div>

                    <div class="form-group pt-2">
                        <label for="">No.Telpon</label>
                        <input type="number" name="no_telpon" value="<?= $r['no_telpon']; ?>" class="form-control" required>
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

                <a href="<?= base_url('pegawai'); ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">

                <form method="post" action="<?= base_url('pegawai/update'); ?>">
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