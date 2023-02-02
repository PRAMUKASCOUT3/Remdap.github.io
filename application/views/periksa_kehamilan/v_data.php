<div class="card-body">
    <div class="card-header">
        <a href="<?= base_url('periksa_kehamilan/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
        <a href="<?= base_url('periksa_kehamilan/cetak_laporan')?>" class = "btn btn-warning">Laporan</a>
        <h5 class="card-title"><?php echo($title)?></h5>
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
                                <th>Gravida</th>
                                <th>Partus</th>
                                <th>Abortus</th>
                                <th>HPHT</th>
                                <th>TP</th>
                                <th>Pemeriksaan</th>
                                <th>keluhan</th>
                                <th>terapi</th>
                                <th>keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($periksa_kehamilan as $r) { ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $r['Tanggal']; ?></td>
                                    <td><?= $r['nama_istri']; ?></td>
                                    <td><?= $r['nama_suami']; ?></td>
                                    <td><?= $r['umur_istri']; ?></td>
                                    <td><?= $r['umur_suami']; ?></td>
                                    <td><?= $r['alamat']; ?></td>
                                    <td><?= $r['no_telpon']; ?></td>
                                    <td><?= $r['Gravida']; ?></td>
                                    <td><?= $r['Partus']; ?></td>
                                    <td><?= $r['Abortus']; ?></td>
                                    <td><?= $r['HPHT']; ?></td>
                                    <td><?= $r['TP']; ?></td>
                                    <td><?= $r['pemeriksaan']; ?></td>
                                    <td><?= $r['keluhan']; ?></td>
                                    <td><?= $r['terapi']; ?></td>
                                    <td><?= $r['keterangan']; ?></td>


                                    <td>
                                        <a href="<?= base_url() . 'periksa_kehamilan/edit/' . $r['id_periksa']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url() . 'periksa_kehamilan/hapus/' . $r['id_periksa']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin akan menghapus data?')">Hapus</a>
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
    






