<?php
    include "../bantu/koneksi.php";
    $ID_Barang   = $_GET['ID_Barang'];
    $login = mysqli_query($koneksi,"delete from barang where ID_Barang='$ID_Barang'") or die(mysqli_error()."errorrorororororof");
    header("location:Data_barang.php");
?>