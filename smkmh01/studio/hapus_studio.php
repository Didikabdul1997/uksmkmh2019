<?php
    include "../bantu/koneksi.php";
    $Kode_studio  = $_GET['Kode_studio'];
    $login = mysqli_query($koneksi,"delete from studio where Kode_studio='$Kode_studio'") or die(mysqli_error()."errorrorororororof");
    header("location:data_studio.php");
?>