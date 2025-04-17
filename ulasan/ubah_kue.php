<!DOCTYPE html>
<html>
<head>
    <title>Tanball dats Ulasan Kueitie</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="ubah_kue_proses.php" method="POST">
        <?php
            include "config/koneksi.php";
            $id_ubah = $_GET['id_ubah'];
            $query = mysqli_query($koneksi, "SELECT * FROM tbkue WHERE kodekue = '$id_ubah'");
            $row = mysqli_fetch_array($query);
        ?>
        <table align="left" border="1">
            <td colspan="2" align="center">UBAH DATA ULASAN KUE</td>
            <tr>
                <td>Kode Kue</td>
                <td><input type="text" name="kode" value="<?php echo $row['kodekue']; ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Kue</td>
                <td><input type="text" name="nama" value="<?php echo $row['namakue']; ?>" ></td>            
            </tr>
            <tr>
                <td>Rating</td>
                <td><select name="rating">
                        <option value="<?php echo $row['rating']; ?>"><?php echo $row['rating']; ?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Catatan</td>
                <td><textarea name="catatan" placeholder="Masukkan catatan"><?php echo $row['catatan']; ?></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="ubah" value="UBAH">
                    <a href="data_kue.php">--Kembali--</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>