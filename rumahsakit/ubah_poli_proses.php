<?php

include "config/koneksi.php";

$norm =$_POST['norm'];
$nama =$_POST['nama'];
$tanggal=$_POST['tanggal'];
$poli =$_POST['poli'];
$catatan =$_POST['catatan'];

$ubah=mysqli_query($koneksi, "UPDATE tbpoli SET namapasien='$nama', poli='$poli', tanggalkunjungan='$tanggal', catatandokter= '$catatan' WHERE norm='$norm'");
if ($ubah)
{
    echo "<script>alert('Data pasien berhasil disimpan');
    window.location ='data_poli.php';</script>";
}
else
{
    echo "<script>alert('Data pasien gagal disimpan');
    window.location ='data_poli.php';</script>";
}

?>
