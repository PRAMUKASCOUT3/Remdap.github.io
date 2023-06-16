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
                                <th>NO.</th>
                                <th>tanggal</th>
                                <th>Identitas</th>
                                <th>keluhan</th>
                                <th>tindakan</th>
                                <th>Bayi Lahir</th>
                                <th>keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($lahiran as $r) { ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $r['tanggal']; ?></td>
                                    <td>
                                        Nama Istri      : <?= $r['nama_istri']?><br>
                                        Nama Suami      : <?= $r['nama_suami']?><br>
                                        Umur Istri      : <?= $r['umur_istri']?><br>
                                        Umur Suami      : <?= $r['umur_suami']?><br>
                                        No.Hp           : <?= $r['No_telpon']?><br>
                                        Pekerjaan Istri : <?= $r['pekerjaan_istri']?><br>
                                        Pekerjaan suami : <?= $r['pekerjaan_suami']?><br>
                                    </td>
                                    <td> OS. Dengan Keluhan : <br>
                                    <?= $r['keluhan']; ?></td>
                                    <td>
                                        TTV :
                                        TD  : <?= $r['TD']?><br>
                                        S   : <?= $r['S']?><br>
                                        BB  : <?= $r['BB']?><br>
                                        TFU : <?= $r['TFU']?><br>
                                        DJJ : <?= $r['DJJ']?><br>
                                        PD  : <?= $r['PD']?><br>
                                        PORSIO : <?= $r['porsio1']?>,
                                        <?= $r['porsio2']?><br>
                                        Ketuban : <?= $r['ketuban']?><br>
                                        Penurunan/HOD : <?= $r['penurunan_HOD']?>
                                    </td>
                                    <td>
                                        Pukul : <?= $r['pukul']?><br>
                                        Tanggal Lahir : <?= $r['bayi_lahir']?><br>
                                        BB : <?= $r['berat_badan']?><br>
                                        PB : <?= $r['PB']?> CM <br>
                                        JK : <?= $r['JK']?><br>
                                        Anus : <?= $r['anus']?><br>
                                    </td>
                                    <td><?= $r['keterangan']; ?></td>
                            </tr>
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