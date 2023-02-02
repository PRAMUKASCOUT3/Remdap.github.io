<div class="card-body">
    <div class="card-header">
        <a href="<?= base_url('lahiran/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
        <a href="<?= base_url('lahiran/cetak_laporan')?>" class = "btn btn-warning">Laporan</a>
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
                                <th>Nama Istri</th>
                                <th>Nama Suami</th>
                                <th>Umur Istri</th>
                                <th>Umur Suami</th>
                                <th>alamat</th>
                                <th>No.Telpon</th>
                                <th>pekerjaan Istri</th>
                                <th>Pekerjaan Suami</th>
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
                                    <td><?= $r['nama_istri']; ?></td>
                                    <td><?= $r['nama_suami']; ?></td>
                                    <td><?= $r['umur_istri']; ?></td>
                                    <td><?= $r['umur_suami']; ?></td>
                                    <td><?= $r['alamat']; ?></td>
                                    <td><?= $r['No_telpon']; ?></td>
                                    <td><?= $r['pekerjaan_istri']; ?></td>
                                    <td><?= $r['pekerjaan_suami']; ?></td>
                                    <td><?= $r['keluhan']; ?></td>
                                    <td><?= $r['tindakan']; ?></td>
                                    <td><?= $r['bayi_lahir']; ?></td>
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
    






