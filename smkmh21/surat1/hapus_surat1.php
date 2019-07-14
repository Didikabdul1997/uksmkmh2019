<?php
    include "../bantu/koneksi.php";
    $id_surat1   = $_GET['id_surat1'];
$nama   = $_GET['nama '];
$tanggal   = $_GET['tanggal'];
$alamat   = $_GET['alamat'];
 $login = mysqli_query($koneksi,"delete from surat1 where id_surat1 ='$id_surat1'") or die(mysqli_error()."errorrorororororof");
    header("location:data_surat1.php");
?>