<?php
    include "../bantu/koneksi.php";
    $id_pegawai   = $_GET['id_pegawai'];
    $login = mysqli_query($koneksi,"delete from pegawai where id_pegawai='$id_pegawai'") or die(mysqli_error()."errorrorororororof");
    header("location:data_pegawai.php");
?>