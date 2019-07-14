<?php
    include "../bantu/koneksi.php";
    $id_kar   = $_GET['id_kar'];
    $login = mysqli_query($koneksi,"delete from karyawan where id_kar='$id_kar'") or die(mysqli_error()."errorrorororororof");
    header("location:data_karyawan.php");
?>