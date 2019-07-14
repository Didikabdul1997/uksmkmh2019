<?php
    include "../bantu/koneksi.php";
    $Kode_film   = $_GET['Kode_film'];
    $login = mysqli_query($koneksi,"delete from tiket where Kode_film ='$Kode_film '") or die(mysqli_error()."errorrorororororof");
    header("location:data_tiket.php");
?>