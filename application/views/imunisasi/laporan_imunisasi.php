<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

	<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <header>
    <img src="<?= base_url()?>assets/img/logobidan.png" width = "100px" alt="Left Image" style="float: left;">
  <img src="<?= base_url()?>assets/img/logobidan.png" width = "100px" alt="Right Image" style="float: right;">
    <h2  class = "mb-0 text-center">BIDAN PRAKTEK MANDIRI</h2>
    <h2  class = "mb-0 text-center">Ny METHA ELI YANTI, S.Tr..Keb</h2>
        <p class = "text-center">JL.Sersan Darpin RT 01 Kel.Eka Jaya Kec. Paal Merah Jambi No.Telpon : 081210322936</p>
 <br>
</header>
<HR></HR>
        <h2 Class = "text-center"><?php echo($title);?></h2>

        <table class = "table table-bordered table-sm">
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