<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
	<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css">
    <script>
        @media print {
    table {
        table-layout: fixed; /* mengatur lebar tabel tetap */
        width: 100%; /* mengatur lebar tabel 100% */
    }

    th, td {
        word-wrap: break-word; /* mengatur agar teks tidak keluar dari sel tabel */
        max-width: 100%; /* mengatur lebar maksimum teks pada sel tabel */
    }
}
    </script>
</head>
<body>
    <div class="container" >
    <header>
    <img src="<?= base_url()?>assets/img/logobidan.png" width = "100px" alt="Left Image" style="float: left;">
  <img src="<?= base_url()?>assets/img/logobidan.png" width = "100px" alt="Right Image" style="float: right;">
    <h2  class = "mb-0 text-center">BIDAN PRAKTEK MANDIRI</h2>
    <h2  class = "mb-0 text-center">Ny METHA ELI YANTI, S.Tr..Keb</h2>
        <p class = "text-center">JL.Sersan Darpin RT 01 Kel.Eka Jaya Kec. Paal Merah Jambi No.Telpon : 081210322936</p>
 <br>
</header>
       <HR></HR>
        <h2 Class = "text-center"><?php echo ($title)?></h2>

        <table class = "table table-bordered table-sm">
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
            </tr>
            <?php $no++;}?> 
        </table>
        <br>
        <table width = "100%">
            <tr>
                <td></td>
                <td class = "text-right">
                    <p>Kota Jambi, <?= date('d-m-Y');?></p>
                    Metha Eli Yanti,S.Tr..Keb
                    <br><br><br><br><br>
                    <b>_________________________</b>
					
                </td>
            </tr>

        </table>
    </div>
</body>
</html>