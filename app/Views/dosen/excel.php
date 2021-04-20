<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Rekapan Data Verifikasi.xls");
?>

<html>
    <body>
        <table border="1">
            <thead>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Tanggal Verifikasi</th>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($hasil as $hasil) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $hasil->nim; ?></td>
                        <td><?= $hasil->nama; ?></td>
                        <td><?= $hasil->prodi; ?></td>
                        <td><?= $hasil->tgl_bebas_komdis; ?></td>
                    </tr>
                <?php $no ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>