<?php
    include "../bantu/koneksi.php";
    $id_karyawan   = $_GET['id_karyawan'];
    $login = mysqli_query($koneksi,"delete from karyawan where id_karyawan='$id_karyawan'") or die(mysqli_error()."errorrorororororof");
    header("location:Data_karyawan.php");
?>