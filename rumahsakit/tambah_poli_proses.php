<?php

include "config/koneksi.php";

$norm =$_POST['norm'];
$nama =$_POST['nama'];
$tanggal=$_POST['tanggal'];
$poli =$_POST['poli'];
$catatan =$_POST['catatan'];


$simpan =mysqli_query($koneksi, "INSERT INTO tbpoli VALUES ('$norm', '$nama', '$tanggal', '$poli', '$catatan')");
if ($simpan)
{
    echo "<script>alert('Data pasien berhasil disimpan');
    window.location.href='data_poli.php';</script>";
}
else
{
    echo "<script>alert('Data pasien gagal disimpan');
    window.location.href='tambah_poli.php';</script>";
}

?>
