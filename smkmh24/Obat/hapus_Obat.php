<?php
    include "../bantu/koneksi.php";
    $Id_Obat   = $_GET['Id_Obat'];
    $login = mysqli_query($koneksi,"delete from obat where Id_Obat='$Id_Obat'") or die(mysqli_error()."errorrorororororof");
    header("location:data_obat.php");
?>