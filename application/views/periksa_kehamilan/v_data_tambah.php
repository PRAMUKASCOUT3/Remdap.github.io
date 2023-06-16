<section class="content mt-2">

    <div class="container-fluid">

        <div class="card border-primary">
            <!-- tes -->
            <div class="card-body">
                <a href="<?= base_url('periksa_kehamilan'); ?>" class="btn btn-secondary">Kembali</a>
                <h5 class="card-title"><?php echo($title)?></h5>

                <!-- General Form Elements -->
                <form method="post" action="<?= base_url('periksa_kehamilan/insert'); ?>">
                <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" name="Tanggal" class="form-control" required>
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
                        <input type="number" name="no_telpon" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Gravida</label>
                        <input type="number" name="Gravida" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Partus</label>
                        <input type="number" name="Partus" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Abortus</label>
                        <input type="number" name="Abortus" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">HPHT</label>
                        <input type="date" name="HPHT" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">TP</label>
                        <input type="date" name="TP" class="form-control" required>
                    </div>
                    <th>PEMERIKSAAN</th>
                    <br>
                    <br>
                    <div class="form-group">
                        <label for="">LILA</label>
                        <input type="text" name="LILA" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">BB</label>
                    <input type="text" name="BB" class="form-control" required>
                    </div>
<div class="form-group">
    <label for="">TD</label>
    <input type="text" name="TD" class="form-control" required>
</div>
<div class="form-group">
    <label for="">HAMIL</label>
    <input type="text" name="HAMIL" class="form-control" required>
</div>
<div class="form-group">
    <label for="">TFU</label>
    <input type="text" name="TFU" class="form-control" required>
</div>
<div class="form-group">
    <label for="">LETAK JANIN</label>
    <input type="text" name="LETAK_JANIN" class="form-control" required>
</div>
<div class="form-group">
    <label for="">DJJ</label>
    <input type="text" name="DJJ" class="form-control" required>
</div>
<div class="form-group">
    <label for="">LAB/HB</label>
    <input type="text" name="LAB/HB" class="form-control" required>
</div>
                    <div class="form-group">
                        <label for="">keluhan</label>
                        <input type="text" name="keluhan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Terapi</label>
                        <input type="text" name="terapi" class="form-control" required>
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




