<?php
    include "../bantu/koneksi.php";
    $tgl_pembelian   = $_GET['tgl_pembelian'];
    $login = mysqli_query($koneksi,"delete from transaksi where tgl_pembelian='$tgl_pembelian'") or die(mysqli_error()."errorrorororororof");
    header("location:data_transaksi.php");
?>