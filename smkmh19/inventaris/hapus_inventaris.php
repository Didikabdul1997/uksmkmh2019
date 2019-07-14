<?php
    include "../bantu/koneksi.php";
    $id_barang   = $_GET['id_barang'];
    $login = mysqli_query($koneksi,"delete from inventaris where id_barang='$id_barang'") or die(mysqli_error()."errorrorororororof");
    header("location:data_inventaris.php");
?>