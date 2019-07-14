<?php
    include "../bantu/koneksi.php";
    $Id_Karyawan   = $_GET['Id_Karyawan'];
    $login = mysqli_query($koneksi,"delete from karyawan where Id_Karyawan='$Id_Karyawan'") or die(mysqli_error()."errorrorororororof");
    header("location:data_karyawan.php");
?>