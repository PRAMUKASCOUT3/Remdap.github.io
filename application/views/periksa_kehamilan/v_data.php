<div class="card-body">
    <div class="card-header">
        <a href="<?= base_url('periksa_kehamilan/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
        <h5 class="card-title"><?php echo($title)?></h5>
        <?= $this->session->flashdata('pesan'); ?>
        <!-- Table with stripped rows -->
        <div class="card-body">
            <div class="table-responsive ">
            <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
    <tr>
        <th scope="col">NO.</th>
        <th scope="col">tanggal</th>
        <th scope="col">Identitas</th>
        <th scope="col">alamat</th>
        <th scope="col">G</th>
        <th scope="col">P</th>
        <th scope="col">A</th>
        <th scope="col">HPHT</th>
        <th scope="col">TP</th>
        <th scope="col">Pemeriksaan</th>
        <th scope="col">keluhan</th>
        <th scope="col">terapi</th>
        <th scope="col">keterangan</th>
        <th scope="col">Aksi</th>
    </tr>
</thead>
<tbody>
    <?php $no = 1;
    foreach ($periksa_kehamilan as $r) { ?>
        <tr>
            <td class="text-center "><?= $no; ?></td>
            <td><?= $r['Tanggal']; ?></td>
            <td>
                Nama Istri : <?= $r['nama_istri']; ?><br>
                Nama Suami : <?= $r['nama_suami']; ?><br>
                Umur Istri : <?= $r['umur_istri']; ?><br>
                Umur Suami : <?= $r['umur_suami']; ?><br>
                No.Telpon : <?= $r['no_telpon']; ?><br>
            </td>
            <td><?= $r['alamat']; ?></td>
            <td><?= $r['Gravida']; ?></td>
            <td><?= $r['Partus']; ?></td>
            <td><?= $r['Abortus']; ?></td>
            <td><?= $r['HPHT']; ?></td>
            <td><?= $r['TP']; ?></td>
            <td>
                LILA : <?= $r['LILA']; ?>
                <hr class="line-title">
                BB : <?= $r['BB']; ?>
                <hr class="line-title">
                TD : <?= $r['TD']; ?>
                <hr class="line-title">
                HAMIL : <?= $r['HAMIL']; ?>
                <hr class="line-title">
                TFU : <?= $r['TFU']; ?>
                <hr class="line-title">
                LETAK JANIN : <?= $r['LETAK_JANIN']; ?>
                <hr class="line-title">
                DJJ : <?= $r['DJJ']; ?>
                <hr class="line-title">
                LAB/HB : <?= $r['LAB/HB']; ?>
            </td>
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