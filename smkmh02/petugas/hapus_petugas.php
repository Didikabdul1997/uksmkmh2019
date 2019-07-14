<?php
    include "../bantu/koneksi.php";
    $ID_petugas   = $_GET['ID_petugas'];
    $login = mysqli_query($koneksi,"delete from petugas where ID_petugas='$ID_petugas'") or die(mysqli_error()."errorrorororororof");
    header("location:data_petugas.php");
?>