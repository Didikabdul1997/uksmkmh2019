<?php
    include "../bantu/koneksi.php";
    $id_pelanggaran   = $_GET['id_pelanggaran'];
    $login = mysqli_query($koneksi,"delete from pelanggaran where id_pelanggaran='$id_pelanggaran'") or die(mysqli_error()."errorrorororororof");
    header("location:data_pelanggaran.php");
?>