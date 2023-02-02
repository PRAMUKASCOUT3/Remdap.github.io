<section class="content mt-2">

    <div class="container-fluid">

        <div class="card border-primary">
            <!-- tes -->
            <div class="card-body">
                <a href="<?= base_url('users'); ?>" class="btn btn-secondary">Kembali</a>
                <h5 class="card-title"><?php echo($title)?></h5>

                <!-- General Form Elements -->
                <form method="post" action="<?= base_url('users/insert'); ?>">
                <div class="form-group">
                        <label for="">username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="">nama lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="">password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-form-label">Hak Akses</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="hak_akses" aria-label="Default select example" >
                                <option selected=""></option>
                                <option value="pemilik">Pemilik</option>
                                <option value="asisten">Asisten</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group pt-2">
                        <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
                    </div>

                </form><!-- End General Form Elements -->

            </div>

        </div>
    </div>
</section>




