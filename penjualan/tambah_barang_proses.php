<?php

include "config/koneksi.php";

$kode =$_POST['kode'];
$nama =$_POST['nama'];
$stok =$_POST['stok'];
$harga=$_POST['harga'];

$simpan = mysqli_query($koneksi,"INSERT INTO tbbarang VALUES ('$kode','$nama','$stok','$harga')");
if($simpan)
{
    echo"<script>alert('Data barang berhasil disimpan');
    window.location.href='data_barang.php';</script>";
}
else
{
    echo"<script>alert('Data barang gagal disimpan');
    window.location.href='tambah_barang.php';</script>";
}
?>
