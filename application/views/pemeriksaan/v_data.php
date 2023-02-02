<div class="card-body">
    <div class="card-header">
        <a href="<?= base_url('pemeriksaan/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
        <h5 class="card-title"><?php echo($title)?></h5>
        <?= $this->session->flashdata('pesan'); ?>
        <!-- Table with stripped rows -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>Tanggal Lahir</th>
                            <th>Nama pasien</th>
                            <th>Keluhan</th>
                            <th>Diagnosa</th>
                            <th>Hasil Pemeriksaan</th>
                            <th>Terapi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php $no = 1;
                        foreach ($pemeriksaan as $r) { ?>
                            <tr>
                                <td class="text-center"><?= $no; ?></td>
                                <td><?= $r['tanggal_lahir']; ?></td>
                                <td><?= $r['nama_pasien']; ?></td>
                                <td><?= $r['keluhan']; ?></td>
                                <td><?= $r['diagnosa']; ?></td>
                                <td><?= $r['hasil_pemeriksaan']; ?></td>
                                <td><?= $r['terapi']; ?></td>

                                <td>
                                    <a href="<?= base_url() . 'pemeriksaan/edit/' . $r['id_pemeriksaan']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url() . 'pemeriksaan/hapus/' . $r['id_pemeriksaan']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin akan menghapus data?')">Hapus</a>
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