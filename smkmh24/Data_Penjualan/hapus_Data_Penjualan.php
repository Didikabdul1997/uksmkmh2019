<?php
    include "../bantu/koneksi.php";
    $Kode_Transaksi   = $_GET['Kode_Transaksi'];
    $login = mysqli_query($koneksi,"delete from data_Penjualan where Kode_Transaksi='$Kode_Transaksi'") or die(mysqli_error()."errorrorororororof");
    header("location:data_data_penjualan.php");
?>