<section class="content mt-2">

    <div class="container-fluid">

        <div class="card border-primary">
            <!-- tes -->
            <div class="card-body">
                <a href="<?= base_url('obat'); ?>" class="btn btn-secondary">Kembali</a>
                <h5 class="card-title"><?php echo($title)?></h5>

                <!-- General Form Elements -->
                <form method="post" action="<?= base_url('obat/insert'); ?>">
                <div class="form-group">
                        <label for="">Nama Obat</label>
                        <input type="text" name="nama_obat" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Jenis Obat</label>
                        <input type="text" name="jenis_obat" class="form-control" required>
                    </div>

                    <div class="form-group pt-2">
                        <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
                    </div>

                </form><!-- End General Form Elements -->

            </div>

        </div>
    </div>
</section>




