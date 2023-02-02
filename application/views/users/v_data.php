<div class="card-body">
    <div class="card-header">
        <a href="<?= base_url('users/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
        <h5 class="card-title">Data User</h5>
        <?= $this->session->flashdata('pesan'); ?>
        <!-- Table with stripped rows -->
        <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NO.</th>
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Hak Akses</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($users as $r) { ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $r['username']; ?></td>
                                    <td><?= $r['nama_lengkap']; ?></td>
                                    <td><?= $r['hak_akses']; ?></td>

                                    <td>
                                        <a href="<?= base_url() . 'users/edit/' . $r['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url() . 'users/hapus/' . $r['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin akan menghapus data?')">Hapus</a>
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
    






