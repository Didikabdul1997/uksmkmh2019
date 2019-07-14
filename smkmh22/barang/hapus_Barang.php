<?php
    include "../bantu/koneksi.php";
    $kode_barang   = $_GET['kode_barang'];
    $login = mysqli_query($koneksi,"delete from barang where kode_barang='$kode_barang'") or die(mysqli_error()."errorrorororororof");
    header("location:data_Barang.php");
?>