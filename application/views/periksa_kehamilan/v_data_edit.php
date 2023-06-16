<section class="content mt-2">

    <div class="container">

        <div class="card border-primary">
            <!-- tes -->
            <div class="card-body">
                <a href="<?= base_url('periksa_kehamilan'); ?>" class="btn btn-secondary">Kembali</a>
                <h5 class="card-title"><?php echo ($title)?></h5>
                <!-- General Form Elements -->
                <form method="post" action="<?= base_url('periksa_kehamilan/update'); ?>">
                <input type="hidden" name="id_periksa" value="<?php echo $r['id_periksa']; ?>">
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="Tanggal" class="form-control" value="<?php echo $r['Tanggal']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="nama_istri">Nama Istri</label>
                    <input type="text" name="nama_istri" value="<?php echo $r['nama_istri']; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nama_suami">Nama Suami</label>
                    <input type="text" name="nama_suami" value="<?php echo $r['nama_suami']; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="umur_istri">Umur Istri</label>
                    <input type="number" name="umur_istri" value="<?php echo $r['umur_istri']; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="umur_suami">Umur Suami</label>
                    <input type="number" name="umur_suami" value="<?php echo $r['umur_suami']; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" value="<?php echo $r['alamat']; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="no_telpon">No.Telpon</label>
                    <input type="number" name="no_telpon" value="<?php echo $r['no_telpon']; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="gravida">Gravida</label>
                    <input type="number" name="Gravida" value="<?php echo $r['Gravida']; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="partus">Partus</label>
                    <input type="number" name="Partus" value="<?php echo $r['Partus']; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="abortus">Abortus</label>
                    <input type="number" name="Abortus" value="<?php echo $r['Abortus']; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">HPHT</label>
                    <input type="date" name="HPHT" value="<?php echo $r['HPHT']; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">TP</label>
                    <input type="date" name="TP" value="<?php echo $r['TP']; ?>" class="form-control" required>
                </div>
                < class="form-group">
                <label for="">Pemeriksaan</label>
                <div class="form-group">
                    <label for="">LILA</label>
                    <input type="text" name="LILA" value="<?php echo $r['LILA']; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">BB</label>
                    <input type="text" name="BB" value="<?php echo $r['BB']; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">TD</label>
                    <input type="text" name="TD" value="<?php echo $r['TD']; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">HAMIL</label>
                    <input type="text" name="HAMIL" value="<?php echo $r['HAMIL']; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">TFU</label>
                    <input type="text" name="TFU" value="<?php echo $r['TFU']; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">LETAK JANIN</label>
                    <input type="text" name="LETAK_JANIN" value="<?php echo $r['LETAK_JANIN']; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">DJJ</label>
                    <input type="text" name="DJJ" value="<?php echo $r['DJJ']; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">LAB/HB</label>
                    <input type="text" name="LAB/HB" value="<?php echo $r['LAB/HB']; ?>" class="form-control" required>
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
