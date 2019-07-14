<?php
    include "../bantu/koneksi.php";
    $id  = $_GET['id'];
    $login = mysqli_query($koneksi,"delete from karyawan where id='$id'") or die(mysqli_error()."errorrorororororof");
    header("location:data_karyawan.php");
?>