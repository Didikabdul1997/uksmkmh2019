<?php
    include "../bantu/koneksi.php";
    $ID_pelanggan   = $_GET['ID_pelanggan'];
    $login = mysqli_query($koneksi,"delete from pelanggan where ID_pelanggan='$ID_pelanggan'") or die(mysqli_error()."errorrorororororof");
    header("location:data_pelanggan.php");
?>