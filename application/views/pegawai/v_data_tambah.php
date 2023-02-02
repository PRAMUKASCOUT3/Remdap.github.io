<section class="content mt-2">

    <div class="container-fluid">

        <div class="card border-primary">
            <!-- tes -->
            <div class="card-body">
                <a href="<?= base_url('pegawai'); ?>" class="btn btn-secondary">Kembali</a>
                <h5 class="card-title">Tambah Data Pegawai</h5>

                <!-- General Form Elements -->
                <form method="post" action="<?= base_url('pegawai/insert'); ?>">
                <div class="form-group">
                        <label for="">Nama Pegawai</label>
                        <input type="text" name="nama_pegawai" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                <option selected=""></option>
                                <option value="laki-laki">laki-laki</option>
                                <option value="perempuan">perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Umur</label>
                        <input type="date" name="umur" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="">alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="">No.Telpon</label>
                        <input type="number" name="no_telpon" class="form-control" required>
                    </div>

                    <div class="form-group pt-2">
                        <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
                    </div>

                </form><!-- End General Form Elements -->

            </div>

        </div>
    </div>
</section>




