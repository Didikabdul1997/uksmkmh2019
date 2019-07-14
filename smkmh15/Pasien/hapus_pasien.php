<?php
    include "../bantu/koneksi.php";
    $kode_pasien   = $_GET['kode_pasien'];
    $login = mysqli_query($koneksi,"delete from pasien where kode_pasien='$kode_pasien'") or die(mysqli_error()."errorr");
    header("location:data_pasien.php");
?>