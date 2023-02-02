<section class="content mt-2">

    <div class="container">

        <div class="card border-primary">
            <!-- tes -->
            <div class="card-body">
                <a href="<?= base_url('pasien'); ?>" class="btn btn-secondary">Kembali</a>
                <h5 class="card-title">Edit Data Pasien</h5>

                <!-- General Form Elements -->
                <form method="post" action="<?= base_url('pasien/update'); ?>">
                <input type="hidden" name="id_pasien" value="<?= $r['id_pasien']; ?>">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Pasien</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_pasien" value="<?= $r['nama_pasien']; ?>"  class="form-control" required>
                        </div>

                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="jenis_kelamin" aria-label="Default select example" required>
                                <option selected=""></option>
                                <option value="L">laki-laki</option>
                                <option value="P">perempuan</option>
                            </select>
                            <small class="text-danger">input ulang Jenis Kelamin</small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                            <input type="number" name="umur"  value="<?= $r['umur']; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat" class="form-control" value="<?= $r['alamat']; ?>" required>
                        </div>
                        <div class="row mb-3 pt-4">
                        <label for="inputText" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="number" name="NIK" class="form-control" value="<?= $r['NIK']; ?>" required>
                        </div>


                    <div class="row mb-3 pt-3">
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





<!-- <section class="content mt-2">

    <div class="container-fluid">

        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('pasien'); ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">

                <form method="post" action="<?= base_url('pasien/update'); ?>">
                    <input type="hidden" name="id_pasien" value="<?= $r['id_pasien']; ?>">
                    <div class="form-group">
                        <label for="">Nama Pasien</label>
                        <input type="text" name="nama_pasien" value="<?= $r['nama_pasien']; ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">L/P</label>
                        <select name="jenis_kelamin" id="" class="form-control">
                            <option value="L">L</option>
                            <option value="P">P</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Umur</label>
                        <input type="number" name="umur" value="<?= $r['umur']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</section> -->