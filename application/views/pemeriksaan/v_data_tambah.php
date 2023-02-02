<section class="content mt-2">

    <div class="container-fluid">

        <div class="card border-primary">
            <!-- tes -->
            <div class="card-body">
                <a href="<?= base_url('pemeriksaan'); ?>" class="btn btn-secondary">Kembali</a>
                <h5 class="card-title"><?php echo($title);?></h5>

                <!-- General Form Elements -->
                <form method="post" action="<?= base_url('pemeriksaan/insert'); ?>">
                <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" required>
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
                        <input type="text" name="keluhan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Diagnosa</label>
                        <input type="text" name="diagnosa" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Hasil Pemeriksaan</label>
                        <input type="text" name="hasil_pemeriksaan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Terapi</label>
                        <input type="text" name="terapi" class="form-control" required>
                    </div>

                    <div class="form-group pt-2">
                        <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
                    </div>

                </form><!-- End General Form Elements -->

            </div>

        </div>
    </div>
</section>




