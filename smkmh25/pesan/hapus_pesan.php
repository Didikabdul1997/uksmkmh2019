<?php
    include "../bantu/koneksi.php";
    $ID_pesan   = $_GET['ID_pesan'];
    $login = mysqli_query($koneksi,"delete from pesan where ID_pesan='$ID_pesan'") or die(mysqli_error()."errorrorororororof");
    header("location:data_pesan.php");
?>