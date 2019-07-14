<?php
    include "../bantu/koneksi.php";
    $ID_Pembeli   = $_GET['ID_Pembeli'];
    $login = mysqli_query($koneksi,"delete from pembeli where ID_Pembeli='$ID_Pembeli'") or die(mysqli_error()."errorrorororororof");
    header("location:Data_pembeli.php");
?>