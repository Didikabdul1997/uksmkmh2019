<?php
    include "../bantu/koneksi.php";
    $kode_costumer   = $_GET['kode_costumer'];
    $login = mysqli_query($koneksi,"delete from costumer where kode_costumer='$kode_costumer'") or die(mysqli_error()."errorrorororororof");
    header("location:data_costumer.php");
?>