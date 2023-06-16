<div class="card-body">
    <div class="card-header">
        <a href="<?= base_url('lahiran/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
        <h5 class="card-title"> <?php ECHO($title);?> </h5>
        <?= $this->session->flashdata('pesan'); ?>
        <!-- Table with stripped rows -->
        <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>NO.</th>
                                <th>tanggal</th>
                                <th>Identitas</th>
                                <th>keluhan</th>
                                <th>tindakan</th>
                                <th>Bayi Lahir</th>
                                <th>keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($lahiran as $r) { ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $r['tanggal']; ?></td>
                                    <td>
                                        Nama Istri      : <?= $r['nama_istri']?><br>
                                        Nama Suami      : <?= $r['nama_suami']?><br>
                                        Umur Istri      : <?= $r['umur_istri']?><br>
                                        Umur Suami      : <?= $r['umur_suami']?><br>
                                        No.Hp           : <?= $r['No_telpon']?><br>
                                        Pekerjaan Istri : <?= $r['pekerjaan_istri']?><br>
                                        Pekerjaan suami : <?= $r['pekerjaan_suami']?><br>
                                    </td>
                                    <td> OS. Dengan Keluhan : <br>
                                    <?= $r['keluhan']; ?></td>
                                    <td>
                                        TTV :
                                        TD  : <?= $r['TD']?><br>
                                        S   : <?= $r['S']?><br>
                                        BB  : <?= $r['BB']?><br>
                                        TFU : <?= $r['TFU']?><br>
                                        DJJ : <?= $r['DJJ']?><br>
                                        PD  : <?= $r['PD']?><br>
                                        PORSIO : <?= $r['porsio1']?>,
                                        <?= $r['porsio2']?><br>
                                        Ketuban : <?= $r['ketuban']?><br>
                                        Penurunan/HOD : <?= $r['penurunan_HOD']?>
                                    </td>
                                    <td>
                                        Pukul : <?= $r['pukul']?><br>
                                        Tanggal Lahir : <?= $r['bayi_lahir']?><br>
                                        BB : <?= $r['berat_badan']?><br>
                                        PB : <?= $r['PB']?> CM <br>
                                        JK : <?= $r['JK']?><br>
                                        Anus : <?= $r['anus']?><br>
                                    </td>
                                    <td><?= $r['keterangan']; ?></td>


                                    <td>
                                        <a href="<?= base_url() . 'lahiran/edit/' . $r['id_lahiran']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url() . 'lahiran/hapus/' . $r['id_lahiran']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin akan menghapus data?')">Hapus</a>
                                    </td>
                                </tr>

                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <!-- End Table with stripped rows -->

    </div>
    </section>
    






