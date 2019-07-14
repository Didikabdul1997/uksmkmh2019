<?php
    include "../bantu/koneksi.php";
    $ID_Karyawan   = $_GET['ID_Karyawan'];
    $login = mysqli_query($koneksi,"delete from Karyawan where ID_Karyawan='$ID_Karyawan'") or die(mysqli_error()."errorrorororororof");
    header("location:Data_Karyawan.php");
?>