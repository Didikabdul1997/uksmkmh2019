<?php
    include "../bantu/koneksi.php";
    $id_pelanggan  = $_GET['id_pelanggan'];
    $login = mysqli_query($koneksi,"delete from pelangan where id_pelanggan='$id_pelanggan'") or die(mysqli_error()."errorrorororororof");
    header("location:data_pelanggan.php");
?>