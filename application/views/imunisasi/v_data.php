<section class="content mt-2">

<div class="container-fluid">


<div class="card border-primary">
<div class="card-header">
<a href="<?= base_url('imunisasi/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
<a href="<?= base_url('imunisasi/cetak_laporan')?>" class = "btn btn-warning">Laporan</a>
<h5 class="card-title"><?php echo($title)?></h5>
<?= $this->session->flashdata('pesan'); ?>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped" id="myTable">
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>tanggal</th>
                    <th>Nama Bayi</th>
                    <th>Tanggal Lahir</th>
                    <th>Nama Orang Tua</th>
                    <th>alamat</th>
                    <th>Jenis Imunisasi</th>
                    <th>Pengobatan</th>
                    <th>Keterangan</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($imunisasi as $r) { ?>
                    <tr>
                        <td class="text-center"><?= $no; ?></td>
                        <td><?= $r['tanggal']; ?></td>
                        <td><?= $r['nama_pasien']; ?></td>
                        <td><?= $r['tanggal_lahir']; ?></td>
                        <td><?= $r['nama_orang_tua']; ?></td>
                        <td><?= $r['alamat']; ?></td>
                        <td><?= $r['jenis_imunisasi']; ?></td>
                        <td><?= $r['pengobatan']; ?></td>
                        <td><?= $r['keterangan']; ?></td>

                        <td>
                            <a href="<?= base_url() . 'imunisasi/edit/' . $r['id_imunisasi']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url() . 'imunisasi/hapus/' . $r['id_imunisasi']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin akan menghapus data?')">Hapus</a>
                        </td>
                    </tr>

                <?php $no++;
                } ?>

            </tbody>
        </table>
    </div>
</div>

</div>
</div>
</section>