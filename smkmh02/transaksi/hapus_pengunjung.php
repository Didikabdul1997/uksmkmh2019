<?php
    include "../bantu/koneksi.php";
    $ID_pengunjung   = $_GET['ID_pengunjung'];
    $login = mysqli_query($koneksi,"delete from pengunjung where ID_pengunjung='$ID_pengunjung'") or die(mysqli_error()."errorrorororororof");
    header("location:data_pengunjung.php");
?>