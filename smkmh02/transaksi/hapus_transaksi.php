<?php
    include "../bantu/koneksi.php";
    $ID_transaksi   = $_GET['ID_transaksi'];
    $login = mysqli_query($koneksi,"delete from transaksi where ID_transaksi='$ID_transaksi'") or die(mysqli_error()."errorrorororororof");
    header("location:data_transaksi.php");
?>