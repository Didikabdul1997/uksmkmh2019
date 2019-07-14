<?php
    include "../bantu/koneksi.php";
    $ID_Bidan   = $_GET['ID_Bidan'];
    $login = mysqli_query($koneksi,"delete from Bidan where ID_Bidan='$ID_Bidan'") or die(mysqli_error()."error");
    header("location:data_Bidan.php");
?>