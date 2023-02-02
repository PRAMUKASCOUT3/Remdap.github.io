<div class="card-body">
    <div class="card-header">
        <a href="<?= base_url('rekam_medis/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
        <h5 class="card-title"><?php echo($title)?></h5>
        <?= $this->session->flashdata('pesan'); ?>
        <!-- Table with stripped rows -->
        <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>NO.</th>
                                <th>Tanggal</th>
                                <th>Nama pasien</th>
                                <th>Nama Periksa</th>
                                <th>Hasil Pemeriksaan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($rekam_medis as $r) { ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $r['tanggal']; ?></td>
                                    <td><?php echo $r['nama_pasien']; ?></td>
                                    <td><?php echo $r['nama_pegawai']; ?></td>
                                    <td><?php echo $r['hasil_pemeriksaan']; ?></td>

                                    <td>
                                        <a href="<?= base_url() . 'rekam_medis/edit/' . $r['id_rekam_medis']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url() . 'rekam_medis/hapus/' . $r['id_rekam_medis']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin akan menghapus data?')">Hapus</a>
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
    






