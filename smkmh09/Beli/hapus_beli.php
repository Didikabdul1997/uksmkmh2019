<?php
    include "../bantu/koneksi.php";
    $ID_Customer   = $_GET['ID_Customer'];
    $login = mysqli_query($koneksi,"delete from beli where ID_Customer='$ID_Customer'") or die(mysqli_error()."errorrorororororof");
    header("location:data_beli.php");
?>