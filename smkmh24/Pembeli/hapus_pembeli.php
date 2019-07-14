<?php
    include "../bantu/koneksi.php";
    $Id_Pembeli   = $_GET['Id_Pembeli'];
    $login = mysqli_query($koneksi,"delete from pembeli where Id_Pembeli='$Id_Pembeli'") or die(mysqli_error()."errorrorororororof");
    header("location:data_pembeli.php");
?>