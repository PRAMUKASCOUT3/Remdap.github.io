<section class="content mt-2">

    <div class="container-fluid">

        <div class="card border-primary">
            <!-- tes -->
            <div class="card-body">
                <a href="<?= base_url('lahiran'); ?>" class="btn btn-secondary">Kembali</a>
                <h5 class="card-title"><?php echo($title);?></h5>

                <!-- General Form Elements -->
                <form method="post" action="<?= base_url('lahiran/insert'); ?>">
                <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="">nama Istri</label>
                        <input type="text" name="nama_istri" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">nama suami</label>
                        <input type="text" name="nama_suami" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir istri</label>
                        <input type="date" name="umur_istri" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir Suami</label>
                        <input type="date" name="umur_suami" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">No.Telpon</label>
                        <input type="number" name="No_telpon" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Pekerjaan Istri</label>
                        <input type="text" name="pekerjaan_istri" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Pekerjaan Suami</label>
                        <input type="text" name="pekerjaan_suami" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">keluhan</label>
                        <input type="text" name="keluhan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tindakan</label>
                        <input type="text" name="tindakan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Bayi Lahir</label>
                        <input type="date" name="bayi_lahir" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" required>
                    </div>
                    <div class="form-group pt-2">
                        <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
                    </div>

                </form><!-- End General Form Elements -->

            </div>

        </div>
    </div>
</section>




