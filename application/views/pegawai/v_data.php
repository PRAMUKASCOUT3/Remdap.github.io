<div class="card-body">
    <div class="card-header">
        <a href="<?= base_url('pegawai/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
        <h5 class="card-title"><?php echo($title)?></h5>
        <?= $this->session->flashdata('pesan'); ?>
        <!-- Table with stripped rows -->
        <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped"  id="myTable">
                        <thead>
                            <tr>
                                <th>NO.</th>
                                <th>Nama Pegawai</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Umur</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>No.Telpon</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($pegawai as $r) { ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $r['nama_pegawai']; ?></td>
                                    <td><?= $r['tempat_lahir']; ?></td>
                                    <td><?= $r['tanggal_lahir']; ?></td>
                                    <td><?= $r['umur']; ?></td>
                                    <td><?= $r['jenis_kelamin']; ?></td>
                                    <td><?= $r['alamat']; ?></td>
                                    <td><?= $r['no_telpon']; ?></td>

                                    <td>
                                        <a href="<?= base_url() . 'pegawai/edit/' . $r['id_pegawai']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url() . 'pegawai/hapus/' . $r['id_pegawai']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin akan menghapus data?')">Hapus</a>
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
    






