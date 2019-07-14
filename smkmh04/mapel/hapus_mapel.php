<?php
    include "../bantu/koneksi.php";
    $ID_MAPEL   = $_GET['ID_MAPEL'];
    $login = mysqli_query($koneksi,"delete from mapel where ID_MAPEL='$ID_MAPEL'") or die(mysqli_error()."errorrorororororof");
    header("location:data_mapel.php");
?>