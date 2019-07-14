<?php
    include "../bantu/koneksi.php";
    $nama_barang   = $_GET['nama_barang'];
    $login = mysqli_query($koneksi,"delete from barang where nama_barang='$nama_barang'") or die(mysqli_error()."errorrorororororof");
    header("location:data_barang.php");
?>