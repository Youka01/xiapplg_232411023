<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <table border="1">
        <tr>
            <th colspan="10" align="center">DATA PASIEN</th>
        </tr>
        <tr align="center">
            <th>NO</th>
            <th>NO RM</th>
            <th>NAMA PASIEN</th>
            <th>TANGGAL PASIEN</th>
            <th>POLI</th>
            <th>CATATAN</th>
            <th colspan="2">AKSI</th>
        </tr>
        <?php
            include "config/koneksi.php";
            $no=1;
            $query=mysqli_query($koneksi, "SELECT * FROM tbpoli");
            while($row=mysqli_fetch_array($query)){
        ?>
        <tr align="center">
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['norm']; ?></td>
            <td><?php echo $row['namapasien']; ?></td>
            <td><?php echo $row['tanggalkunjungan']; ?></td>
            <td><?php echo $row['poli']; ?></td>
            <td><?php echo $row['catatandokter']; ?></td>
            <td><a href="ubah_poli.php?id_ubah=<?php echo $row['norm']; ?>">UBAH</a></td>
            <td><a href="hapus_poli.php?id_hapus=<?php echo $row['norm']; ?>">HAPUS</a></td>
        </tr>
        <?php } ?>
        <tr align="center">
            <td colspan="10" align="center"><a href="tambah_poli.php">Tambah Data pasien</a></td>
        </tr>
    </table>
</body>
</html>