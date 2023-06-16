<div class="card-body">
    <div class="card-header">
        <a href="<?= base_url('obat/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
        <h5 class="card-title">Data obat</h5>
        <?= $this->session->flashdata('pesan'); ?>
        <!-- Table with stripped rows -->
        <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="myTable" >
                        <thead>
                            <tr>
                                <th>NO.</th>
                                <th>Nama Obat</th>
                                <th>Jenis Obat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($obat as $r) { ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $r['nama_obat']; ?></td>
                                    <td><?= $r['jenis_obat']; ?></td>

                                    <td>
                                        <a href="<?= base_url() . 'obat/edit/' . $r['id_obat']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url() . 'obat/hapus/' . $r['id_obat']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin akan menghapus data?')">Hapus</a>
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
    






