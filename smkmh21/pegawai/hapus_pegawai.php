<?php
    include "../bantu/koneksi.php";
    $ID_pegawai   = $_GET['ID_pegawai'];
$nama   = $_GET['nama '];
$ttl   = $_GET['ttl'];
$alamat   = $_GET['alamat'];
 $login = mysqli_query($koneksi,"delete from pegawai where ID_pegawai ='$ID_pegawai'") or die(mysqli_error()."errorrorororororof");
    header("location:data_pegawai.php");
?>