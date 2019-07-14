<?php
    include "../bantu/koneksi.php";
    $tgl_pembeli   = $_GET['tgl_pembeli'];
    $login = mysqli_query($koneksi,"delete from transaksi where tgl_pembeli ='$tgl_pembeli'") or die(mysqli_error()."errorrorororororof");
    header("location:data_transaksi.php");
?>