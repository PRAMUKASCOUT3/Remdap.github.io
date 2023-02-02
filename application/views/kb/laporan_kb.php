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
       <hr>
        <h2 Class = "text-center"><?php echo($title);?></h2>

        <table class = "table table-bordered table-sm">
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
            </tr>
            <?php $no=1; foreach ($kb as $r){?>
            <tr>
                <th><?= $no; ?></th>
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
                        <td><?= $r['keterangan']; ?></td>>
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