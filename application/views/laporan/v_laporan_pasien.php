<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>
    <div class="container">
        <h1>Bidan Metha Eli Yanti</h1>
        <small>jl.Sersan Darpin RT 01 Kel.Eka Jaya</small>
        <hr>
        <h2>Laporan Data Pasien</h2>

        <table border = "1" cellpadding = "4" cellspacing = "0">
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>NIK</th>
            </tr>
            <?php $no=1; foreach ($pasien as $r){?>
            <tr>
                <th><?= $no; ?></th>
                <th><?= $r['nama_pasien']?></th>
                <th><?= $r['jenis_kelamin']?></th>
                <th><?= $r['umur']?></th>
                <th><?= $r['alamat']?></th>
                <th><?= $r['NIK']?></th>
            </tr>
            <?php $no++;}?> 
        </table>
        <br>
        <table width = "100%">
            <tr>
                <td></td>
                <td>
                    <p>Kota Jambi, <?= date('d-m-Y');?></p>
                    <br>
                    Bidan Metha Eli Yanti,
                    <br><br><br><br>
                    <b>_________________________</b>
                </td>
            </tr>

        </table>
    </div>
</body>
</html>