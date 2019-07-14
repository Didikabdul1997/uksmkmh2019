<?php
    include "../bantu/koneksi.php";
    $ID_karyawan   = $_GET['ID_karyawan'];
    $login = mysqli_query($koneksi,"delete from karyawan where ID_karyawan='$ID_karyawan'") or die(mysqli_error()."errorrorororororof");
    header("location:data_karyawan.php");
?>