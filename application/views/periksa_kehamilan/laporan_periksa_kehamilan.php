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
                                <th>NO.</th>
                                <th>tanggal</th>
                                <th>Nama Istri</th>
                                <th>Nama Suami</th>
                                <th>Umur Istri</th>
                                <th>Umur Suami</th>
                                <th>alamat</th>
                                <th>No.Telpon</th>
                                <th>Gravida</th>
                                <th>Partus</th>
                                <th>Abortus</th>
                                <th>HPHT</th>
                                <th>TP</th>
                                <th>Pemeriksaan</th>
                                <th>keluhan</th>
                                <th>terapi</th>
                                <th>keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($periksa_kehamilan as $r) { ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $r['Tanggal']; ?></td>
                                    <td><?= $r['nama_istri']; ?></td>
                                    <td><?= $r['nama_suami']; ?></td>
                                    <td><?= $r['umur_istri']; ?></td>
                                    <td><?= $r['umur_suami']; ?></td>
                                    <td><?= $r['alamat']; ?></td>
                                    <td><?= $r['no_telpon']; ?></td>
                                    <td><?= $r['Gravida']; ?></td>
                                    <td><?= $r['Partus']; ?></td>
                                    <td><?= $r['Abortus']; ?></td>
                                    <td><?= $r['HPHT']; ?></td>
                                    <td><?= $r['TP']; ?></td>
                                    <td><?= $r['pemeriksaan']; ?></td>
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