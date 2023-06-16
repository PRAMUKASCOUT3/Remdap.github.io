<section class="content mt-2">

    <div class="container-fluid">

        <div class="card border-primary">
            <!-- tes -->
            <div class="card-body">
                <a href="<?= base_url('lahiran'); ?>" class="btn btn-secondary">Kembali</a>
                <h5 class="card-title"><?php echo($title);?></h5>

                <!-- General Form Elements -->
                <form method="post" action="<?= base_url('lahiran/insert'); ?>">
                <div class="form-group col-sm-3 ">
                        <label for="">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>
                    
                    <div class="form-group col-sm-3 pt-2">
                        <label for="">nama Istri</label>
                        <input type="text" name="nama_istri" class="form-control" required>
                    </div>
                    <div class="form-group col-sm-3 pt-2">
                        <label for="">nama suami</label>
                        <input type="text" name="nama_suami" class="form-control" required>
                    </div>
                    <div class="form-group col-sm-3 pt-2">
                        <label for="">Tanggal Lahir istri</label>
                        <input type="date" name="umur_istri" class="form-control" required>
                    </div>
                    <div class="form-group col-sm-3 pt-2">
                        <label for="">Tanggal Lahir Suami</label>
                        <input type="date" name="umur_suami" class="form-control" required>
                    </div>
                    <div class="form-group col-sm-3 pt-2">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                    </div>
                    <div class="form-group col-sm-3 pt-2">
                        <label for="">No.Telpon</label>
                        <input type="number" name="No_telpon" class="form-control" required>
                    </div>
                    <div class="form-group col-sm-3 pt-2">
                        <label for="">Pekerjaan Istri</label>
                        <input type="text" name="pekerjaan_istri" class="form-control" required>
                    </div>
                    <div class="form-group col-sm-3 pt-2">
                        <label for="">Pekerjaan Suami</label>
                        <input type="text" name="pekerjaan_suami" class="form-control" required>
                    </div>
                    <div class="form-group col-sm-5 pt-2">
                        <label for="">keluhan</label>
                        <input type="text" name="keluhan" class="form-control" required>
                    </div>
                    <div class="form-group pt-2">
                        <label>Tindakan</label>
                        <div class="form-group col-sm-2">
                            <label for="">TD</label>
                            <input type="text" name="TD" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-2">
                            <label for="">S</label>
                            <input type="text" name="S" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-2">
                            <label for="">BB</label>
                            <input type="text" name="BB" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-2">
                            <label for="">TFU</label>
                            <input type="text" name="TFU" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-2">
                            <label for="">DJJ</label>
                            <input type="text" name="DJJ" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-2">
                            <label for="">PD</label>
                            <input type="number" name="PD" class="form-control" required>
                        </div><br>
                        <div class="row mb-3">
                        <label class=" col-form-label">Porsio</label>
                        <div class="col-sm-3">
                            <select class="form-select" name="porsio1" aria-label="Default select example">
                                <option selected=""></option>
                                <option value="KERAS">Keras</option>
                                <option value="LUNAK">Lunak</option>
                            </select><br>
                            <select class="form-select" name="porsio2" aria-label="Default select example">
                                <option selected=""></option>
                                <option value="TEBAL">Tebal</option>
                                <option value="TIPIS">Tipis</option>
                            </select>
                        </div>
                        <br>
                    <div class="row mb-3">
                        <label class=" col-form-label">Ketuban</label>
                        <div class="col-sm-3">
                            <select class="form-select" name="ketuban" aria-label="Default select example">
                                <option selected=""></option>
                                <option value="+">+</option>
                                <option value="-">-</option>
                            </select>
                        </div>
                    </div>
                        <div class="form-group col-sm-3">
                            <label for="">Penurunan/HOD</label>
                            <input type="text" name="penurunan_HOD" class="form-control" required>
                        </div>

                    </div>
                </div>
                    <div class="form-group pt-2">
                        <label for="">Bayi Lahir</label>
                        <div class="form-group col-sm-3 pt-2">
                            <label for="">Pukul</label>
                            <input type="time" name="pukul" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-3 pt-2">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="bayi_lahir" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-3 pt-2">
                            <label for="">BB</label>
                            <input type="text" name="berat_badan" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-3 pt-2">
                            <label for="">PB</label>
                            <input type="text" name="PB" class="form-control" required>
                        </div>
                        <div class="col-sm-3 pt-2">
                        <label for="">JK</label>
                            <select class="form-select" name="JK" aria-label="Default select example">
                                <option selected=""></option>
                                <option value="LAKI-LAKI">Laki-Laki</option>
                                <option value="PEREMPUAN">Perempuan</option>
                            </select>
                        </div>

                        <div class="col-sm-3 pt-2">
                        <label for="">Anus</label>
                            <select class="form-select" name="anus" aria-label="Default select example">
                                <option selected=""></option>
                                <option value="+">+</option>
                                <option value="-">-</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-sm-3 pt-2">
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




