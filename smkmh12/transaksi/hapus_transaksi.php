<?php
    include "../bantu/koneksi.php";
    $id_transaksi   = $_GET['id_transaksi'];
    $login = mysqli_query($koneksi,"delete from transaksi where id_transaksi='$id_transaksi'") or die(mysqli_error()."errorrorororororof");
    header("location:data_transaksi.php");

