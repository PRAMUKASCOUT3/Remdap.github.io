<div class="card-body">
    <!-- tes -->
    <div class="card-header">
        <a href="<?= base_url('pasien/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
        <h5 class="card-title"><?php echo($title)?></h5>
        <?= $this->session->flashdata('pesan'); ?>
        <!-- Table with stripped rows -->
        <table class="table table-striped table-responsive"  id="myTable">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Nama Pasien</th>
                    <th scope="col">L/P</th>
                    <th scope="col">Umur</th>
                    <th scope="col">alamat</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($pasien as $r) { ?>

                    <tr>
                        <td class="text-center"><?= $no; ?></td>
                        <td><?= $r['nama_pasien']; ?></td>
                        <td><?= $r['jenis_kelamin']; ?></td>
                        <td><?= $r['umur']; ?></td>
                        <td><?= $r['alamat']; ?> </td>
                        <td><?= $r['NIK']; ?> </td>



                        <td>
                            <a href="<?= base_url() . 'pasien/edit/' . $r['id_pasien']; ?>" class="btn btn-warning ">Edit</a>
                            <a href="<?= base_url() . 'pasien/hapus/' . $r['id_pasien']; ?>" class="btn btn-danger" onclick="return confirm('yakin akan menghapus data?')">Hapus</a>
                        </td>
                    </tr>

                <?php $no++;
                } ?>

            </tbody>
        </table>
        <!-- End Table with stripped rows -->

    </div>
    <!--  -->
    </section>