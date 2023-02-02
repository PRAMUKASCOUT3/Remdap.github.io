<div class="card-body">
    <!-- tes -->
    <div class="card-header table-responsive"  >
        <a href="<?= base_url('kb/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
        <a href="<?= base_url('kb/cetak_laporan')?>" class = "btn btn-warning">Laporan</a>
        <h5 class="card-title"><?php echo($title)?></h5>
        <?= $this->session->flashdata('pesan'); ?>
        <!-- Table with stripped rows -->
        <table class="table table-bordered table-striped" id="myTable">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">No.Reg</th>
                    <th scope="col">Nama Istri</th>
                    <th scope="col">Nama suami</th>
                    <th scope="col">Umur Istri</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">TD</th>
                    <th scope="col">BB</th>
                    <th scope="col">Metode</th>
                    <th scope="col">Kunjungan Ulang</th>
                    <th scope="col">NIK/NO.HP</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($kb as $r) { ?>
                    <tr>
                        <td class="text-center"><?= $no; ?></td>
                        <td><?= $r['tanggal']; ?></td>
                        <td><?= $r['no_regis']; ?></td>
                        <td><?= $r['nama_istri']; ?></td>
                        <td><?= $r['nama_suami']; ?></td>
                        <td><?= $r['umur_istri']; ?>tahun</td>
                        <td><?= $r['alamat']; ?></td>
                        <td><?= $r['TD']; ?></td>
                        <td><?= $r['BB']; ?></td>
                        <td><?= $r['metode']; ?></td>
                        <td><?= $r['kunjungan_ulang']; ?></td>
                        <td><?= $r['NIK_NO_HP']; ?></td>
                        <td><?= $r['keterangan']; ?></td>

                        <td>
                            <a href="<?= base_url() . 'kb/edit/' . $r['id_kb']; ?>" class="btn btn-warning ">Edit</a>
                            <a href="<?= base_url() . 'kb/hapus/' . $r['id_kb']; ?>" class="btn btn-danger" onclick="return confirm('yakin akan menghapus data?')">Hapus</a>
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