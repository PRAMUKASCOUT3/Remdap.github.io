<section class="content mt-2">

    <div class="container-fluid">

        <div class="card border-primary">
            <!-- tes -->
            <div class="card-body">
                <a href="<?= base_url('rekam_medis'); ?>" class="btn btn-secondary">Kembali</a>
                <h5 class="card-title">Tambah Data Rekam Medis</h5>

                <!-- General Form Elements -->
                <form method="post" action="<?= base_url('rekam_medis/insert'); ?>">
                <div class="form-group">
                        <label class="p-2" for="">tanggal</label>
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>
                    
                    <div class="row mb-3">
                    <label class="p-2" for="">Nama pasien</label>
                    <select name="id_pasien" id="" class="form-control">
                        <option value="">Pilih pasien</option>
                        <?php foreach ($pasien as $r) { ?>
                            <option value="<?= $r['id_pasien']; ?>"><?= $r['nama_pasien']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="row mb-3">
                    <label class="p-2" for="">Nama pemeriksa</label>
                    <select name="id_pegawai" id="" class="form-control">
                        <option value="">Pilih pemeriksa</option>
                        <?php foreach ($pegawai as $r) { ?>
                            <option value="<?= $r['id_pegawai']; ?>"><?= $r['nama_pegawai']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                    
                <div class="row mb-3">
                    <label class="p-2" for="">pemeriksaan</label>
                    <select name="id_pemeriksaan" id="" class="form-control">
                        <option value="">pemeriksaan</option>
                        <?php foreach ($pemeriksaan as $r) { ?>
                            <option value="<?= $r['id_pemeriksaan']; ?>"><?= $r['hasil_pemeriksaan']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group pt-2">
                        <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
                    </div>
                

                </form><!-- End General Form Elements -->

            </div>

        </div>
    </div>
</section>




