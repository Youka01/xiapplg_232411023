<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tambah_barang_proses.php" method="POST">
    <table border="1"> 
    <tr>
        <td colspan="2" align="center">
            TAMBAH DATA BARANG
        </td>
    </tr>
    <tr>
        <td >KODE   BARANG</td>
        <td><input type="text" name="kode" placeholder="Masukan Kode Barang" require></td>
    </tr>
    <tr>
        <td >NAMA   BARANG</td>
        <td><input type="text" name="nama" placeholder="Masukan Nama Barang" require></td>
    </tr>
    <tr>
        <td >STOK   BARANG</td>
        <td><input type="text" name="stok" placeholder="Masukan Stok Barang" require></td>
    </tr>
    <tr>
        <td >HARGA  BARANG</td>
        <td><input type="text" name="harga" placeholder="Masukan Harga Barang" require></td>
    </tr>
    <td colspan="2" align="center">
            <input type="submit" name="simpan" value="SIMPAN">
            <input type="reset" name="batal" value="BATAL">
    </td>
    </table>
</form>
</body>
</html>