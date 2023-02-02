<section class="content mt-2">

    <div class="container">

        <div class="card border-primary">
            <!-- tes -->
            <div class="card-body">
                <a href="<?= base_url('pasien'); ?>" class="btn btn-secondary">Kembali</a>
                <h5 class="card-title">Tambah Data Pasien</h5>

                <!-- General Form Elements -->
                <form method="post" action="<?= base_url('pasien/insert'); ?>">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Pasien</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_pasien" class="form-control" required>
                        </div>

                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                <option selected=""></option>
                                <option value="L">laki-laki</option>
                                <option value="P">perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText"  class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                            <input type="date" name="umur" class="form-control"  required >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="number" name="NIK" class="form-control" required>
                        </div>
                    </div>
                    


                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </div>

                </form><!-- End General Form Elements -->

            </div>

        </div>
    </div>
</section>