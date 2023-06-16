<section class="content mt-2">

    <div class="container">

        <div class="card border-primary">
            <!-- tes -->
            <div class="card-body">
                <a href="<?= base_url('pemeriksaan'); ?>" class="btn btn-secondary">Kembali</a>
                <h5 class="card-title"><?php echo($title)?></h5>

                <!-- General Form Elements -->
                <form method="post" action="<?= base_url('pemeriksaan/update'); ?>">
                    <input type="hidden" name="id_pemeriksaan" value="<?= $r['id_pemeriksaan']; ?>">
                    <div class="form-group col-sm-5">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" value="<?= $r['tanggal_lahir'] ?>"
                            required>
                    </div>

                    <div class="form-group col-sm-5">
                        <label for="">Nama pasien</label>
                        <select name="id_pasien" id="" class="form-control">
                            <option value="">Pilih pasien</option>
                            <?php foreach ($pasien as $p) { ?>
                            <option value="<?= $p['id_pasien']; ?>"
                                <?= $p['id_pasien'] == $r['id_pasien'] ? 'selected' : '' ?>><?= $p['nama_pasien']; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group col-sm-5">
                        <label for="">Keluhan</label>
                        <input type="text" name="keluhan" class="form-control" value="<?= $r['keluhan'] ?>" required>
                    </div>

                    <div class="form-group col-sm-5">
                        <label for="">Diagnosa</label>
                        <input type="text" name="diagnosa" class="form-control" value="<?= $r['diagnosa'] ?>" required>
                    </div>
                    <!-- <div class="form-group col-sm-5">
                        <label for="">Nama obat</label>
                        <select name="id_obat" id="" class="form-control">
                            <option value="">Pilih obat</option>
                            <?php foreach ($obat as $p) { ?>
                            <option value="<?= $p['id_obat']; ?>"
                                <?= $p['id_obat'] == $r['id_obat'] ? 'selected' : '' ?>><?= $p['nama_obat']; ?></option>
                            <?php } ?>
                        </select>
                    </div> -->
                    <div class="form-group col-sm-5">
                        <label for="">Obat</label>
                        <input type="text" name="id_obat" class="form-control" value="<?= $r['id_obat'] ?>" required>
                    </div>


                    <!-- <div class="form-group">
                        <label for="">Terapi</label>
                        <input type="text" name="terapi" class="form-control" value="<?= $r['terapi'] ?>" required>
                    </div> -->

                    <div class="form-group pt-2">
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                    </div>
                </form>
                <!-- End General Form Elements -->

            </div>

        </div>
    </div>
</section>