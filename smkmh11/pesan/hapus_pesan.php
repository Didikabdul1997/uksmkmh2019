<?php
    include "../bantu/koneksi.php";
    $id_pesan   = $_GET['id_pesan'];
    $login = mysqli_query($koneksi,"delete from pesan where id_pesan='$id_pesan'") or die(mysqli_error()."errorrorororororof");
    header("location:data_pesan.php");
?>