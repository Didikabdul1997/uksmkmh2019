<?php
    include "../bantu/koneksi.php";
    $kode_obat   = $_GET['kode_obat'];
    $login = mysqli_query($koneksi,"delete from Obat where kode_obat='$kode_obat'") or die(mysqli_error()."errorr");
    header("location:data_Obat.php");
?>